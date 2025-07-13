<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBimbingan;

class LaporanController extends Controller
{
    public function show(LaporanBimbingan $laporanBimbingan)
    {
        // Kepala sekolah bisa melihat semua laporan, jadi tidak perlu pengecekan hak akses spesifik
        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh.guru');
        return view('kepsek.laporan.show', compact('laporanBimbingan'));
    }
}
