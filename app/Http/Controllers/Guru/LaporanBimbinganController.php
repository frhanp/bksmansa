<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\Auth;
use App\Models\LaporanBimbingan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class LaporanBimbinganController extends Controller
{
    public function create(JadwalBimbingan $jadwalBimbingan)
    {
        // Pastikan guru hanya bisa membuat laporan untuk jadwalnya sendiri
        if ($jadwalBimbingan->konselor_id !== Auth::id()) {
            abort(403);
        }
        // Pastikan laporan belum ada
        if ($jadwalBimbingan->laporan) {
            return redirect()->route('guru.laporan.show', $jadwalBimbingan->laporan->id)->with('info', 'Laporan untuk jadwal ini sudah ada.');
        }

        return view('guru.laporan.create', compact('jadwalBimbingan'));
    }

    public function store(Request $request, JadwalBimbingan $jadwalBimbingan)
    {
        if ($jadwalBimbingan->konselor_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'isi_laporan' => 'required|string',
            'rencana_tindak_lanjut' => 'nullable|string',
        ]);

        LaporanBimbingan::create([
            'jadwal_id' => $jadwalBimbingan->id,
            'isi_laporan' => $request->isi_laporan,
            'rencana_tindak_lanjut' => $request->rencana_tindak_lanjut,
            'dibuat_oleh' => Auth::id(),
        ]);

        // Otomatis ubah status jadwal menjadi 'selesai' setelah laporan dibuat
        $jadwalBimbingan->update(['status' => 'selesai']);

        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Laporan bimbingan berhasil disimpan.');
    }

    public function show(LaporanBimbingan $laporanBimbingan)
    {
        // Pastikan guru hanya bisa melihat laporannya sendiri
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }

        $laporanBimbingan->load('jadwalBimbingan.siswa');
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
