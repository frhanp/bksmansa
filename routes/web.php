<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Import semua controller yang akan kita gunakan
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\JenisPelanggaranController;
use App\Http\Controllers\Guru\DashboardController as GuruDashboardController;
use App\Http\Controllers\Guru\SiswaController;
use App\Http\Controllers\Guru\PelanggaranSiswaController;
use App\Http\Controllers\Guru\JadwalBimbinganController;
use App\Http\Controllers\Guru\LaporanBimbinganController;
use App\Http\Controllers\WaliKelas\DashboardController as WaliKelasDashboardController;
use App\Http\Controllers\WaliKelas\SiswaController as WaliKelasSiswaController;
use App\Http\Controllers\KepalaSekolah\DashboardController as KepalaSekolahDashboardController;
use App\Http\Controllers\OrangTua\DashboardController as OrangTuaDashboardController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\JadwalBimbinganController as AdminJadwalController;
use App\Http\Controllers\KepalaSekolah\LaporanController as KepsekLaporanController;



// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route /dashboard asli diubah untuk mengarahkan pengguna berdasarkan peran
Route::get('/dashboard', function () {
    $role = Auth::user()->role;
    $routeMap = [
        'admin_bk' => 'admin.dashboard',
        'guru_bk' => 'guru.dashboard',
        'wali_kelas' => 'walikelas.dashboard',
        'kepala_sekolah' => 'kepsek.dashboard',
        'orang_tua' => 'ortu.dashboard',
    ];
    return redirect()->route($routeMap[$role] ?? 'login');
})->middleware(['auth', 'verified'])->name('dashboard');


// Grup route untuk profil pengguna tetap sama
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// =================================================================
// GRUP ROUTE BERDASARKAN PERAN PENGGUNA
// =================================================================

// --- ADMIN BK ---
Route::middleware(['auth', 'check.role:admin_bk'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('jenis-pelanggaran', JenisPelanggaranController::class);
    Route::resource('pengguna', PenggunaController::class);
    Route::get('verifikasi-jadwal', [AdminJadwalController::class, 'index'])->name('jadwal.index');
    Route::patch('verifikasi-jadwal/{jadwalBimbingan}', [AdminJadwalController::class, 'update'])->name('jadwal.update');
});

// --- GURU BK ---
Route::middleware(['auth', 'check.role:guru_bk'])->prefix('guru')->name('guru.')->group(function () {
    Route::get('/dashboard', [GuruDashboardController::class, 'index'])->name('dashboard');
    Route::resource('siswa', SiswaController::class);
    Route::resource('pelanggaran-siswa', PelanggaranSiswaController::class);
    Route::resource('jadwal-bimbingan', JadwalBimbinganController::class);
    Route::get('jadwal-bimbingan/{jadwalBimbingan}/laporan/create', [LaporanBimbinganController::class, 'create'])->name('laporan.create');
    Route::post('jadwal-bimbingan/{jadwalBimbingan}/laporan', [LaporanBimbinganController::class, 'store'])->name('laporan.store');
    Route::get('laporan/{laporanBimbingan}', [LaporanBimbinganController::class, 'show'])->name('laporan.show');
    Route::get('laporan/{laporanBimbingan}/edit', [LaporanBimbinganController::class, 'edit'])->name('laporan.edit');
    Route::put('laporan/{laporanBimbingan}', [LaporanBimbinganController::class, 'update'])->name('laporan.update');
    Route::get('laporan/{laporanBimbingan}/download', [LaporanBimbinganController::class, 'downloadPdf'])->name('laporan.download');
});

// --- WALI KELAS ---
Route::middleware(['auth', 'check.role:wali_kelas'])->prefix('walikelas')->name('walikelas.')->group(function () {
    Route::get('/dashboard', [WaliKelasDashboardController::class, 'index'])->name('dashboard');
    Route::get('/siswa/{siswa}', [WaliKelasSiswaController::class, 'show'])->name('siswa.show');
});

// --- KEPALA SEKOLAH ---
Route::middleware(['auth', 'check.role:kepala_sekolah'])->prefix('kepsek')->name('kepsek.')->group(function () {
    Route::get('/dashboard', [KepalaSekolahDashboardController::class, 'index'])->name('dashboard');
    Route::get('/laporan/{laporanBimbingan}', [KepsekLaporanController::class, 'show'])->name('laporan.show');
});

// --- ORANG TUA ---
Route::middleware(['auth', 'check.role:orang_tua'])->prefix('ortu')->name('ortu.')->group(function () {
    Route::get('/dashboard', [OrangTuaDashboardController::class, 'index'])->name('dashboard');
});

// Memuat route otentikasi
require __DIR__.'/auth.php';