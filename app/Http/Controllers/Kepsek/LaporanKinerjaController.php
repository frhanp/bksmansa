<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JadwalBimbingan;
use App\Models\LaporanBimbingan;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanKinerjaController extends Controller
{
    public function index(Request $request)
    {
        $periodeAwal = $request->input('periode_awal');
        $periodeAkhir = $request->input('periode_akhir');

        $guruBk = User::where('role', 'guru_bk')->get()->map(function ($guru) use ($periodeAwal, $periodeAkhir) {
            $jadwalQuery = JadwalBimbingan::where('konselor_id', $guru->id);
            $laporanQuery = LaporanBimbingan::whereHas('jadwal', fn($q) => $q->where('konselor_id', $guru->id));

            if ($periodeAwal && $periodeAkhir) {
                $jadwalQuery->whereBetween('tanggal_jadwal', [$periodeAwal, $periodeAkhir]);
                $laporanQuery->whereBetween('created_at', [$periodeAwal, $periodeAkhir]);
            }

            return [
                'nama' => $guru->name,
                'total_jadwal' => $jadwalQuery->count(),
                'total_laporan' => $laporanQuery->count(),
                'jenis_kasus' => \App\Models\PelanggaranSiswa::whereHas('siswa', function ($q) use ($guru) {
                    $q->whereHas('jadwalBimbingan', function ($qq) use ($guru) {
                        $qq->where('konselor_id', $guru->id);
                    });
                })
                    ->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                    ->distinct('jenis_pelanggaran.id')
                    ->count('jenis_pelanggaran.id'),

            ];
        });

        return view('kepsek.laporan.kinerja', compact('guruBk', 'periodeAwal', 'periodeAkhir'));
    }

    public function downloadPdf(Request $request)
    {
        $periodeAwal = $request->input('periode_awal');
        $periodeAkhir = $request->input('periode_akhir');

        $guruBk = User::where('role', 'guru_bk')->get()->map(function ($guru) use ($periodeAwal, $periodeAkhir) {
            $jadwalQuery = JadwalBimbingan::where('konselor_id', $guru->id);
            $laporanQuery = LaporanBimbingan::whereHas('jadwal', fn($q) => $q->where('konselor_id', $guru->id));

            if ($periodeAwal && $periodeAkhir) {
                $jadwalQuery->whereBetween('tanggal_jadwal', [$periodeAwal, $periodeAkhir]);
                $laporanQuery->whereBetween('created_at', [$periodeAwal, $periodeAkhir]);
            }

            return [
                'nama' => $guru->name,
                'total_jadwal' => $jadwalQuery->count(),
                'total_laporan' => $laporanQuery->count(),
                'jenis_kasus' => \App\Models\PelanggaranSiswa::whereHas('siswa', function ($q) use ($guru) {
                    $q->whereHas('jadwalBimbingan', function ($qq) use ($guru) {
                        $qq->where('konselor_id', $guru->id);
                    });
                })
                    ->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                    ->distinct('jenis_pelanggaran.id')
                    ->count('jenis_pelanggaran.id'),

            ];
        });

        $pdf = Pdf::loadView('pdf.laporan_kinerja', compact('guruBk', 'periodeAwal', 'periodeAkhir'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('laporan_kinerja_guru_bk_' . now()->format('Ymd_His') . '.pdf');
    }
}
