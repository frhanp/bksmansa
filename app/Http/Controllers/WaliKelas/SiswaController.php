<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Menampilkan halaman detail siswa untuk Wali Kelas.
     */
    public function show(Siswa $siswa)
    {
        // Keamanan: Pastikan wali kelas hanya bisa melihat siswa di kelasnya.
        if ($siswa->wali_kelas_id !== Auth::user()->guru_id) {
            abort(403, 'Anda tidak memiliki hak akses untuk melihat data siswa ini.');
        }

        // Muat semua relasi yang dibutuhkan untuk ditampilkan di view
        $siswa->load(['pelanggaran.jenisPelanggaran', 'jadwalBimbingan.konselor']);

        return view('walikelas.siswa.show', compact('siswa'));
    }
}
