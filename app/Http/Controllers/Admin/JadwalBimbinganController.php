<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\User;

class JadwalBimbinganController extends Controller
{
    public function index(Request $request)
    {
        // Data untuk dropdown filter
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');
        $konselorFilter = User::where('role', 'guru_bk')->orderBy('name')->get();

        // Memulai query dasar
        $query = JadwalBimbingan::with('siswa', 'konselor.guru');

        // Filter berdasarkan pencarian nama siswa
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->whereHas('siswa', function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan kelas
        if ($request->filled('filter_kelas')) {
            $query->whereHas('siswa', function ($q) use ($request) {
                $q->where('kelas', $request->input('filter_kelas'));
            });
        }

        // Filter berdasarkan konselor (Guru BK)
        if ($request->filled('filter_konselor')) {
            $query->where('konselor_id', $request->input('filter_konselor'));
        }

        // Filter berdasarkan status
        if ($request->filled('filter_status')) {
            $query->where('status', $request->input('filter_status'));
        }

        // Filter berdasarkan rentang tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('tanggal_jadwal', [$startDate, $endDate . ' 23:59:59']);
        }

        // Paginate hasil query
        $jadwal = $query->latest()->paginate(10)->withQueryString();

        return view('admin.jadwal.index', compact('jadwal', 'kelasFilter', 'konselorFilter', 'request'));
    }

    public function update(Request $request, JadwalBimbingan $jadwalBimbingan)
    {
        $request->validate([
            'status' => 'required|in:terverifikasi,dibatalkan'
        ]);

        $jadwalBimbingan->update([
            'status' => $request->status,
            'diverifikasi_oleh' => Auth::id(),
        ]);

        $pesan = $request->status == 'terverifikasi' ? 'Jadwal berhasil diverifikasi.' : 'Jadwal telah dibatalkan.';

        return back()->with('success', $pesan);
    }
}
