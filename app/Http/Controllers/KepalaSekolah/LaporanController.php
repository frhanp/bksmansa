<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBimbingan;
use App\Models\User;
use App\Models\Siswa;

class LaporanController extends Controller
{

    public function index(Request $request)
    {
        // Data untuk dropdown filter
        $konselorFilter = User::whereIn('role', ['guru_bk', 'wali_kelas'])->orderBy('name')->get();
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');

        // Memulai query dasar
        $query = LaporanBimbingan::with(['jadwalBimbingan.siswa', 'pembuat']);

        // Filter berdasarkan pencarian nama siswa
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->whereHas('jadwalBimbingan.siswa', function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%");
            });
        }

        // Filter lainnya
        if ($request->filled('filter_konselor')) {
            $query->where('dibuat_oleh', $request->input('filter_konselor'));
        }
        if ($request->filled('filter_kelas')) {
            $query->whereHas('jadwalBimbingan.siswa', function ($q) use ($request) {
                $q->where('kelas', $request->input('filter_kelas'));
            });
        }
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date . ' 23:59:59']);
        }

        $laporan = $query->latest()->paginate(10)->withQueryString();

        return view('kepsek.laporan.index', compact('laporan', 'konselorFilter', 'kelasFilter', 'request'));
    }

    public function show(LaporanBimbingan $laporanBimbingan)
    {
        // Kepala sekolah bisa melihat semua laporan, jadi tidak perlu pengecekan hak akses spesifik
        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh.guru');
        return view('kepsek.laporan.show', compact('laporanBimbingan'));
    }
}
