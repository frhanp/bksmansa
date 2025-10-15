<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\LaporanBimbingan;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Memeriksa relasi sebelum digunakan untuk menghindari error
        if (!$user->wali || !$user->wali->siswa) {
            return view('ortu.dashboard', ['siswa' => null]);
        }

        // Menggunakan relasi 'wali' yang baru
        $siswa = $user->wali->siswa->load(
            'jadwalBimbingan.laporan', 
            'pelanggaran.jenisPelanggaran', 
            'waliKelas.user'
        );
        
        $waliKelasUser = $siswa->waliKelas->user;

        return view('ortu.dashboard', [
            'siswa' => $siswa,
            'waliKelasUser' => $waliKelasUser,
        ]);
    }
}
