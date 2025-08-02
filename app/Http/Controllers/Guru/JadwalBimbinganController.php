<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\JadwalBimbingan;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JadwalBimbinganController extends Controller
{
    public function index(Request $request)
    {
        // Data untuk dropdown filter
        $siswaFilter = Siswa::orderBy('nama')->get();
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');

        // Memulai query dasar dengan filter keamanan
        $query = JadwalBimbingan::with('siswa')
                    ->where('konselor_id', Auth::id());

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
            
        return view('guru.jadwal.index', compact('jadwal', 'siswaFilter', 'kelasFilter', 'request'));
    }

    public function create()
    {
        $siswa = Siswa::orderBy('nama')->get();
        return view('guru.jadwal.create', compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'tanggal_jadwal' => 'required|date',
        ]);

        JadwalBimbingan::create([
            'siswa_id' => $request->siswa_id,
            'konselor_id' => Auth::id(),
            'tanggal_jadwal' => $request->tanggal_jadwal,
            'status' => 'menunggu_verifikasi', // Status default
        ]);

        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Jadwal bimbingan berhasil dibuat dan menunggu verifikasi.');
    }

    public function edit(JadwalBimbingan $jadwalBimbingan)
    {
        if ($jadwalBimbingan->konselor_id !== Auth::id()) {
            abort(403);
        }
        $siswa = Siswa::orderBy('nama')->get();
        return view('guru.jadwal.edit', compact('jadwalBimbingan', 'siswa'));
    }

    public function update(Request $request, JadwalBimbingan $jadwalBimbingan)
    {
        if ($jadwalBimbingan->konselor_id !== Auth::id()) {
            abort(403);
        }
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'tanggal_jadwal' => 'required|date',
            'status' => 'required|in:menunggu_verifikasi,terverifikasi,selesai,dibatalkan',
        ]);
        $jadwalBimbingan->update($request->all());
        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Jadwal bimbingan berhasil diperbarui.');
    }

    public function destroy(JadwalBimbingan $jadwalBimbingan)
    {
        if ($jadwalBimbingan->konselor_id !== Auth::id()) {
            abort(403);
        }
        $jadwalBimbingan->delete();
        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Jadwal bimbingan berhasil dihapus.');
    }
}
