<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\WaliMurid;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Guru;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil data untuk filter dropdown
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');
        $waliKelasFilter = Guru::whereIn('id', function ($query) {
            $query->select('wali_kelas_id')->from('siswa');
        })->orderBy('nama')->get();

        // Memulai query dasar
        $query = Siswa::with('waliKelas');

        // Filter berdasarkan pencarian nama/NIS
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('nis', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan kelas
        if ($request->filled('filter_kelas')) {
            $query->where('kelas', $request->input('filter_kelas'));
        }

        // Filter berdasarkan wali kelas
        if ($request->filled('filter_wali_kelas')) {
            $query->where('wali_kelas_id', $request->input('filter_wali_kelas'));
        }

        // Paginate hasil query
        $siswa = $query->latest()->paginate(10)->withQueryString();

        return view('guru.siswa.index', [
            'siswa' => $siswa,
            'kelasFilter' => $kelasFilter,
            'waliKelasFilter' => $waliKelasFilter,
            'request' => $request // Mengirim semua input request ke view
        ]);
    }


   

    public function show(Siswa $siswa)
    {
        $siswa->load(['pelanggaran.jenisPelanggaran', 'jadwalBimbingan.konselor', 'waliMurid.user']);
        return view('guru.siswa.show', compact('siswa'));
    }
}
