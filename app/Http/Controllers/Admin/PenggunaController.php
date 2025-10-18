<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WaliMurid;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        // ... (Tidak ada perubahan di sini)
        $query = User::with(['guru', 'wali']);

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        if ($request->filled('filter_role')) {
            $query->where('role', $request->input('filter_role'));
        }

        $pengguna = $query->latest()->paginate(10)->withQueryString();

        return view('admin.pengguna.index', [
            'pengguna' => $pengguna,
            'request' => $request,
        ]);
    }

    public function create()
    {
        // ... (Tidak ada perubahan di sini, asumsikan sudah benar)
        $guru = Guru::orderBy('nama')->get();
        $waliMurid = WaliMurid::orderBy('nama')->get();
        $roles = [
            'admin_bk' => 'Admin BK',
            'guru_bk' => 'Guru BK',
            'wali_kelas' => 'Wali Kelas',
            'kepala_sekolah' => 'Kepala Sekolah',
            'orang_tua' => 'Orang Tua',
        ];

        return view('admin.pengguna.create', compact('guru', 'waliMurid', 'roles'));
    }

    public function store(Request $request)
    {
        // ... (Tidak ada perubahan di sini, asumsikan sudah benar)
        $request->validate([
            'guru_id' => 'required_if:role,admin_bk,guru_bk,wali_kelas,kepala_sekolah|nullable|exists:guru,id|unique:users,guru_id',
            'wali_id' => 'required_if:role,orang_tua|nullable|exists:wali_murid,id|unique:users,wali_id',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => ['required', Rule::in(['admin_bk', 'guru_bk', 'wali_kelas', 'kepala_sekolah', 'orang_tua','wakasek'])],
        ]);

        $name = '';
        if ($request->role === 'orang_tua') {
            $wali = WaliMurid::find($request->wali_id);
            $name = $wali->nama;
        } else {
            $guru = Guru::find($request->guru_id);
            $name = $guru->nama;
        }

        User::create([
            'name' => $name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'guru_id' => $request->role !== 'orang_tua' ? $request->guru_id : null,
            'wali_id' => $request->role === 'orang_tua' ? $request->wali_id : null,
        ]);

        return redirect()->route('admin.pengguna.index')->with('success', 'Akun pengguna berhasil dibuat.');
    }

    /**
     * MODIFIKASI PADA METHOD EDIT
     */
    public function edit(User $pengguna)
    {
        // Siapkan data yang dibutuhkan untuk dropdown di view
        $guru = Guru::orderBy('nama')->get();
        $waliMurid = WaliMurid::orderBy('nama')->get();
        $roles = [
            'admin_bk' => 'Admin BK',
            'guru_bk' => 'Guru BK',
            'wali_kelas' => 'Wali Kelas',
            'kepala_sekolah' => 'Kepala Sekolah',
            'orang_tua' => 'Orang Tua', // Tambahkan 'orang_tua'
        ];

        // Kirim semua data yang diperlukan ke view
        return view('admin.pengguna.edit', compact('pengguna', 'guru', 'waliMurid', 'roles'));
    }

    /**
     * MODIFIKASI PADA METHOD UPDATE
     */
    public function update(Request $request, User $pengguna)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $pengguna->id,
            // Tambahkan 'orang_tua' pada aturan validasi
            'role' => ['required', Rule::in(['admin_bk', 'guru_bk', 'wali_kelas', 'kepala_sekolah', 'orang_tua','wakasek'])],
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $pengguna->name = $request->name;
        $pengguna->email = $request->email;
        $pengguna->role = $request->role;
        if ($request->filled('password')) {
            $pengguna->password = Hash::make($request->password);
        }
        $pengguna->save();

        return redirect()->route('admin.pengguna.index')->with('success', 'Akun pengguna berhasil diperbarui.');
    }

    public function destroy(User $pengguna)
    {
        // ... (Tidak ada perubahan di sini)
        if ($pengguna->id === Auth::id()) {
            return back()->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $pengguna->delete();
        return redirect()->route('admin.pengguna.index')->with('success', 'Akun pengguna berhasil dihapus.');
    }
}
