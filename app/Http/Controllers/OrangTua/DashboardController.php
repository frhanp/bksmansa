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
        
        // Periksa apakah akun ini sudah terhubung dengan data Wali Murid dan Siswa
        if (!$user->wali || !$user->wali->siswa) {
            // Jika tidak terhubung, kirim data null ke view agar tidak error
            return view('ortu.dashboard', [
                'siswa' => null,
                'waliKelasUser' => null,
            ]);
        }

        // Jika terhubung, lanjutkan mengambil semua data yang dibutuhkan
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
