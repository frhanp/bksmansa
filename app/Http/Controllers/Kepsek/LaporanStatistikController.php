<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PelanggaranSiswa;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\LaporanBimbingan;


class LaporanStatistikController extends Controller
{
    public function index(Request $request)
    {
        $tahun = $request->input('tahun', now()->year);

        // Kasus per bulan
        // Kasus per bulan (pakai tanggal_pelanggaran)
        $kasusBulanan = PelanggaranSiswa::selectRaw('MONTH(tanggal_pelanggaran) as bulan, COUNT(*) as total')
            ->whereYear('tanggal_pelanggaran', $tahun)
            ->groupBy('bulan')
            ->pluck('total', 'bulan');


        // Jenis pelanggaran paling sering
        $jenisKasus = PelanggaranSiswa::join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
            ->select('jenis_pelanggaran.nama_pelanggaran', DB::raw('COUNT(*) as total'))
            ->groupBy('jenis_pelanggaran.id', 'jenis_pelanggaran.nama_pelanggaran')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        // Efektivitas penanganan
        $totalKasus = PelanggaranSiswa::count();
        $totalTertangani = LaporanBimbingan::count();
        $efektivitas = $totalKasus > 0 ? round(($totalTertangani / $totalKasus) * 100, 1) : 0;

        return view('kepsek.laporan.statistik', compact('kasusBulanan', 'jenisKasus', 'efektivitas', 'tahun'));
    }

    public function downloadPdf(Request $request)
    {
        $tahun = $request->input('tahun', now()->year);

        $jenisKasus = PelanggaranSiswa::join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
            ->select('jenis_pelanggaran.nama_pelanggaran', DB::raw('COUNT(*) as total'))
            ->groupBy('jenis_pelanggaran.id', 'jenis_pelanggaran.nama_pelanggaran')
            ->orderByDesc('total')
            ->get();

        $totalKasus = PelanggaranSiswa::count();
        $totalTertangani = LaporanBimbingan::count();
        $efektivitas = $totalKasus > 0 ? round(($totalTertangani / $totalKasus) * 100, 1) : 0;

        $pdf = Pdf::loadView('pdf.laporan_statistik', compact('jenisKasus', 'efektivitas', 'tahun'))
            ->setPaper('a4', 'portrait');

        return $pdf->download('laporan_statistik_' . $tahun . '_' . now()->format('Ymd_His') . '.pdf');
    }
}
