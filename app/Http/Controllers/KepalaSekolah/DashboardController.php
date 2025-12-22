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
use Illuminate\Support\Facades\Auth;
use App\Models\Disposisi;

class DashboardController extends Controller
{


    public function index(Request $request)
    {
        $user = Auth::user();
        
        // --- 1. Data Statistik Dasar ---
        $stats = [
            'total_siswa' => Siswa::count(),
            'total_pelanggaran' => PelanggaranSiswa::count(),
            'total_laporan' => LaporanBimbingan::count(),
            'jadwal_aktif' => JadwalBimbingan::whereIn('status', ['menunggu_verifikasi', 'terverifikasi'])->count(),
        ];

        // --- 2. Logika WAKASEK (Fokus: Siswa Kritis) ---
        if ($user->role == 'wakasek') {
            $siswaKritis = Siswa::with(['activeDisposisi.pemberi']) // Tambahkan eager loading ini
                ->withCount(['pelanggaran as total_poin' => function ($query) {
                    $query->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                          ->select(DB::raw('sum(jenis_pelanggaran.poin)'));
                }])
                ->having('total_poin', '>=', 50)
                ->orderByDesc('total_poin')
                ->get();
        
            return view('kepsek.dashboard', compact('stats', 'siswaKritis'));
        }

        // --- 3. Logika KEPSEK (Fokus: Statistik & Tren) ---
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
        $chartDataRaw = array_fill(1, 12, 0);
        foreach ($dataPelanggaran as $bulan => $jumlah) {
            $chartDataRaw[$bulan] = $jumlah;
        }

        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'];

        if ($selectedSemester == 1) {
            $labels = array_slice($labels, 0, 6);
            $chartValues = array_slice($chartDataRaw, 0, 6);
        } elseif ($selectedSemester == 2) {
            $labels = array_slice($labels, 6, 6);
            $chartValues = array_slice(array_values($chartDataRaw), 6, 6);
        } else {
            $chartValues = array_values($chartDataRaw);
        }

        $recentReports = LaporanBimbingan::with('jadwalBimbingan.siswa')->latest()->take(5)->get();
        $availableYears = PelanggaranSiswa::select(DB::raw('YEAR(tanggal_pelanggaran) as tahun'))
            ->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        return view('kepsek.dashboard', compact(
            'stats', 
            'labels', 
            'chartValues', // Variabel ini sekarang sudah sesuai dengan @json($chartValues) di view
            'availableYears', 
            'selectedYear', 
            'selectedSemester', 
            'recentReports'
        ));
    }

    public function storeDisposisi(Request $request, Siswa $siswa)
    {
        $request->validate(['pesan' => 'required|string|max:500']);

        Disposisi::create([
            'siswa_id' => $siswa->id,
            'dari_id' => Auth::id(),
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Instruksi disposisi berhasil dikirim ke Guru BK.');
    }
}
