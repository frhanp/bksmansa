<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\User;
use App\Models\JenisPelanggaran;
use App\Models\JadwalBimbingan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Metrik utama
        $totalSiswa = Siswa::count();
        $totalGuru = Guru::count();
        $totalJenisPelanggaran = JenisPelanggaran::count();
        $totalPengguna = User::count();
        
        // Data informatif tambahan
        $jadwalPerluVerifikasi = JadwalBimbingan::where('status', 'menunggu_verifikasi')->count();
        $pelanggaranTerbaru = JenisPelanggaran::latest()->take(5)->get();


        return view('admin.dashboard', compact(
            'totalSiswa',
            'totalGuru',
            'totalJenisPelanggaran',
            'totalPengguna',
            'jadwalPerluVerifikasi',
            'pelanggaranTerbaru'
        ));
    }
}
