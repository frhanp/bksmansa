<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\PelanggaranSiswa;
use Illuminate\Http\Request;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $jadwalAkanDatang = JadwalBimbingan::where('konselor_id', Auth::id())
                                ->where('status', 'terverifikasi')
                                ->where('tanggal_jadwal', '>=', now())
                                ->orderBy('tanggal_jadwal', 'asc')
                                ->take(5)
                                ->get();
                                
        $siswaPoinTertinggi = Siswa::select('siswa.*', DB::raw('SUM(jenis_pelanggaran.poin) as total_poin'))
                                    ->join('pelanggaran_siswa', 'siswa.id', '=', 'pelanggaran_siswa.siswa_id')
                                    ->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                                    ->groupBy('siswa.id', 'siswa.nama', 'siswa.nis', 'siswa.kelas', 'siswa.wali_kelas_id', 'siswa.created_at', 'siswa.updated_at')
                                    ->orderBy('total_poin', 'desc')
                                    ->take(5)
                                    ->get();

        return view('guru.dashboard', compact('jadwalAkanDatang', 'siswaPoinTertinggi'));
    }
}
