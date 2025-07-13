<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JenisPelanggaranController extends Controller
{
    /**
     * Menampilkan daftar jenis pelanggaran.
     */
    public function index()
    {
        $pelanggaran = JenisPelanggaran::latest()->paginate(10);
        return view('admin.jenis-pelanggaran.index', compact('pelanggaran'));
    }

    /**
     * Menampilkan form untuk membuat jenis pelanggaran baru.
     */
    public function create()
    {
        return view('admin.jenis-pelanggaran.create');
    }

    /**
     * Menyimpan jenis pelanggaran baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggaran' => 'required|string|max:255',
            'poin' => 'required|integer|min:1',
        ]);

        JenisPelanggaran::create([
            'nama_pelanggaran' => $request->nama_pelanggaran,
            'poin' => $request->poin,
            'dibuat_oleh' => Auth::id(),
        ]);

        return redirect()->route('admin.jenis-pelanggaran.index')
                         ->with('success', 'Jenis pelanggaran berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit jenis pelanggaran.
     */
    public function edit(JenisPelanggaran $jenisPelanggaran)
    {
        return view('admin.jenis-pelanggaran.edit', compact('jenisPelanggaran'));
    }

    /**
     * Memperbarui jenis pelanggaran di database.
     */
    public function update(Request $request, JenisPelanggaran $jenisPelanggaran)
    {
        $request->validate([
            'nama_pelanggaran' => 'required|string|max:255',
            'poin' => 'required|integer|min:1',
        ]);

        $jenisPelanggaran->update($request->all());

        return redirect()->route('admin.jenis-pelanggaran.index')
                         ->with('success', 'Jenis pelanggaran berhasil diperbarui.');
    }

    /**
     * Menghapus jenis pelanggaran dari database.
     */
    public function destroy(JenisPelanggaran $jenisPelanggaran)
    {
        $jenisPelanggaran->delete();

        return redirect()->route('admin.jenis-pelanggaran.index')
                         ->with('success', 'Jenis pelanggaran berhasil dihapus.');
    }
}
