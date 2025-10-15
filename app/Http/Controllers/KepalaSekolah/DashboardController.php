<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\PelanggaranSiswa;
use App\Models\LaporanBimbingan;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // --- 1. Data Statistik (Card) ---
        $stats = [
            'total_siswa' => Siswa::count(),
            'total_pelanggaran' => PelanggaranSiswa::count(),
            'total_laporan' => LaporanBimbingan::count(),
            'jadwal_aktif' => JadwalBimbingan::whereIn('status', ['menunggu_verifikasi', 'terverifikasi'])->count(),
        ];

        // --- 2. Data untuk Grafik ---
        $selectedYear = $request->input('tahun', Carbon::now()->year);
        $selectedSemester = $request->input('semester');

        $query = PelanggaranSiswa::select(
                DB::raw('MONTH(tanggal_pelanggaran) as bulan'),
                DB::raw('COUNT(*) as jumlah')
            )
            ->whereYear('tanggal_pelanggaran', $selectedYear)
            ->groupBy('bulan');

        if ($selectedSemester == 1) {
            $query->whereMonth('tanggal_pelanggaran', '>=', 1)->whereMonth('tanggal_pelanggaran', '<=', 6);
        } elseif ($selectedSemester == 2) {
            $query->whereMonth('tanggal_pelanggaran', '>=', 7)->whereMonth('tanggal_pelanggaran', '<=', 12);
        }

        $dataPelanggaran = $query->pluck('jumlah', 'bulan')->all();

        $chartData = array_fill(1, 12, 0);
        foreach ($dataPelanggaran as $bulan => $jumlah) {
            $chartData[$bulan] = $jumlah;
        }

        $labels = [
            'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
            'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'
        ];
        
        if ($selectedSemester == 1) {
            $labels = array_slice($labels, 0, 6);
            $chartData = array_slice($chartData, 0, 6);
        } elseif ($selectedSemester == 2) {
            $labels = array_slice($labels, 6, 6);
            $chartData = array_slice(array_values($chartData), 6, 6);
        } else {
             $chartData = array_values($chartData);
        }
        
        // --- 3. Data untuk Widget Baru ---
        $recentReports = LaporanBimbingan::with('jadwalBimbingan.siswa')->latest()->take(5)->get();
        
        $highPointStudents = Siswa::withCount(['pelanggaran as total_poin' => function ($query) {
            $query->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                  ->select(DB::raw('sum(jenis_pelanggaran.poin)'));
        }])->orderByDesc('total_poin')->take(5)->get();


        // --- 4. Data untuk Filter Dropdown ---
        $availableYears = PelanggaranSiswa::select(DB::raw('YEAR(tanggal_pelanggaran) as tahun'))
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        return view('kepsek.dashboard', compact(
            'stats', 
            'labels', 
            'chartData', 
            'availableYears', 
            'selectedYear', 
            'selectedSemester',
            'recentReports',
            'highPointStudents'
        ));
    }
}
