<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\PelanggaranSiswa;
use App\Models\LaporanBimbingan;
use App\Models\JadwalBimbingan;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_siswa' => Siswa::count(),
            'total_pelanggaran' => PelanggaranSiswa::count(),
            'total_laporan' => LaporanBimbingan::count(),
            'jadwal_aktif' => JadwalBimbingan::whereIn('status', ['menunggu_verifikasi', 'terverifikasi'])->count(),
        ];

        return view('kepsek.dashboard', compact('stats'));
    }
}
