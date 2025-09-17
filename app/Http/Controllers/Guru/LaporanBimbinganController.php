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
    // Daftar template yang tersedia
    private $templateSurat = [
        'surat_panggilan_ortu' => 'Surat Panggilan Orang Tua',
        'surat_peringatan_1' => 'Surat Peringatan Pertama (SP 1)',
        'laporan_standar' => 'Laporan Bimbingan Standar',
    ];

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
            'templateSurat' => $this->templateSurat,
        ]);
    }

    /**
     * PERBAIKAN: Mengambil data jadwal secara manual pada method store.
     */
    public function store(Request $request, $jadwalId) // Menerima ID mentah
    {

        // 1. Cari data jadwal secara manual
        $jadwal = JadwalBimbingan::find($jadwalId);
        if (!$jadwal) {
            abort(404, 'Jadwal bimbingan tidak ditemukan.');
        }

        // 2. Lakukan pengecekan keamanan
        if ($jadwal->konselor_id !== Auth::id()) {
            abort(403, 'Anda tidak berhak menyimpan laporan untuk jadwal ini.');
        }

        $request->validate([
            'jenis_surat' => 'required|in:' . implode(',', array_keys($this->templateSurat)),
            'isi_laporan' => 'nullable|string',
            'rencana_tindak_lanjut' => 'nullable|string',
        ]);

        $templateName = $request->jenis_surat;
        $templatePath = storage_path("app/templates/{$templateName}.docx");

        if (!file_exists($templatePath)) {
            return back()->with('error', 'Template surat tidak ditemukan.');
        }

        $templateProcessor = new TemplateProcessor($templatePath);
        $siswa = $jadwal->siswa->load(['waliMurid', 'waliKelas']);

        $data = [
            'nama_siswa' => $siswa->nama,
            'nis' => $siswa->nis,
            'kelas' => $siswa->kelas,
            'nama_ortu' => $siswa->waliMurid->nama ?? 'N/A',
            'nama_walas' => $siswa->waliKelas->nama ?? 'N/A',
            'nama_konselor' => Auth::user()->name,
            'nip_konselor' => Auth::user()->guru->nip ?? 'N/A',
            'tanggal_surat' => Carbon::now()->isoFormat('D MMMM YYYY'),
            'isi_laporan' => $request->isi_laporan ?? 'Tidak ada catatan tambahan.',
            'tindak_lanjut' => $request->rencana_tindak_lanjut ?? 'Tidak ada rencana tindak lanjut spesifik.',
            'dibuat_oleh' => Auth::id(),

        ];

        $templateProcessor->setValues($data);

        $fileName = "laporan_{$templateName}_" . $siswa->nis . '_' . time() . '.docx';
        $path = "laporan_word/{$fileName}";

        if (!Storage::disk('public')->exists('laporan_word')) {
            Storage::disk('public')->makeDirectory('laporan_word');
        }
        $templateProcessor->saveAs(storage_path("app/public/{$path}"));

        // Siapkan semua data dalam sebuah array
        $dataToSave = [
            'jadwal_id' => $jadwal->id,
            'jenis_surat' => $request->jenis_surat,
            'isi_laporan' => $request->isi_laporan,
            'rencana_tindak_lanjut' => $request->rencana_tindak_lanjut,
            'file_pendukung' => $path,
            'dibuat_oleh' => Auth::id(),
        ];

     
        $jadwal->update(['status' => 'selesai']);
        
        // Simpan data ke database
        LaporanBimbingan::create($dataToSave);

        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Laporan berhasil dibuat dan file surat telah digenerate.');
    }

    public function show(LaporanBimbingan $laporanBimbingan)
    {
        
        // Pastikan guru hanya bisa melihat laporannya sendiri
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }

        // PERBAIKAN: Gunakan nama relasi 'jadwal.siswa' yang benar.
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
