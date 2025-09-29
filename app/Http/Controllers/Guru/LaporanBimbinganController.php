<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\Auth;
use App\Models\LaporanBimbingan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;


class LaporanBimbinganController extends Controller
{
    private function getTemplateSurat()
    {
        return [
            'surat_perjanjian' => [
                'label' => 'Surat Perjanjian Siswa',
                'fields' => [
                    'isi_janji' => ['label' => 'Isi Poin-Poin Perjanjian', 'type' => 'textarea', 'required' => true, 'placeholder' => 'Siswa berjanji untuk...'],
                ]
            ],
            'surat_penyerahan_ortu' => [
                'label' => 'Surat Penyerahan Kembali ke Orang Tua',
                'fields' => [
                    'tempat_lahir' => ['label' => 'Tempat Lahir Siswa', 'type' => 'text', 'required' => true],
                    'tanggal_lahir' => ['label' => 'Tanggal Lahir Siswa', 'type' => 'date', 'required' => true],
                    'jenis_kelamin' => ['label' => 'Jenis Kelamin Siswa', 'type' => 'select', 'required' => true, 'options' => ['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan']],
                ]
            ],
            'surat_peringatan' => [
                'label' => 'Surat Peringatan',
                'fields' => [
                    'deskripsi_pelanggaran' => ['label' => 'Deskripsi Pelanggaran yang Dilakukan', 'type' => 'textarea', 'required' => true],
                ]
            ],
            'surat_skorsing' => [
                'label' => 'Surat Skorsing',
                'fields' => [
                    'tanggal_mulai_skorsing' => ['label' => 'Skorsing Berlaku Mulai Tanggal', 'type' => 'date', 'required' => true],
                    'tanggal_selesai_skorsing' => ['label' => 'Skorsing Selesai Tanggal', 'type' => 'date', 'required' => true],
                    'tanggal_masuk_kembali' => ['label' => 'Siswa Masuk Kembali Hari/Tanggal', 'type' => 'text', 'required' => true, 'placeholder' => 'Contoh: Senin, 20 Oktober 2025'],
                ]
            ],
            'surat_undangan_ortu' => [
                'label' => 'Surat Undangan Orang Tua',
                'fields' => [
                    'tanggal_undangan' => ['label' => 'Hari/Tanggal Undangan', 'type' => 'text', 'required' => true, 'placeholder' => 'Contoh: Senin, 20 Oktober 2025'],
                    'jam_undangan' => ['label' => 'Jam', 'type' => 'time', 'required' => true],
                    'tempat_undangan' => ['label' => 'Tempat', 'type' => 'text', 'required' => true, 'value' => 'Ruang Bimbingan Konseling'],
                ]
            ],
        ];
    }

    public function create($jadwalId)
    {
        $jadwal = JadwalBimbingan::find($jadwalId);
        if (!$jadwal) {
            abort(404, 'Jadwal bimbingan tidak ditemukan.');
        }

        if ($jadwal->konselor_id !== Auth::id()) {
            abort(403, 'Anda tidak berhak membuat laporan untuk jadwal ini.');
        }

        return view('guru.laporan.create', [
            'jadwal' => $jadwal,
            // Mengirim struktur template yang benar ke view
            'templateSurat' => $this->getTemplateSurat(),
        ]);
    }


