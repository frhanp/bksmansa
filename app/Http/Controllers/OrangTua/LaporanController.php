<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBimbingan;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function show(LaporanBimbingan $laporanBimbingan)
    {
        // --- LOGIKA BARU YANG LEBIH AMAN ---
        // 1. Ambil ID wali murid dari pengguna yang sedang login.
        $waliIdPengguna = Auth::user()->wali_id;

        // 2. Ambil ID wali murid yang terkait dengan laporan ini.
        $waliIdLaporan = $laporanBimbingan->jadwalBimbingan->siswa->waliMurid->id;

        // 3. Pastikan keduanya sama. Jika tidak, akses ditolak.
        if ($waliIdPengguna !== $waliIdLaporan) {
            abort(403);
        }
        // --- AKHIR LOGIKA BARU ---

        // Muat relasi yang dibutuhkan untuk ditampilkan di view
        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh');

        return view('ortu.laporan.show', compact('laporanBimbingan'));
    }
}
