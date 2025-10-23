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
use App\Http\Controllers\WaliKelas\LaporanController as WaliKelasLaporanController;
use App\Http\Controllers\OrangTua\LaporanController as OrtuLaporanController;
use App\Http\Controllers\WaliKelas\LaporanKelasController as WaliKelasLaporanKelasController;




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
        'wakasek' => 'kepsek.dashboard',
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
    Route::resource('guru', App\Http\Controllers\Admin\GuruController::class);
});

// --- GURU BK ---
Route::middleware(['auth', 'check.role:guru_bk'])->prefix('guru')->name('guru.')->group(function () {
    Route::get('/dashboard', [GuruDashboardController::class, 'index'])->name('dashboard');
    Route::resource('siswa', SiswaController::class);
    Route::resource('pelanggaran-siswa', PelanggaranSiswaController::class);
    Route::resource('jadwal-bimbingan', JadwalBimbinganController::class);

    // === Awal Modifikasi: Laporan Custom (taruh sebelum route dinamis) ===
    Route::get('/laporan/kolektif', [LaporanBimbinganController::class, 'laporanKolektif'])
        ->name('laporan.kolektif');
    Route::get('/laporan/kolektif/pdf', [LaporanBimbinganController::class, 'laporanKolektifPdf'])
        ->name('laporan.kolektif.pdf');

    Route::get('/laporan/siswa/{id}', [LaporanBimbinganController::class, 'laporanSiswa'])
        ->name('laporan.siswa');
    Route::get('/laporan/siswa/{id}/pdf', [LaporanBimbinganController::class, 'laporanSiswaPdf'])
        ->name('laporan.siswa.pdf');
    Route::get('/laporan/intervensi', [LaporanBimbinganController::class, 'laporanIntervensi'])
        ->name('laporan.intervensi');

    Route::get('/laporan/intervensi/pdf', [LaporanBimbinganController::class, 'laporanIntervensiPdf'])
        ->name('laporan.intervensi.pdf');
    // === Akhir Modifikasi ===

    // === Route dinamis laporan ===
    Route::get('jadwal-bimbingan/{jadwalBimbingan}/laporan/create', [LaporanBimbinganController::class, 'create'])
        ->name('laporan.create');
    Route::post('jadwal-bimbingan/{jadwalBimbingan}/laporan', [LaporanBimbinganController::class, 'store'])
        ->name('laporan.store');
    Route::get('laporan/{laporanBimbingan}', [LaporanBimbinganController::class, 'show'])
        ->name('laporan.show');
    Route::get('laporan/{laporanBimbingan}/edit', [LaporanBimbinganController::class, 'edit'])
        ->name('laporan.edit');
    Route::put('laporan/{laporanBimbingan}', [LaporanBimbinganController::class, 'update'])
        ->name('laporan.update');
    Route::get('laporan/{laporanBimbingan}/download', [LaporanBimbinganController::class, 'downloadPdf'])
        ->name('laporan.download');

    // === Resource utama ===
    Route::resource('laporan-bimbingan', LaporanBimbinganController::class);
});


// --- WALI KELAS ---
Route::middleware(['auth', 'check.role:wali_kelas'])->prefix('walikelas')->name('walikelas.')->group(function () {
    Route::get('/dashboard', [WaliKelasDashboardController::class, 'index'])->name('dashboard');
    Route::get('/siswa/{siswa}', [WaliKelasSiswaController::class, 'show'])->name('siswa.show');

    // === Awal Modifikasi: pindahkan route statis ke atas ===
    Route::get('/laporan/kelas', [WaliKelasLaporanKelasController::class, 'index'])
        ->name('laporan.kelas');
    Route::get('/laporan/kelas/pdf', [WaliKelasLaporanKelasController::class, 'downloadPdf'])
        ->name('laporan.kelas.pdf');
    // === Akhir Modifikasi ===

    Route::get('/laporan/{laporanBimbingan}', [WaliKelasLaporanController::class, 'show'])->name('laporan.show');
});


// --- KEPALA SEKOLAH ---
Route::middleware(['auth', 'check.role:kepala_sekolah,wakasek'])->prefix('kepsek')->name('kepsek.')->group(function () {
    Route::get('/dashboard', [KepalaSekolahDashboardController::class, 'index'])->name('dashboard');
    Route::get('/laporan', [KepsekLaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/{laporanBimbingan}', [KepsekLaporanController::class, 'show'])->name('laporan.show');
});

// --- ORANG TUA ---
Route::middleware(['auth', 'check.role:orang_tua'])->prefix('ortu')->name('ortu.')->group(function () {
    Route::get('/dashboard', [OrangTuaDashboardController::class, 'index'])->name('dashboard');
    Route::get('/laporan/{laporanBimbingan}', [OrtuLaporanController::class, 'show'])->name('laporan.show');
});

// Memuat route otentikasi
require __DIR__ . '/auth.php';
