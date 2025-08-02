<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    public function index(Request $request) // <-- Tambahkan Request $request
    {
        // Memulai query dasar
        $query = User::with('guru');

        // Filter berdasarkan pencarian nama atau email
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan peran (role)
        if ($request->filled('filter_role')) {
            $query->where('role', $request->input('filter_role'));
        }

        // Paginate hasil query
        $pengguna = $query->latest()->paginate(10)->withQueryString();

        return view('admin.pengguna.index', [
            'pengguna' => $pengguna,
            'request' => $request,
        ]);
    }   

    public function create()
    {
        $guru = Guru::all();
        return view('admin.pengguna.create', compact('guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:guru,id|unique:users,guru_id',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => ['required', Rule::in(['admin_bk', 'guru_bk', 'wali_kelas', 'kepala_sekolah'])],
        ]);

        $guru = Guru::find($request->guru_id);

        User::create([
            'name' => $guru->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'guru_id' => $request->guru_id,
        ]);

        return redirect()->route('admin.pengguna.index')->with('success', 'Akun pengguna berhasil dibuat.');
    }

    public function edit(User $pengguna)
    {
        // Untuk form edit, kita tidak perlu mengirim data guru lagi
        return view('admin.pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, User $pengguna)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $pengguna->id,
            'role' => ['required', Rule::in(['admin_bk', 'guru_bk', 'wali_kelas', 'kepala_sekolah'])],
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
        // Jangan hapus diri sendiri atau pengguna lain yang penting
        if ($pengguna->id === Auth::id()) {
            return back()->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        // Logika untuk mencegah penghapusan akun penting lainnya bisa ditambahkan di sini

        $pengguna->delete();
        return redirect()->route('admin.pengguna.index')->with('success', 'Akun pengguna berhasil dihapus.');
    }
}
