<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\PelanggaranSiswa;
use App\Models\LaporanBimbingan;

class DashboardController extends Controller
{
    public function index()
    {
        // Metrik utama
        $totalSiswa = Siswa::count();
        $totalPelanggaran = PelanggaranSiswa::count();
        $totalBimbinganSelesai = LaporanBimbingan::count();
        
        // Data untuk tabel
        $laporanTerbaru = LaporanBimbingan::with('jadwalBimbingan.siswa', 'dibuatOleh')
                            ->latest()
                            ->take(10)
                            ->get();

        return view('kepsek.dashboard', compact(
            'totalSiswa',
            'totalPelanggaran',
            'totalBimbinganSelesai',
            'laporanTerbaru'
        ));
    }
}
