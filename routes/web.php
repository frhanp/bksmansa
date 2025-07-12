<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Halaman utama (welcome) tetap sama
Route::get('/', function () {
    return view('welcome');
});

// Route /dashboard asli diubah untuk mengarahkan pengguna berdasarkan peran
Route::get('/dashboard', function () {
    // Arahkan pengguna ke dasbor yang sesuai dengan perannya setelah login
    $role = Auth::user()->role;
    switch ($role) {
        case 'admin_bk':
            return redirect()->route('admin.dashboard');
        case 'guru_bk':
            return redirect()->route('guru.dashboard');
        case 'wali_kelas':
            return redirect()->route('walikelas.dashboard');
        case 'kepala_sekolah':
            return redirect()->route('kepsek.dashboard');
        case 'orang_tua':
            return redirect()->route('ortu.dashboard');
        default:
            // Fallback jika peran tidak dikenal (seharusnya tidak terjadi)
            return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');


// Grup route untuk profil pengguna tetap sama
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// =================================================================
// GRUP ROUTE BARU BERDASARKAN PERAN PENGGUNA
// =================================================================

// Semua route di sini hanya bisa diakses oleh Admin BK
Route::middleware(['auth', 'check.role:admin_bk'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function() {
        return "Ini halaman Dasbor Admin BK"; // Ganti dengan view nanti
    })->name('dashboard');
    // Contoh: Route::resource('jenis-pelanggaran', JenisPelanggaranController::class);
});

// Semua route di sini hanya bisa diakses oleh Guru BK
Route::middleware(['auth', 'check.role:guru_bk'])->prefix('guru')->name('guru.')->group(function () {
    Route::get('/dashboard', function() {
        return "Ini halaman Dasbor Guru BK"; // Ganti dengan view nanti
    })->name('dashboard');
    // Contoh: Route::resource('siswa', SiswaController::class);
});

// Semua route di sini hanya bisa diakses oleh Wali Kelas
Route::middleware(['auth', 'check.role:wali_kelas'])->prefix('walikelas')->name('walikelas.')->group(function () {
    Route::get('/dashboard', function() {
        return "Ini halaman Dasbor Wali Kelas"; // Ganti dengan view nanti
    })->name('dashboard');
});

// Semua route di sini hanya bisa diakses oleh Kepala Sekolah
Route::middleware(['auth', 'check.role:kepala_sekolah'])->prefix('kepsek')->name('kepsek.')->group(function () {
    Route::get('/dashboard', function() {
        return "Ini halaman Dasbor Kepala Sekolah"; // Ganti dengan view nanti
    })->name('dashboard');
});

// Semua route di sini hanya bisa diakses oleh Orang Tua
Route::middleware(['auth', 'check.role:orang_tua'])->prefix('ortu')->name('ortu.')->group(function () {
    Route::get('/dashboard', function() {
        return "Ini halaman Dasbor Orang Tua"; // Ganti dengan view nanti
    })->name('dashboard');
});

// Memuat route otentikasi
require __DIR__.'/auth.php';