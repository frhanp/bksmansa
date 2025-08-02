<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBimbingan;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function show(LaporanBimbingan $laporanBimbingan)
    {
        // Keamanan: Pastikan wali kelas hanya bisa melihat laporan siswa di kelasnya.
        $siswa = $laporanBimbingan->jadwalBimbingan->siswa;
        if ($siswa->wali_kelas_id !== Auth::user()->guru_id) {
            abort(403, 'Anda tidak memiliki hak akses untuk melihat laporan ini.');
        }

        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh.guru');
        return view('walikelas.laporan.show', compact('laporanBimbingan'));
    }
}
