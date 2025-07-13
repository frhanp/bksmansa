<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\WaliMurid;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('waliKelas')->latest()->paginate(10);
        return view('guru.siswa.index', compact('siswa'));
    }

    public function create()
    {
        $waliKelasList = User::where('role', 'wali_kelas')->with('guru')->get();
        return view('guru.siswa.create', compact('waliKelasList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:50|unique:siswa,nis',
            'kelas' => 'required|string|max:50',
            'wali_kelas_id' => 'required|exists:guru,id',
            'nama_wali' => 'required|string|max:255',
            'email_wali' => 'required|email|max:255|unique:users,email',
            'nomor_telepon_wali' => 'nullable|string|max:20',
        ]);

        $siswa = Siswa::create($request->only('nama', 'nis', 'kelas', 'wali_kelas_id'));

        $wali = WaliMurid::create([
            'siswa_id' => $siswa->id,
            'nama' => $request->nama_wali,
            'nomor_telepon' => $request->nomor_telepon_wali,
        ]);

        User::create([
            'name' => $wali->nama,
            'email' => $request->email_wali,
            'password' => Hash::make('password'),
            'role' => 'orang_tua',
            'wali_id' => $wali->id,
        ]);

        return redirect()->route('guru.siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show(Siswa $siswa)
    {
        // Logika ini sama seperti yang kita buat untuk Wali Kelas,
        // namun akan diarahkan ke view yang berbeda dengan aksi yang lebih lengkap.
        $siswa->load(['pelanggaran.jenisPelanggaran', 'jadwalBimbingan.konselor']);
        return view('guru.siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        $waliKelasList = User::where('role', 'wali_kelas')->with('guru')->get();
        $siswa->load('waliMurid.user');
        return view('guru.siswa.edit', compact('siswa', 'waliKelasList'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:50|unique:siswa,nis,' . $siswa->id,
            'kelas' => 'required|string|max:50',
            'wali_kelas_id' => 'required|exists:guru,id',
            'nama_wali' => 'required|string|max:255',
            'email_wali' => 'required|email|max:255|unique:users,email,' . $siswa->waliMurid->user->id,
            'nomor_telepon_wali' => 'nullable|string|max:20',
        ]);

        $siswa->update($request->only('nama', 'nis', 'kelas', 'wali_kelas_id'));
        $siswa->waliMurid->update([
            'nama' => $request->nama_wali,
            'nomor_telepon' => $request->nomor_telepon_wali,
        ]);
        $siswa->waliMurid->user->update([
            'name' => $request->nama_wali,
            'email' => $request->email_wali,
        ]);

        return redirect()->route('guru.siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        // cascade on delete akan menghapus wali_murid, user, pelanggaran, dll.
        $siswa->delete();
        return redirect()->route('guru.siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
