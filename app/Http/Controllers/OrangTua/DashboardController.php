<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil ID wali dari user yang sedang login
        $waliId = Auth::user()->wali_id;

        // Mengambil data siswa yang terhubung dengan wali tersebut
        // Kita juga memuat relasi pelanggaran dan jenis pelanggarannya untuk ditampilkan
        $siswa = Siswa::whereHas('waliMurid', function ($query) use ($waliId) {
                        $query->where('id', $waliId);
                    })
                    ->with(['pelanggaran.jenisPelanggaran'])
                    ->firstOrFail(); // Ambil data siswa atau gagal jika tidak ditemukan

        return view('ortu.dashboard', compact('siswa'));
    }
}
