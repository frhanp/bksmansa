<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanKelasController extends Controller
{
    public function index(Request $request)
    {
        $kelas = $request->input('kelas');

        $query = Siswa::with(['pelanggaran.jenisPelanggaran', 'laporanBimbingan']);

        if ($kelas) {
            $query->where('kelas', $kelas);
        }

        $data = $query->get()->map(function ($siswa) {
            $totalPelanggaran = $siswa->pelanggaran->count();
            $totalPoin = $siswa->pelanggaran->sum(fn($p) => $p->jenisPelanggaran->poin ?? 0);
            $totalBimbingan = $siswa->laporanBimbingan->count();

            return [
                'nama' => $siswa->nama,
                'kelas' => $siswa->kelas,
                'pelanggaran' => $totalPelanggaran,
                'poin' => $totalPoin,
                'bimbingan' => $totalBimbingan,
            ];
        });

        return view('walikelas.laporan.kelas', compact('data', 'kelas'));
    }

    public function downloadPdf(Request $request)
    {
        $kelas = $request->input('kelas');

        $query = Siswa::with(['pelanggaran.jenisPelanggaran', 'laporanBimbingan']);
        if ($kelas) $query->where('kelas', $kelas);

        $data = $query->get()->map(function ($siswa) {
            return [
                'nama' => $siswa->nama,
                'kelas' => $siswa->kelas,
                'pelanggaran' => $siswa->pelanggaran->count(),
                'poin' => $siswa->pelanggaran->sum(fn($p) => $p->jenisPelanggaran->poin ?? 0),
                'bimbingan' => $siswa->laporanBimbingan->count(),
            ];
        });

        $pdf = Pdf::loadView('pdf.laporan_kelas', compact('data', 'kelas'))
                ->setPaper('a4', 'landscape');

        return $pdf->download('laporan_kelas_' . ($kelas ?? 'semua') . '_' . now()->format('Ymd_His') . '.pdf');
    }
}
