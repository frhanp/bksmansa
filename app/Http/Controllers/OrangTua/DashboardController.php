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
        $waliId = Auth::user()->wali_id;
        $siswa = Siswa::whereHas('waliMurid', fn($q) => $q->where('id', $waliId))
            ->with([
                'pelanggaran.jenisPelanggaran',
                'jadwalBimbingan.laporan' // <-- Tambahkan ini
            ])
            ->firstOrFail();

        return view('ortu.dashboard', compact('siswa'));
    }
}
