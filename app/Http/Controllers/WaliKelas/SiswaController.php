<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\WaliMurid;
use App\Models\User;

class SiswaController extends Controller
{
    public function index()
    {
        // Hanya menampilkan siswa yang dibina oleh wali kelas ini
        $siswa = Siswa::where('wali_kelas_id', Auth::user()->guru_id)
            ->latest()
            ->paginate(10);

        return view('walikelas.siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('walikelas.siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:50|unique:siswa,nis',
            'kelas' => 'required|string|max:50',
            'nama_wali' => 'required|string|max:255',
            'email_wali' => 'required|email|max:255|unique:users,email',
            'nomor_telepon_wali' => 'nullable|string|max:20',
        ]);

        DB::transaction(function () use ($request) {
            $siswa = Siswa::create([
                'nama' => $request->nama,
                'nis' => $request->nis,
                'kelas' => $request->kelas,
                'wali_kelas_id' => Auth::user()->guru_id, // Auto-set ke wali kelas yang login
            ]);

            $wali = WaliMurid::create([
                'siswa_id' => $siswa->id,
                'nama' => $request->nama_wali,
                'nomor_telepon' => $request->nomor_telepon_wali,
            ]);

            User::create([
                'name' => $wali->nama,
                'email' => $request->email_wali,
                'password' => Hash::make('password'), // Default password
                'role' => 'orang_tua',
                'wali_id' => $wali->id,
            ]);
        });

        return redirect()->route('walikelas.siswa.index')->with('success', 'Data siswa dan akun orang tua berhasil ditambahkan.');
    }

    public function show(Siswa $siswa)
    {
        if ($siswa->wali_kelas_id !== Auth::user()->guru_id) abort(403);
        
        $siswa->load(['pelanggaran.jenisPelanggaran', 'jadwalBimbingan.konselor', 'waliMurid.user']);
        return view('walikelas.siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        if ($siswa->wali_kelas_id !== Auth::user()->guru_id) abort(403);

        $siswa->load('waliMurid.user');
        return view('walikelas.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        if ($siswa->wali_kelas_id !== Auth::user()->guru_id) abort(403);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:50|unique:siswa,nis,' . $siswa->id,
            'kelas' => 'required|string|max:50',
            'nama_wali' => 'required|string|max:255',
            'email_wali' => 'required|email|max:255|unique:users,email,' . $siswa->waliMurid->user->id,
            'nomor_telepon_wali' => 'nullable|string|max:20',
        ]);

        DB::transaction(function () use ($request, $siswa) {
            $siswa->update([
                'nama' => $request->nama,
                'nis' => $request->nis,
                'kelas' => $request->kelas,
            ]);

            $siswa->waliMurid->update([
                'nama' => $request->nama_wali,
                'nomor_telepon' => $request->nomor_telepon_wali,
            ]);

            $siswa->waliMurid->user->update([
                'name' => $request->nama_wali,
                'email' => $request->email_wali,
            ]);
        });

        return redirect()->route('walikelas.siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        if ($siswa->wali_kelas_id !== Auth::user()->guru_id) abort(403);
        
        $siswa->delete();
        return redirect()->route('walikelas.siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
