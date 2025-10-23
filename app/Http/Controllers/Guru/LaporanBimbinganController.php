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
use Illuminate\Support\Facades\DB;
use App\Models\LaporanDokumen;
use App\Models\Siswa;
use App\Models\JenisPelanggaran;
use App\Models\PelanggaranSiswa;



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
        $jadwal = JadwalBimbingan::find($jadwalId);
        if (!$jadwal) {
            abort(404);
        }
        if ($jadwal->konselor_id !== Auth::id()) {
            abort(403);
        }

        $templates = $this->getTemplateSurat();
        $selectedTemplateKeys = $request->input('jenis_surat', []); // Sekarang array

        if (empty($selectedTemplateKeys)) {
            return back()->withErrors(['jenis_surat' => 'Pilih setidaknya satu jenis surat.'])->withInput();
        }

        // Kumpulkan semua field dinamis yang dibutuhkan dari SEMUA template yang dipilih
        $allRequiredFields = [];
        $validationRules = [
            'jenis_surat' => 'required|array', // Validasi sebagai array
            'jenis_surat.*' => 'in:' . implode(',', array_keys($templates)), // Setiap item harus valid
            'isi_laporan' => 'nullable|string',
            'rencana_tindak_lanjut' => 'nullable|string',
        ];

        foreach ($selectedTemplateKeys as $key) {
            $templateConfig = $templates[$key] ?? null;
            if ($templateConfig) {
                foreach ($templateConfig['fields'] as $fieldKey => $config) {
                    if ($config['required'] && !isset($validationRules[$fieldKey])) {
                        $validationRules[$fieldKey] = 'required';
                    }
                    $allRequiredFields[$fieldKey] = $config; // Kumpulkan semua field unik
                }
            }
        }

        $request->validate($validationRules);

        // Siapkan data statis sekali saja
        $siswa = $jadwal->siswa->load(['waliMurid', 'waliKelas']);
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

        // Ambil data dinamis dari request
        $dynamicFieldsData = $request->only(array_keys($allRequiredFields));

        // Format data dinamis (tanggal, janji, dll.)
        foreach ($dynamicFieldsData as $key => &$value) {
            if (isset($allRequiredFields[$key])) {
                if (in_array($key, ['tanggal_mulai_skorsing', 'tanggal_selesai_skorsing', 'tanggal_lahir'])) {
                    $value = Carbon::parse($value)->isoFormat('dddd, D MMMM YYYY');
                } elseif ($key === 'isi_janji') {
                    $lines = explode("\n", trim($value));
                    $formattedLines = [];
                    foreach ($lines as $index => $line) {
                        $formattedLines[] = ($index + 1) . ". " . trim($line);
                    }
                    $value = implode("\n", $formattedLines);
                }
            }
        }
        unset($value); // Hapus referensi

        $templateData = array_merge($staticData, $dynamicFieldsData);

        // Gunakan transaksi database
        DB::beginTransaction();
        try {
            // 1. Buat record laporan utama
            $laporanBimbingan = LaporanBimbingan::create([
                'jadwal_id' => $jadwal->id,
                'isi_laporan' => $request->isi_laporan,
                'rencana_tindak_lanjut' => $request->rencana_tindak_lanjut,
                'dibuat_oleh' => Auth::id(),
            ]);

            // 2. Loop untuk setiap template yang dipilih
            foreach ($selectedTemplateKeys as $templateKey) {
                $templatePath = storage_path("app/templates/{$templateKey}.docx");
                if (!file_exists($templatePath)) {
                    throw new \Exception("Template {$templateKey}.docx tidak ditemukan.");
                }

                $templateProcessor = new TemplateProcessor($templatePath);
                $templateProcessor->setValues($templateData); // Gunakan data yang sama

                $fileName = "laporan_{$templateKey}_" . $siswa->nis . '_' . time() . '_' . uniqid() . '.docx';
                $path = "laporan_word/{$fileName}";
                if (!Storage::disk('public')->exists('laporan_word')) {
                    Storage::disk('public')->makeDirectory('laporan_word');
                }
                $templateProcessor->saveAs(storage_path("app/public/{$path}"));

                // 3. Simpan info dokumen ke tabel baru
                LaporanDokumen::create([
                    'laporan_bimbingan_id' => $laporanBimbingan->id,
                    'jenis_surat' => $templateKey,
                    'file_path' => $path,
                ]);
            }

            // 4. Update status jadwal
            $jadwal->update(['status' => 'selesai']);

            DB::commit(); // Konfirmasi semua perubahan jika berhasil

            return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Laporan berhasil dibuat dan ' . count($selectedTemplateKeys) . ' file surat telah digenerate.');
        } catch (\Exception $e) {
            DB::rollBack(); // Batalkan semua perubahan jika ada error
            // Hapus file yang mungkin sudah terbuat (opsional, tergantung kebutuhan)
            return back()->with('error', 'Terjadi kesalahan saat membuat laporan: ' . $e->getMessage())->withInput();
        }
    }

   

    public function show(LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }
        $laporanBimbingan->load('jadwalBimbingan.siswa', 'pembuat', 'dokumen');
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

    public function laporanSiswa($id)
    {
        $siswa = Siswa::with(['pelanggaran.jenisPelanggaran', 'laporanBimbingan'])->findOrFail($id);
        return view('guru.laporan.individu', compact('siswa'));
    }

    public function laporanSiswaPdf($id)
    {
        $siswa = Siswa::with(['pelanggaran.jenisPelanggaran', 'laporanBimbingan'])->findOrFail($id);

        $pdf = Pdf::loadView('pdf.laporan_individu', compact('siswa'))
            ->setPaper('a4', 'portrait');

        $filename = 'laporan_kasus_individu_' . str_replace(' ', '_', strtolower($siswa->nama)) . '_' . now()->format('Ymd_His') . '.pdf';
        return $pdf->download($filename);
    }

    public function laporanKolektif(Request $request)
{
    $jenisKasus = $request->input('jenis_kasus');
    $kelas = $request->input('kelas');
    $periodeAwal = $request->input('periode_awal');
    $periodeAkhir = $request->input('periode_akhir');

    // Ambil semua jenis pelanggaran (untuk dropdown)
    $daftarJenis = JenisPelanggaran::orderBy('nama_pelanggaran')->get();

    // Query dasar
    $query = PelanggaranSiswa::with(['jenisPelanggaran', 'siswa'])
        ->when($jenisKasus, fn($q) => $q->whereHas('jenisPelanggaran', fn($j) => $j->where('nama_pelanggaran', $jenisKasus)))
        ->when($kelas, fn($q) => $q->whereHas('siswa', fn($s) => $s->where('kelas', $kelas)))
        ->when($periodeAwal && $periodeAkhir, fn($q) => 
            $q->whereBetween('tanggal_pelanggaran', [$periodeAwal, $periodeAkhir])
        );

    $data = $query->get()
        ->groupBy(fn($item) => $item->jenisPelanggaran->nama_pelanggaran);

    return view('guru.laporan.kolektif', compact('data', 'daftarJenis', 'jenisKasus', 'kelas', 'periodeAwal', 'periodeAkhir'));
}

public function laporanKolektifPdf(Request $request)
{
    $jenisKasus = $request->input('jenis_kasus');
    $kelas = $request->input('kelas');
    $periodeAwal = $request->input('periode_awal');
    $periodeAkhir = $request->input('periode_akhir');

    $query = PelanggaranSiswa::with(['jenisPelanggaran', 'siswa'])
        ->when($jenisKasus, fn($q) => $q->whereHas('jenisPelanggaran', fn($j) => $j->where('nama_pelanggaran', $jenisKasus)))
        ->when($kelas, fn($q) => $q->whereHas('siswa', fn($s) => $s->where('kelas', $kelas)))
        ->when($periodeAwal && $periodeAkhir, fn($q) => 
            $q->whereBetween('tanggal_pelanggaran', [$periodeAwal, $periodeAkhir])
        );

    $data = $query->get()
        ->groupBy(fn($item) => $item->jenisPelanggaran->nama_pelanggaran);

    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.laporan_kolektif', compact('data', 'jenisKasus', 'kelas', 'periodeAwal', 'periodeAkhir'))
            ->setPaper('a4', 'landscape');

    return $pdf->download('laporan_kolektif_' . now()->format('Ymd_His') . '.pdf');
}
}
