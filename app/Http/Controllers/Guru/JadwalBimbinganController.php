<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\JadwalBimbingan;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JadwalBimbinganController extends Controller
{
    public function index()
    {
        $jadwal = JadwalBimbingan::with('siswa')
            ->where('konselor_id', Auth::id())
            ->latest()
            ->paginate(10);
            
        return view('guru.jadwal.index', compact('jadwal'));
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
            'status' => 'required|in:menunggu_verifikasi,dibatalkan',
        ]);

        JadwalBimbingan::create([
            'siswa_id' => $request->siswa_id,
            'konselor_id' => Auth::id(),
            'tanggal_jadwal' => $request->tanggal_jadwal,
            'status' => $request->status,
        ]);

        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Jadwal bimbingan berhasil dibuat.');
    }

    public function edit(JadwalBimbingan $jadwalBimbingan)
    {
        // Pastikan guru hanya bisa edit jadwal miliknya sendiri
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
