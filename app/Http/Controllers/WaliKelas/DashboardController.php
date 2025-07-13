<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil ID guru dari user yang sedang login
        $waliKelasId = Auth::user()->guru_id;

        // Mengambil semua siswa yang perwaliannya dipegang oleh guru yang login
        // Diurutkan berdasarkan nama siswa
        $siswaDiampu = Siswa::where('wali_kelas_id', $waliKelasId)
                            ->orderBy('nama', 'asc')
                            ->get();

        return view('walikelas.dashboard', compact('siswaDiampu'));
    }
}