    public function store(Request $request, $jadwalId)
    {
        // dd($request->all());
        $jadwal = JadwalBimbingan::find($jadwalId);
        if (!$jadwal) {
            abort(404, 'Jadwal bimbingan tidak ditemukan.');
        }

        if ($jadwal->konselor_id !== Auth::id()) {
            abort(403, 'Anda tidak berhak menyimpan laporan untuk jadwal ini.');
        }

        $templates = $this->getTemplateSurat();
        $selectedTemplateKey = $request->jenis_surat;
        $selectedTemplate = $templates[$selectedTemplateKey] ?? null;

        if (!$selectedTemplate) {
            return back()->with('error', 'Jenis surat tidak valid.');
        }

        // Validasi dinamis berdasarkan field yang dibutuhkan
        $validationRules = [
            'jenis_surat' => 'required|in:' . implode(',', array_keys($templates)),
            'isi_laporan' => 'nullable|string',
            'rencana_tindak_lanjut' => 'nullable|string',
        ];

        $dynamicFieldsData = [];
        foreach ($selectedTemplate['fields'] as $key => $config) {
            if ($config['required']) {
                $validationRules[$key] = 'required';
            }
            if (in_array($key, ['tanggal_mulai_skorsing', 'tanggal_selesai_skorsing', 'tanggal_lahir'])) {
                $dynamicFieldsData[$key] = Carbon::parse($request->input($key))->isoFormat('dddd, D MMMM YYYY');
            }
            // Khusus untuk textarea janji, format dengan list
            if ($key === 'isi_janji') {
                $lines = explode("\n", trim($request->input($key)));
                $formattedLines = [];
                foreach ($lines as $index => $line) {
                    $formattedLines[] = ($index + 1) . ". " . trim($line);
                }
                $dynamicFieldsData[$key] = implode("\n", $formattedLines);
            } else {
                $dynamicFieldsData[$key] = $request->input($key);
            }
        }

        $request->validate($validationRules);

        $templatePath = storage_path("app/templates/{$selectedTemplateKey}.docx");
        if (!file_exists($templatePath)) {
            return back()->with('error', 'Template surat tidak ditemukan.');
        }

        $templateProcessor = new TemplateProcessor($templatePath);
        $siswa = $jadwal->siswa->load(['waliMurid', 'waliKelas']);

        // Menggabungkan data statis dan dinamis untuk template
        $staticData = [
            'nama_siswa' => $siswa->nama,
            'nis' => $siswa->nis,
            'kelas' => $siswa->kelas,
            'nama_ortu' => $siswa->waliMurid->nama ?? 'N/A',
            'nama_walas' => $siswa->waliKelas->nama ?? 'N/A',
            'nama_konselor' => Auth::user()->name,
            'nip_konselor' => Auth::user()->guru->nip ?? 'N/A',
            'tanggal_surat' => Carbon::now()->isoFormat('D MMMM YYYY'),
            'isi_laporan' => $request->isi_laporan ?? '-',
            'tindak_lanjut' => $request->rencana_tindak_lanjut ?? '-',
        ];
        if (isset($dynamicFieldsData['tanggal_mulai_skorsing'])) {
            $dynamicFieldsData['tanggal_mulai_skorsing'] = Carbon::parse($dynamicFieldsData['tanggal_mulai_skorsing'])->isoFormat('dddd, D MMMM YYYY');
        }
        if (isset($dynamicFieldsData['tanggal_selesai_skorsing'])) {
            $dynamicFieldsData['tanggal_selesai_skorsing'] = Carbon::parse($dynamicFieldsData['tanggal_selesai_skorsing'])->isoFormat('dddd, D MMMM YYYY');
        }
        if (isset($dynamicFieldsData['tanggal_lahir'])) {
            $dynamicFieldsData['tanggal_lahir'] = Carbon::parse($dynamicFieldsData['tanggal_lahir'])->isoFormat('D MMMM YYYY');
        }
        if (isset($dynamicFieldsData['isi_janji'])) {
            $lines = explode("\n", trim($dynamicFieldsData['isi_janji']));
            $formattedLines = [];
            foreach ($lines as $index => $line) {
                $formattedLines[] = ($index + 1) . ". " . trim($line);
            }
            $dynamicFieldsData['isi_janji'] = implode("\n", $formattedLines);
        }

        $templateData = array_merge($staticData, $dynamicFieldsData);

        // Debug isi array yang dikirim ke Word



        $templateData = array_merge($staticData, $dynamicFieldsData);
        $templateProcessor->setValues($templateData);

        $fileName = "laporan_{$selectedTemplateKey}_" . $siswa->nis . '_' . time() . '.docx';
        $path = "laporan_word/{$fileName}";
        if (!Storage::disk('public')->exists('laporan_word')) {
            Storage::disk('public')->makeDirectory('laporan_word');
        }
        $templateProcessor->saveAs(storage_path("app/public/{$path}"));

        LaporanBimbingan::create([
            'jadwal_id' => $jadwal->id,
            'jenis_surat' => $selectedTemplateKey,
            'isi_laporan' => $request->isi_laporan,
            'rencana_tindak_lanjut' => $request->rencana_tindak_lanjut,
            'file_pendukung' => $path,
            'dibuat_oleh' => Auth::id(),
        ]);

        $jadwal->update(['status' => 'selesai']);

        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Laporan berhasil dibuat dan status jadwal telah diubah menjadi Selesai.');
    }

    // ================= AKHIR MODIFIKASI =================

    public function show(LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }
        $laporanBimbingan->load('jadwalBimbingan.siswa', 'pembuat');
        return view('guru.laporan.show', compact('laporanBimbingan'));
    }

    public function edit(LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }
        $laporanBimbingan->load('jadwalBimbingan.siswa');
        return view('guru.laporan.edit', compact('laporanBimbingan'));
    }

    public function update(Request $request, LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'isi_laporan' => 'required|string',
            'rencana_tindak_lanjut' => 'nullable|string',
        ]);

        $laporanBimbingan->update($request->all());

        return redirect()->route('guru.laporan.show', $laporanBimbingan->id)->with('success', 'Laporan berhasil diperbarui.');
    }

    public function downloadPdf(LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }

        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh.guru');

        $pdf = Pdf::loadView('guru.laporan.pdf', compact('laporanBimbingan'));

        $namaFile = 'laporan-bimbingan-' . Str::slug($laporanBimbingan->jadwalBimbingan->siswa->nama) . '.pdf';

        return $pdf->download($namaFile);
    }
}
