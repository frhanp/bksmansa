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
    public function index(Request $request)
    {
        // Mengambil data untuk dropdown filter
        $siswaFilter = Siswa::orderBy('nama')->get();
        $jenisPelanggaranFilter = JenisPelanggaran::orderBy('nama_pelanggaran')->get();
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');

        // Memulai query dasar dengan filter keamanan
        $query = PelanggaranSiswa::with('siswa', 'jenisPelanggaran')
            ->where('dilaporkan_oleh', Auth::id());

        // Filter berdasarkan pencarian nama siswa
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->whereHas('siswa', function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan siswa spesifik
        if ($request->filled('filter_siswa')) {
            $query->where('siswa_id', $request->input('filter_siswa'));
        }

        // Filter berdasarkan kelas
        if ($request->filled('filter_kelas')) {
            $query->whereHas('siswa', function ($q) use ($request) {
                $q->where('kelas', $request->input('filter_kelas'));
            });
        }

        // Filter berdasarkan jenis pelanggaran
        if ($request->filled('filter_jenis_pelanggaran')) {
            $query->where('jenis_pelanggaran_id', $request->input('filter_jenis_pelanggaran'));
        }

        // Filter berdasarkan rentang tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('tanggal_pelanggaran', [$startDate, $endDate . ' 23:59:59']);
        }

        // Paginate hasil query
        $pelanggaranSiswa = $query->latest('tanggal_pelanggaran')->paginate(10)->withQueryString();

        return view('guru.pelanggaran.index', [
            'pelanggaranSiswa' => $pelanggaranSiswa,
            'siswaFilter' => $siswaFilter,
            'jenisPelanggaranFilter' => $jenisPelanggaranFilter,
            'kelasFilter' => $kelasFilter,
            'request' => $request
        ]);
    }

    /**
     * Menampilkan form untuk membuat pelanggaran baru.
     */
    public function create()
    {
        $siswa = Siswa::orderBy('nama')->get();
        $jenisPelanggaran = JenisPelanggaran::orderBy('nama_pelanggaran')->get();
        return view('guru.pelanggaran.create', compact('siswa', 'jenisPelanggaran'));
    }

    /**
     * Menyimpan pelanggaran baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_pelanggaran_id' => 'required|exists:jenis_pelanggaran,id',
            'catatan' => 'nullable|string',
        ]);

        PelanggaranSiswa::create([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_pelanggaran_id' => 'required|exists:jenis_pelanggaran,id',
            'catatan' => 'nullable|string',
            'dilaporkan_oleh' => Auth::id(), // ID Guru yang login otomatis tersimpan
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
        // --- PENGECEKAN KEAMANAN ---
        // Pastikan guru hanya bisa edit data miliknya sendiri.
        if ($pelanggaranSiswa->dilaporkan_oleh !== Auth::id()) {
            abort(403, 'Anda tidak memiliki hak akses untuk mengubah data ini.');
        }

        $siswa = Siswa::orderBy('nama')->get();
        $jenisPelanggaran = JenisPelanggaran::orderBy('nama_pelanggaran')->get();
        return view('guru.pelanggaran.edit', compact('pelanggaranSiswa', 'siswa', 'jenisPelanggaran'));
    }

    /**
     * Memperbarui pelanggaran di database.
     */
    public function update(Request $request, PelanggaranSiswa $pelanggaranSiswa)
    {
        // --- PENGECEKAN KEAMANAN ---
        if ($pelanggaranSiswa->dilaporkan_oleh !== Auth::id()) {
            abort(403, 'Anda tidak memiliki hak akses untuk mengubah data ini.');
        }

        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_pelanggaran_id' => 'required|exists:jenis_pelanggaran,id',
            'catatan' => 'nullable|string',
        ]);

        $pelanggaranSiswa->update($request->all());

        return redirect()->route('guru.pelanggaran-siswa.index')->with('success', 'Data pelanggaran berhasil diperbarui.');
    }

    /**
     * Menghapus pelanggaran dari database.
     */
    public function destroy(PelanggaranSiswa $pelanggaranSiswa)
    {
        // --- PENGECEKAN KEAMANAN ---
        if ($pelanggaranSiswa->dilaporkan_oleh !== Auth::id()) {
            abort(403, 'Anda tidak memiliki hak akses untuk menghapus data ini.');
        }

        $pelanggaranSiswa->delete();
        return redirect()->route('guru.pelanggaran-siswa.index')->with('success', 'Data pelanggaran berhasil dihapus.');
    }
}
