<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\PelanggaranSiswa;
use App\Models\Siswa;
use App\Models\JenisPelanggaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PelanggaranSiswaController extends Controller
{
    public function index()
    {
        $pelanggaranSiswa = PelanggaranSiswa::with('siswa', 'jenisPelanggaran', 'pelapor')->latest('tanggal_pelanggaran')->paginate(10);
        return view('guru.pelanggaran.index', compact('pelanggaranSiswa'));
    }

    public function create()
    {
        $siswa = Siswa::orderBy('nama')->get();
        $jenisPelanggaran = JenisPelanggaran::orderBy('nama_pelanggaran')->get();
        return view('guru.pelanggaran.create', compact('siswa', 'jenisPelanggaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_pelanggaran_id' => 'required|exists:jenis_pelanggaran,id',
            'catatan' => 'nullable|string',
        ]);

        PelanggaranSiswa::create([
            'siswa_id' => $request->siswa_id,
            'jenis_pelanggaran_id' => $request->jenis_pelanggaran_id,
            'catatan' => $request->catatan,
            'dilaporkan_oleh' => Auth::id(),
            'tanggal_pelanggaran' => now(),
        ]);

        return redirect()->route('guru.pelanggaran-siswa.index')->with('success', 'Pelanggaran siswa berhasil dicatat.');
    }

    public function show(PelanggaranSiswa $pelanggaranSiswa)
    {
        // Untuk detail jika diperlukan
        return view('guru.pelanggaran.show', compact('pelanggaranSiswa'));
    }


    public function edit(PelanggaranSiswa $pelanggaranSiswa)
    {
        $siswa = Siswa::orderBy('nama')->get();
        $jenisPelanggaran = JenisPelanggaran::orderBy('nama_pelanggaran')->get();
        return view('guru.pelanggaran.edit', compact('pelanggaranSiswa', 'siswa', 'jenisPelanggaran'));
    }

    public function update(Request $request, PelanggaranSiswa $pelanggaranSiswa)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_pelanggaran_id' => 'required|exists:jenis_pelanggaran,id',
            'catatan' => 'nullable|string',
        ]);
        
        $pelanggaranSiswa->update($request->all());

        return redirect()->route('guru.pelanggaran-siswa.index')->with('success', 'Data pelanggaran berhasil diperbarui.');
    }

    public function destroy(PelanggaranSiswa $pelanggaranSiswa)
    {
        $pelanggaranSiswa->delete();
        return redirect()->route('guru.pelanggaran-siswa.index')->with('success', 'Data pelanggaran berhasil dihapus.');
    }
}
