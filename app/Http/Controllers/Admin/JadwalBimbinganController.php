<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\Auth;

class JadwalBimbinganController extends Controller
{
    public function index()
    {
        $jadwal = JadwalBimbingan::with('siswa', 'konselor.guru')
                    ->where('status', 'menunggu_verifikasi')
                    ->latest()
                    ->paginate(10);
        
        return view('admin.jadwal.index', compact('jadwal'));
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

        return redirect()->route('admin.jadwal.index')->with('success', $pesan);
    }
}
