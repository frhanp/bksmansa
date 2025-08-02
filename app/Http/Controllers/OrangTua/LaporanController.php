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
        // Keamanan: Pastikan orang tua hanya bisa melihat laporan anaknya.
        $siswaId = Auth::user()->waliMurid->siswa_id;
        if ($laporanBimbingan->jadwalBimbingan->siswa_id !== $siswaId) {
            abort(403);
        }

        return view('ortu.laporan.show', compact('laporanBimbingan'));
    }
}
