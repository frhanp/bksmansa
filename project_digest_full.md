# Project Digest (Full Content)
_Generated: 2025-11-07 17:20:08_
**Root:** D:\Laragon\www\bksmansa


## Struktur Proyek (filtered, no depth limit)
```
.git
app
bootstrap
config
database
node_modules
public
resources
routes
storage
tests
vendor
.editorconfig
.env
.env.example
.gitattributes
.gitignore
artisan
composer.json
composer.lock
digest.ps1
package-lock.json
package.json
phpunit.xml
postcss.config.js
project_digest_full.md
README.md
tailwind.config.js
vite.config.js
app\Http
app\Models
app\Providers
app\View
app\Http\Controllers
app\Http\Middleware
app\Http\Requests
app\Http\Controllers\Admin
app\Http\Controllers\Auth
app\Http\Controllers\Guru
app\Http\Controllers\KepalaSekolah
app\Http\Controllers\Kepsek
app\Http\Controllers\OrangTua
app\Http\Controllers\WaliKelas
app\Http\Controllers\Controller.php
app\Http\Controllers\ProfileController.php
app\Http\Controllers\Admin\DashboardController.php
app\Http\Controllers\Admin\GuruController.php
app\Http\Controllers\Admin\JadwalBimbinganController.php
app\Http\Controllers\Admin\JenisPelanggaranController.php
app\Http\Controllers\Admin\PenggunaController.php
app\Http\Controllers\Auth\AuthenticatedSessionController.php
app\Http\Controllers\Auth\ConfirmablePasswordController.php
app\Http\Controllers\Auth\EmailVerificationNotificationController.php
app\Http\Controllers\Auth\EmailVerificationPromptController.php
app\Http\Controllers\Auth\NewPasswordController.php
app\Http\Controllers\Auth\PasswordController.php
app\Http\Controllers\Auth\PasswordResetLinkController.php
app\Http\Controllers\Auth\RegisteredUserController.php
app\Http\Controllers\Auth\VerifyEmailController.php
app\Http\Controllers\Guru\DashboardController.php
app\Http\Controllers\Guru\JadwalBimbinganController.php
app\Http\Controllers\Guru\LaporanBimbinganController.php
app\Http\Controllers\Guru\PelanggaranSiswaController.php
app\Http\Controllers\Guru\SiswaController.php
app\Http\Controllers\KepalaSekolah\DashboardController.php
app\Http\Controllers\KepalaSekolah\LaporanController.php
app\Http\Controllers\Kepsek\LaporanKinerjaController.php
app\Http\Controllers\Kepsek\LaporanStatistikController.php
app\Http\Controllers\OrangTua\DashboardController.php
app\Http\Controllers\OrangTua\LaporanController.php
app\Http\Controllers\WaliKelas\DashboardController.php
app\Http\Controllers\WaliKelas\LaporanController.php
app\Http\Controllers\WaliKelas\LaporanKelasController.php
app\Http\Controllers\WaliKelas\SiswaController.php
app\Http\Middleware\CheckRole.php
app\Http\Requests\Auth
app\Http\Requests\ProfileUpdateRequest.php
app\Http\Requests\Auth\LoginRequest.php
app\Models\Guru.php
app\Models\JadwalBimbingan.php
app\Models\JenisPelanggaran.php
app\Models\LaporanBimbingan.php
app\Models\LaporanDokumen.php
app\Models\PelanggaranSiswa.php
app\Models\Siswa.php
app\Models\User.php
app\Models\WaliMurid.php
app\Providers\AppServiceProvider.php
app\View\Components
app\View\Components\AppLayout.php
app\View\Components\GuestLayout.php
bootstrap\cache
bootstrap\app.php
bootstrap\providers.php
bootstrap\cache\config.php
bootstrap\cache\packages.php
bootstrap\cache\services.php
config\app.php
config\auth.php
config\cache.php
config\database.php
config\filesystems.php
config\logging.php
config\mail.php
config\queue.php
config\services.php
config\session.php
database\factories
database\migrations
database\seeders
database\.gitignore
database\factories\UserFactory.php
database\migrations\0001_01_01_000000_create_users_table.php
database\migrations\0001_01_01_000001_create_cache_table.php
database\migrations\0001_01_01_000002_create_jobs_table.php
database\migrations\2025_07_12_162246_add_bk_columns_to_users_table.php
database\migrations\2025_07_12_162416_create_guru_table.php
database\migrations\2025_07_12_162417_create_siswa_table.php
database\migrations\2025_07_12_162417_create_wali_murid_table.php
database\migrations\2025_07_12_162418_create_jadwal_bimbingan_table.php
database\migrations\2025_07_12_162418_create_jenis_pelanggaran_table.php
database\migrations\2025_07_12_162418_create_pelanggaran_siswa_table.php
database\migrations\2025_07_12_162420_create_laporan_bimbingan_table.php
database\migrations\2025_07_12_163011_add_foreign_keys_to_users_table.php
database\migrations\2025_09_15_032320_add_jenis_surat_to_laporan_bimbingan_table.php
database\migrations\2025_09_17_013145_add_file_pendukung_to_laporan_bimbingan_table.php
database\migrations\2025_09_29_010907_make_isi_laporan_nullable_in_laporan_bimbingan_table.php
database\migrations\2025_10_15_150116_add_phone_number_to_users_table.php
database\migrations\2025_10_18_063600_create_laporan_dokumens_table.php
database\migrations\2025_10_18_063654_modify_laporan_bimbingan_for_multidoc.php
database\migrations\2025_10_18_075935_add_wakasek_role_to_users_table.php
database\seeders\DatabaseSeeder.php
database\seeders\PelanggaranSeeder.php
database\seeders\RolesAndUsersSeeder.php
database\seeders\SiswaSeeder.php
public\build
public\storage
public\.htaccess
public\favicon.ico
public\hot
public\index.php
public\robots.txt
resources\css
resources\js
resources\views
resources\css\app.css
resources\js\app.js
resources\js\bootstrap.js
resources\views\admin
resources\views\auth
resources\views\components
resources\views\guru
resources\views\kepsek
resources\views\layouts
resources\views\ortu
resources\views\pdf
resources\views\profile
resources\views\vendor
resources\views\walikelas
resources\views\dashboard.blade.php
resources\views\welcome.blade.php
resources\views\admin\guru
resources\views\admin\jadwal
resources\views\admin\jenis-pelanggaran
resources\views\admin\pengguna
resources\views\admin\dashboard.blade.php
resources\views\admin\guru\create.blade.php
resources\views\admin\guru\edit.blade.php
resources\views\admin\guru\index.blade.php
resources\views\admin\jadwal\index.blade.php
resources\views\admin\jenis-pelanggaran\create.blade.php
resources\views\admin\jenis-pelanggaran\edit.blade.php
resources\views\admin\jenis-pelanggaran\index.blade.php
resources\views\admin\pengguna\create.blade.php
resources\views\admin\pengguna\edit.blade.php
resources\views\admin\pengguna\index.blade.php
resources\views\auth\confirm-password.blade.php
resources\views\auth\forgot-password.blade.php
resources\views\auth\login.blade.php
resources\views\auth\register.blade.php
resources\views\auth\reset-password.blade.php
resources\views\auth\verify-email.blade.php
resources\views\components\application-logo.blade.php
resources\views\components\auth-session-status.blade.php
resources\views\components\danger-button.blade.php
resources\views\components\dropdown-link.blade.php
resources\views\components\dropdown.blade.php
resources\views\components\input-error.blade.php
resources\views\components\input-label.blade.php
resources\views\components\modal.blade.php
resources\views\components\nav-link.blade.php
resources\views\components\primary-button.blade.php
resources\views\components\responsive-nav-link.blade.php
resources\views\components\secondary-button.blade.php
resources\views\components\text-input.blade.php
resources\views\guru\jadwal
resources\views\guru\laporan
resources\views\guru\pelanggaran
resources\views\guru\siswa
resources\views\guru\dashboard.blade.php
resources\views\guru\jadwal\create.blade.php
resources\views\guru\jadwal\edit.blade.php
resources\views\guru\jadwal\index.blade.php
resources\views\guru\laporan\create.blade.php
resources\views\guru\laporan\edit.blade.php
resources\views\guru\laporan\individu.blade.php
resources\views\guru\laporan\intervensi.blade.php
resources\views\guru\laporan\kolektif.blade.php
resources\views\guru\laporan\pdf.blade.php
resources\views\guru\laporan\show.blade.php
resources\views\guru\pelanggaran\create.blade.php
resources\views\guru\pelanggaran\edit.blade.php
resources\views\guru\pelanggaran\index.blade.php
resources\views\guru\siswa\create.blade.php
resources\views\guru\siswa\edit.blade.php
resources\views\guru\siswa\index.blade.php
resources\views\guru\siswa\show.blade.php
resources\views\kepsek\laporan
resources\views\kepsek\dashboard.blade.php
resources\views\kepsek\laporan\index.blade.php
resources\views\kepsek\laporan\kinerja.blade.php
resources\views\kepsek\laporan\show.blade.php
resources\views\kepsek\laporan\statistik.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\ortu\laporan
resources\views\ortu\dashboard.blade.php
resources\views\ortu\laporan\show.blade.php
resources\views\pdf\laporan_individu.blade.php
resources\views\pdf\laporan_intervensi.blade.php
resources\views\pdf\laporan_kelas.blade.php
resources\views\pdf\laporan_kinerja.blade.php
resources\views\pdf\laporan_kolektif.blade.php
resources\views\pdf\laporan_statistik.blade.php
resources\views\profile\partials
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
resources\views\walikelas\laporan
resources\views\walikelas\siswa
resources\views\walikelas\dashboard.blade.php
resources\views\walikelas\laporan\kelas.blade.php
resources\views\walikelas\laporan\show.blade.php
resources\views\walikelas\siswa\show.blade.php
routes\auth.php
routes\console.php
routes\web.php
storage\app
storage\debugbar
storage\framework
storage\logs
storage\app\private
storage\app\public
storage\app\templates
storage\app\.gitignore
storage\app\private\.gitignore
storage\app\public\laporan_word
storage\app\public\.gitignore
storage\app\public\laporan_word\laporan_surat_penyerahan_ortu_12349_1758986877.docx
storage\app\public\laporan_word\laporan_surat_penyerahan_ortu_12352_1760770799_68f33aeff0539.docx
storage\app\public\laporan_word\laporan_surat_peringatan_12350_1758545463.docx
storage\app\public\laporan_word\laporan_surat_peringatan_12351_1758987027.docx
storage\app\public\laporan_word\laporan_surat_peringatan_1_12349_1758072946.docx
storage\app\public\laporan_word\laporan_surat_perjanjian_12348_1758983584.docx
storage\app\public\laporan_word\laporan_surat_perjanjian_12352_1760770799_68f33aef13bb6.docx
storage\app\public\laporan_word\laporan_surat_perjanjian_12353_1758981834.docx
storage\app\public\laporan_word\laporan_surat_perjanjian_12354_1758221198.docx
storage\app\public\laporan_word\laporan_surat_perjanjian_12354_1758982401.docx
storage\app\public\laporan_word\laporan_surat_perjanjian_12354_1759108210.docx
storage\app\public\laporan_word\laporan_surat_skorsing_12352_1758988341.docx
storage\app\public\laporan_word\laporan_surat_skorsing_12353_1758988675.docx
storage\app\public\laporan_word\laporan_surat_skorsing_12354_1758989249.docx
storage\app\public\laporan_word\laporan_surat_skorsing_12354_1759107343.docx
storage\app\templates\surat_penyerahan_ortu.docx
storage\app\templates\surat_peringatan.docx
storage\app\templates\surat_perjanjian.docx
storage\app\templates\surat_skorsing.docx
storage\app\templates\surat_undangan_ortu.docx
storage\framework\cache
storage\framework\sessions
storage\framework\testing
storage\framework\views
storage\framework\.gitignore
storage\framework\cache\data
storage\framework\cache\.gitignore
storage\framework\cache\data\.gitignore
storage\framework\sessions\.gitignore
storage\framework\testing\.gitignore
storage\framework\views\.gitignore
storage\framework\views\164c7a6ca366308143fea3bb70e17f1f.php
storage\framework\views\17fb9cf1e87954de28566c40d22f26ee.php
storage\framework\views\1e38150dd297bb96e856e2e5f69119a4.php
storage\framework\views\1ec7ac2fc245a546c040d41324c32910.php
storage\framework\views\248781f88085781ab99d1cd5560cb1f6.php
storage\framework\views\267d1f9157aea2cf861da6af127431be.php
storage\framework\views\2a77bb005e2a1a7ed13ae2efd34b3ec6.php
storage\framework\views\30eb4639911f1ebf4fdf2374ad4fc929.php
storage\framework\views\32ec87d775443924145b7ba0afb6d202.php
storage\framework\views\371979e226c0b6b398c220f62eaa0738.php
storage\framework\views\3a5dfcedacf4e2f094da9c44ab18b46c.php
storage\framework\views\3b0d6b3df6af4d74bc8d6de72d579393.php
storage\framework\views\3bfa537db9ba3f19f65bb34d850867eb.php
storage\framework\views\3e1858c803128c7c96b098d757eb5190.php
storage\framework\views\408fcd5a1aa0fe6d4ffc0c47a4471160.php
storage\framework\views\418503ce4cb93b31023d91963decf3b2.php
storage\framework\views\4453772a1dd2512ca04cd2249d58e79f.php
storage\framework\views\49fb72c40cedac354609ff11f0170938.php
storage\framework\views\4db4e5bbc258c612288d1d76c5417f9f.php
storage\framework\views\4f36e5ac38ac9c2534daf4ffa4b7b8cd.php
storage\framework\views\551336ce2361a8fc8ca4597a22893610.php
storage\framework\views\652e780ceb17b0dd88f592947d5e7601.php
storage\framework\views\6b5ecdc4fbb5638fa135c60dd15a7a9b.php
storage\framework\views\7243cf532cd2e76ef3606b8c9ccbde2a.php
storage\framework\views\763d51d7d26d107cd0732e82ccf74185.php
storage\framework\views\7d99483c6b72cda8cc6a4a204cad7e82.php
storage\framework\views\811df368f84fb570c4315dc504beaf12.php
storage\framework\views\893166689e0ba16f0e1a581c0ee3513e.php
storage\framework\views\9931b3eb46bfdb6e5ed46b04338ce657.php
storage\framework\views\9b8d9e998b1de2e90989cf415ce89cac.php
storage\framework\views\a1f285af821f7188d98d171ac7b66e74.php
storage\framework\views\a677ef29b3b2ac720c7e2b3da6abfb28.php
storage\framework\views\ac342d7db1a31d4df4f37892e0d368df.php
storage\framework\views\ad2bf872c769f985357169ed1a1dbcdd.php
storage\framework\views\afed814d3f6257bf10deda8576e530b5.php
storage\framework\views\b794b8bbf87f27d9dd729c1c4dab2613.php
storage\framework\views\b82e84855e48f0191e6d491b4b3b2492.php
storage\framework\views\bbbd3ef6a9ab27c86f795231e0cb5b73.php
storage\framework\views\c44a894a845ec66f403f15fdcb6323aa.php
storage\framework\views\cce167fb70de6c0fd290f9dcfa5e57ab.php
storage\framework\views\cd73a1c0b1a05cd03e8b25beed2de779.php
storage\framework\views\d8c7f838e3f010ae0e296100809fda2c.php
storage\framework\views\e183a6100543655415ce95f852cb2e45.php
storage\framework\views\e51efba80bd9e3ca2623b406c2670d5f.php
storage\framework\views\ea1f1ee78010b7be1da638324434ca31.php
storage\framework\views\ec218957ad1d32931c59a3c9653830fb.php
storage\framework\views\f53bd76725dad0ba27d4a3e45ca103af.php
storage\framework\views\f5df848f0d3b8b9c6ab09c72dd26b192.php
storage\framework\views\fa5a2ab5488cd21e1301977292b69c2e.php
tests\Feature
tests\Unit
tests\TestCase.php
tests\Feature\Auth
tests\Feature\ExampleTest.php
tests\Feature\ProfileTest.php
tests\Feature\Auth\AuthenticationTest.php
tests\Feature\Auth\EmailVerificationTest.php
tests\Feature\Auth\PasswordConfirmationTest.php
tests\Feature\Auth\PasswordResetTest.php
tests\Feature\Auth\PasswordUpdateTest.php
tests\Feature\Auth\RegistrationTest.php
tests\Unit\ExampleTest.php
```


## Info Git
```
Remote:
origin	https://github.com/frhanp/bksmansa.git (fetch)
origin	https://github.com/frhanp/bksmansa.git (push)

Branch:
main

Last 5 commits:
bf6c9e4 add laporan 6
eaba5e1 add laporan 5
3e42656 add laporan 4
2e566c0 add laporan 2,3
3a7d829 add laporan 1
```


## Dependencies (summary)
```
composer.json (require):
  (parse error / none)
composer.json (require-dev):
  (parse error / none)

package.json (dependencies):
  (parse error / none)
package.json (devDependencies):
  (parse error / none)
```


## Routes Files Content
```
===== routes\auth.php =====
<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

===== routes\console.php =====
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

===== routes\web.php =====
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
use App\Http\Controllers\Kepsek\LaporanKinerjaController;




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

    Route::get('/laporan/statistik', [\App\Http\Controllers\Kepsek\LaporanStatistikController::class, 'index'])
    ->name('laporan.statistik');
Route::get('/laporan/statistik/pdf', [\App\Http\Controllers\Kepsek\LaporanStatistikController::class, 'downloadPdf'])
    ->name('laporan.statistik.pdf');

    Route::get('/laporan/kinerja', [LaporanKinerjaController::class, 'index'])
        ->name('laporan.kinerja');
    Route::get('/laporan/kinerja/pdf', [LaporanKinerjaController::class, 'downloadPdf'])
        ->name('laporan.kinerja.pdf');
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

```


## Routes (from command)
```

  GET|HEAD        / .......................................................................................................... 
  GET|HEAD        _debugbar/assets/javascript .................... debugbar.assets.js ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@js
  GET|HEAD        _debugbar/assets/stylesheets ................. debugbar.assets.css ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@css
  DELETE          _debugbar/cache/{key}/{tags?} ........... debugbar.cache.delete ΓÇ║ Barryvdh\Debugbar ΓÇ║ CacheController@delete
  GET|HEAD        _debugbar/clockwork/{id} .......... debugbar.clockwork ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@clockwork
  GET|HEAD        _debugbar/open ..................... debugbar.openhandler ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@handle
  POST            _debugbar/queries/explain ......... debugbar.queries.explain ΓÇ║ Barryvdh\Debugbar ΓÇ║ QueriesController@explain
  GET|HEAD        admin/dashboard .......................................... admin.dashboard ΓÇ║ Admin\DashboardController@index
  GET|HEAD        admin/guru ................................................... admin.guru.index ΓÇ║ Admin\GuruController@index
  POST            admin/guru ................................................... admin.guru.store ΓÇ║ Admin\GuruController@store
  GET|HEAD        admin/guru/create .......................................... admin.guru.create ΓÇ║ Admin\GuruController@create
  GET|HEAD        admin/guru/{guru} .............................................. admin.guru.show ΓÇ║ Admin\GuruController@show
  PUT|PATCH       admin/guru/{guru} .......................................... admin.guru.update ΓÇ║ Admin\GuruController@update
  DELETE          admin/guru/{guru} ........................................ admin.guru.destroy ΓÇ║ Admin\GuruController@destroy
  GET|HEAD        admin/guru/{guru}/edit ......................................... admin.guru.edit ΓÇ║ Admin\GuruController@edit
  GET|HEAD        admin/jenis-pelanggaran ............. admin.jenis-pelanggaran.index ΓÇ║ Admin\JenisPelanggaranController@index
  POST            admin/jenis-pelanggaran ............. admin.jenis-pelanggaran.store ΓÇ║ Admin\JenisPelanggaranController@store
  GET|HEAD        admin/jenis-pelanggaran/create .... admin.jenis-pelanggaran.create ΓÇ║ Admin\JenisPelanggaranController@create
  GET|HEAD        admin/jenis-pelanggaran/{jenis_pelanggaran} admin.jenis-pelanggaran.show ΓÇ║ Admin\JenisPelanggaranControllerΓÇª
  PUT|PATCH       admin/jenis-pelanggaran/{jenis_pelanggaran} admin.jenis-pelanggaran.update ΓÇ║ Admin\JenisPelanggaranControllΓÇª
  DELETE          admin/jenis-pelanggaran/{jenis_pelanggaran} admin.jenis-pelanggaran.destroy ΓÇ║ Admin\JenisPelanggaranControlΓÇª
  GET|HEAD        admin/jenis-pelanggaran/{jenis_pelanggaran}/edit admin.jenis-pelanggaran.edit ΓÇ║ Admin\JenisPelanggaranContrΓÇª
  GET|HEAD        admin/pengguna ....................................... admin.pengguna.index ΓÇ║ Admin\PenggunaController@index
  POST            admin/pengguna ....................................... admin.pengguna.store ΓÇ║ Admin\PenggunaController@store
  GET|HEAD        admin/pengguna/create .............................. admin.pengguna.create ΓÇ║ Admin\PenggunaController@create
  GET|HEAD        admin/pengguna/{pengguna} .............................. admin.pengguna.show ΓÇ║ Admin\PenggunaController@show
  PUT|PATCH       admin/pengguna/{pengguna} .......................... admin.pengguna.update ΓÇ║ Admin\PenggunaController@update
  DELETE          admin/pengguna/{pengguna} ........................ admin.pengguna.destroy ΓÇ║ Admin\PenggunaController@destroy
  GET|HEAD        admin/pengguna/{pengguna}/edit ......................... admin.pengguna.edit ΓÇ║ Admin\PenggunaController@edit
  GET|HEAD        admin/verifikasi-jadwal ......................... admin.jadwal.index ΓÇ║ Admin\JadwalBimbinganController@index
  PATCH           admin/verifikasi-jadwal/{jadwalBimbingan} ..... admin.jadwal.update ΓÇ║ Admin\JadwalBimbinganController@update
  GET|HEAD        confirm-password ................................ password.confirm ΓÇ║ Auth\ConfirmablePasswordController@show
  POST            confirm-password .................................................. Auth\ConfirmablePasswordController@store
  GET|HEAD        dashboard ........................................................................................ dashboard
  POST            email/verification-notification ..... verification.send ΓÇ║ Auth\EmailVerificationNotificationController@store
  GET|HEAD        forgot-password ................................. password.request ΓÇ║ Auth\PasswordResetLinkController@create
  POST            forgot-password .................................... password.email ΓÇ║ Auth\PasswordResetLinkController@store
  GET|HEAD        guru/dashboard ............................................. guru.dashboard ΓÇ║ Guru\DashboardController@index
  GET|HEAD        guru/jadwal-bimbingan ................... guru.jadwal-bimbingan.index ΓÇ║ Guru\JadwalBimbinganController@index
  POST            guru/jadwal-bimbingan ................... guru.jadwal-bimbingan.store ΓÇ║ Guru\JadwalBimbinganController@store
  GET|HEAD        guru/jadwal-bimbingan/create .......... guru.jadwal-bimbingan.create ΓÇ║ Guru\JadwalBimbinganController@create
  POST            guru/jadwal-bimbingan/{jadwalBimbingan}/laporan . guru.laporan.store ΓÇ║ Guru\LaporanBimbinganController@store
  GET|HEAD        guru/jadwal-bimbingan/{jadwalBimbingan}/laporan/create guru.laporan.create ΓÇ║ Guru\LaporanBimbinganControlleΓÇª
  GET|HEAD        guru/jadwal-bimbingan/{jadwal_bimbingan} .. guru.jadwal-bimbingan.show ΓÇ║ Guru\JadwalBimbinganController@show
  PUT|PATCH       guru/jadwal-bimbingan/{jadwal_bimbingan} guru.jadwal-bimbingan.update ΓÇ║ Guru\JadwalBimbinganController@updaΓÇª
  DELETE          guru/jadwal-bimbingan/{jadwal_bimbingan} guru.jadwal-bimbingan.destroy ΓÇ║ Guru\JadwalBimbinganController@desΓÇª
  GET|HEAD        guru/jadwal-bimbingan/{jadwal_bimbingan}/edit guru.jadwal-bimbingan.edit ΓÇ║ Guru\JadwalBimbinganController@eΓÇª
  GET|HEAD        guru/laporan-bimbingan ................ guru.laporan-bimbingan.index ΓÇ║ Guru\LaporanBimbinganController@index
  POST            guru/laporan-bimbingan ................ guru.laporan-bimbingan.store ΓÇ║ Guru\LaporanBimbinganController@store
  GET|HEAD        guru/laporan-bimbingan/create ....... guru.laporan-bimbingan.create ΓÇ║ Guru\LaporanBimbinganController@create
  GET|HEAD        guru/laporan-bimbingan/{laporan_bimbingan} guru.laporan-bimbingan.show ΓÇ║ Guru\LaporanBimbinganController@shΓÇª
  PUT|PATCH       guru/laporan-bimbingan/{laporan_bimbingan} guru.laporan-bimbingan.update ΓÇ║ Guru\LaporanBimbinganController@ΓÇª
  DELETE          guru/laporan-bimbingan/{laporan_bimbingan} guru.laporan-bimbingan.destroy ΓÇ║ Guru\LaporanBimbinganControllerΓÇª
  GET|HEAD        guru/laporan-bimbingan/{laporan_bimbingan}/edit guru.laporan-bimbingan.edit ΓÇ║ Guru\LaporanBimbinganControllΓÇª
  GET|HEAD        guru/laporan/intervensi ........ guru.laporan.intervensi ΓÇ║ Guru\LaporanBimbinganController@laporanIntervensi
  GET|HEAD        guru/laporan/intervensi/pdf guru.laporan.intervensi.pdf ΓÇ║ Guru\LaporanBimbinganController@laporanIntervensiΓÇª
  GET|HEAD        guru/laporan/kolektif .............. guru.laporan.kolektif ΓÇ║ Guru\LaporanBimbinganController@laporanKolektif
  GET|HEAD        guru/laporan/kolektif/pdf ... guru.laporan.kolektif.pdf ΓÇ║ Guru\LaporanBimbinganController@laporanKolektifPdf
  GET|HEAD        guru/laporan/siswa/{id} .................. guru.laporan.siswa ΓÇ║ Guru\LaporanBimbinganController@laporanSiswa
  GET|HEAD        guru/laporan/siswa/{id}/pdf ....... guru.laporan.siswa.pdf ΓÇ║ Guru\LaporanBimbinganController@laporanSiswaPdf
  GET|HEAD        guru/laporan/{laporanBimbingan} ................... guru.laporan.show ΓÇ║ Guru\LaporanBimbinganController@show
  PUT             guru/laporan/{laporanBimbingan} ............... guru.laporan.update ΓÇ║ Guru\LaporanBimbinganController@update
  GET|HEAD        guru/laporan/{laporanBimbingan}/download guru.laporan.download ΓÇ║ Guru\LaporanBimbinganController@downloadPdf
  GET|HEAD        guru/laporan/{laporanBimbingan}/edit .............. guru.laporan.edit ΓÇ║ Guru\LaporanBimbinganController@edit
  GET|HEAD        guru/pelanggaran-siswa ................ guru.pelanggaran-siswa.index ΓÇ║ Guru\PelanggaranSiswaController@index
  POST            guru/pelanggaran-siswa ................ guru.pelanggaran-siswa.store ΓÇ║ Guru\PelanggaranSiswaController@store
  GET|HEAD        guru/pelanggaran-siswa/create ....... guru.pelanggaran-siswa.create ΓÇ║ Guru\PelanggaranSiswaController@create
  GET|HEAD        guru/pelanggaran-siswa/{pelanggaran_siswa} guru.pelanggaran-siswa.show ΓÇ║ Guru\PelanggaranSiswaController@shΓÇª
  PUT|PATCH       guru/pelanggaran-siswa/{pelanggaran_siswa} guru.pelanggaran-siswa.update ΓÇ║ Guru\PelanggaranSiswaController@ΓÇª
  DELETE          guru/pelanggaran-siswa/{pelanggaran_siswa} guru.pelanggaran-siswa.destroy ΓÇ║ Guru\PelanggaranSiswaControllerΓÇª
  GET|HEAD        guru/pelanggaran-siswa/{pelanggaran_siswa}/edit guru.pelanggaran-siswa.edit ΓÇ║ Guru\PelanggaranSiswaControllΓÇª
  GET|HEAD        guru/siswa ................................................... guru.siswa.index ΓÇ║ Guru\SiswaController@index
  POST            guru/siswa ................................................... guru.siswa.store ΓÇ║ Guru\SiswaController@store
  GET|HEAD        guru/siswa/create .......................................... guru.siswa.create ΓÇ║ Guru\SiswaController@create
  GET|HEAD        guru/siswa/{siswa} ............................................. guru.siswa.show ΓÇ║ Guru\SiswaController@show
  PUT|PATCH       guru/siswa/{siswa} ......................................... guru.siswa.update ΓÇ║ Guru\SiswaController@update
  DELETE          guru/siswa/{siswa} ....................................... guru.siswa.destroy ΓÇ║ Guru\SiswaController@destroy
  GET|HEAD        guru/siswa/{siswa}/edit ........................................ guru.siswa.edit ΓÇ║ Guru\SiswaController@edit
  GET|HEAD        kepsek/dashboard ................................ kepsek.dashboard ΓÇ║ KepalaSekolah\DashboardController@index
  GET|HEAD        kepsek/laporan ................................ kepsek.laporan.index ΓÇ║ KepalaSekolah\LaporanController@index
  GET|HEAD        kepsek/laporan/kinerja ...................... kepsek.laporan.kinerja ΓÇ║ Kepsek\LaporanKinerjaController@index
  GET|HEAD        kepsek/laporan/kinerja/pdf ........ kepsek.laporan.kinerja.pdf ΓÇ║ Kepsek\LaporanKinerjaController@downloadPdf
  GET|HEAD        kepsek/laporan/statistik ................ kepsek.laporan.statistik ΓÇ║ Kepsek\LaporanStatistikController@index
  GET|HEAD        kepsek/laporan/statistik/pdf .. kepsek.laporan.statistik.pdf ΓÇ║ Kepsek\LaporanStatistikController@downloadPdf
  GET|HEAD        kepsek/laporan/{laporanBimbingan} ............... kepsek.laporan.show ΓÇ║ KepalaSekolah\LaporanController@show
  GET|HEAD        login ................................................... login ΓÇ║ Auth\AuthenticatedSessionController@create
  POST            login ............................................................ Auth\AuthenticatedSessionController@store
  POST            logout ................................................ logout ΓÇ║ Auth\AuthenticatedSessionController@destroy
  GET|HEAD        ortu/dashboard ......................................... ortu.dashboard ΓÇ║ OrangTua\DashboardController@index
  GET|HEAD        ortu/laporan/{laporanBimbingan} ........................ ortu.laporan.show ΓÇ║ OrangTua\LaporanController@show
  PUT             password .................................................. password.update ΓÇ║ Auth\PasswordController@update
  GET|HEAD        profile .............................................................. profile.edit ΓÇ║ ProfileController@edit
  PATCH           profile .......................................................... profile.update ΓÇ║ ProfileController@update
  DELETE          profile ........................................................ profile.destroy ΓÇ║ ProfileController@destroy
  GET|HEAD        register ................................................... register ΓÇ║ Auth\RegisteredUserController@create
  POST            register ............................................................... Auth\RegisteredUserController@store
  POST            reset-password ........................................... password.store ΓÇ║ Auth\NewPasswordController@store
  GET|HEAD        reset-password/{token} .................................. password.reset ΓÇ║ Auth\NewPasswordController@create
  GET|HEAD        storage/{path} ............................................................................... storage.local
  GET|HEAD        up ......................................................................................................... 
  GET|HEAD        verify-email .................................. verification.notice ΓÇ║ Auth\EmailVerificationPromptController
  GET|HEAD        verify-email/{id}/{hash} .................................. verification.verify ΓÇ║ Auth\VerifyEmailController
  GET|HEAD        walikelas/dashboard .............................. walikelas.dashboard ΓÇ║ WaliKelas\DashboardController@index
  GET|HEAD        walikelas/laporan/kelas ................... walikelas.laporan.kelas ΓÇ║ WaliKelas\LaporanKelasController@index
  GET|HEAD        walikelas/laporan/kelas/pdf ..... walikelas.laporan.kelas.pdf ΓÇ║ WaliKelas\LaporanKelasController@downloadPdf
  GET|HEAD        walikelas/laporan/{laporanBimbingan} ............. walikelas.laporan.show ΓÇ║ WaliKelas\LaporanController@show
  GET|HEAD        walikelas/siswa/{siswa} .............................. walikelas.siswa.show ΓÇ║ WaliKelas\SiswaController@show

                                                                                                          Showing [107] routes

```


## Controllers Content
```
===== app\Http\Controllers\Admin\DashboardController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\User;
use App\Models\JenisPelanggaran;
use App\Models\JadwalBimbingan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Metrik utama
        $totalSiswa = Siswa::count();
        $totalGuru = Guru::count();
        $totalJenisPelanggaran = JenisPelanggaran::count();
        $totalPengguna = User::count();
        
        // Data informatif tambahan
        $jadwalPerluVerifikasi = JadwalBimbingan::where('status', 'menunggu_verifikasi')->count();
        $pelanggaranTerbaru = JenisPelanggaran::latest()->take(5)->get();


        return view('admin.dashboard', compact(
            'totalSiswa',
            'totalGuru',
            'totalJenisPelanggaran',
            'totalPengguna',
            'jadwalPerluVerifikasi',
            'pelanggaranTerbaru'
        ));
    }
}

===== app\Http\Controllers\Admin\GuruController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $query = Guru::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('nama', 'like', "%{$search}%")
                  ->orWhere('nip', 'like', "%{$search}%");
        }

        $guru = $query->latest()->paginate(10)->withQueryString();
        return view('admin.guru.index', compact('guru', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => ['required', 'string', 'max:50', Rule::unique('guru', 'nip')],
        ]);

        Guru::create($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource. (Tidak digunakan sesuai route)
     */
    public function show(Guru $guru)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
         $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => ['required', 'string', 'max:50', Rule::unique('guru', 'nip')->ignore($guru->id)],
        ]);

        $guru->update($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        // Tambahkan pengecekan jika guru masih terhubung ke user? (Opsional)
        if ($guru->user()->exists()) {
            return back()->with('error', 'Tidak bisa menghapus guru yang masih memiliki akun pengguna.');
        }
        
        $guru->delete();
        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus.');
    }
}

===== app\Http\Controllers\Admin\JadwalBimbinganController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\User;

class JadwalBimbinganController extends Controller
{
    public function index(Request $request)
    {
        // Data untuk dropdown filter
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');
        $konselorFilter = User::where('role', 'guru_bk')->orderBy('name')->get();

        // Memulai query dasar
        $query = JadwalBimbingan::with('siswa', 'konselor.guru');

        // Filter berdasarkan pencarian nama siswa
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->whereHas('siswa', function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan kelas
        if ($request->filled('filter_kelas')) {
            $query->whereHas('siswa', function ($q) use ($request) {
                $q->where('kelas', $request->input('filter_kelas'));
            });
        }

        // Filter berdasarkan konselor (Guru BK)
        if ($request->filled('filter_konselor')) {
            $query->where('konselor_id', $request->input('filter_konselor'));
        }

        // Filter berdasarkan status
        if ($request->filled('filter_status')) {
            $query->where('status', $request->input('filter_status'));
        }

        // Filter berdasarkan rentang tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('tanggal_jadwal', [$startDate, $endDate . ' 23:59:59']);
        }

        // Paginate hasil query
        $jadwal = $query->latest()->paginate(10)->withQueryString();

        return view('admin.jadwal.index', compact('jadwal', 'kelasFilter', 'konselorFilter', 'request'));
    }

    public function update(Request $request, JadwalBimbingan $jadwalBimbingan)
    {
        $request->validate([
            'status' => 'required|in:menunggu_verifikasi,terverifikasi,selesai,dibatalkan',
        ]);
        // Tampilkan data SEBELUM diubah
        

        $jadwalBimbingan->status = $request->status;

        // PERBAIKAN: Tambahkan ID admin saat status diubah menjadi 'terverifikasi'
        if ($request->status == 'terverifikasi') {
            $jadwalBimbingan->diverifikasi_oleh = Auth::id();
        }
       // TAMBAHKAN DD DI SINI
       

        $jadwalBimbingan->save();

        return redirect()->back()->with('success', 'Status jadwal berhasil diperbarui.');
    }
}

===== app\Http\Controllers\Admin\JenisPelanggaranController.php =====
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
    public function index(Request $request) // <-- Tambahkan Request $request
    {
        // Memulai query dasar
        $query = JenisPelanggaran::query();

        // Filter berdasarkan pencarian nama pelanggaran
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('nama_pelanggaran', 'like', "%{$search}%");
        }

        // Filter berdasarkan poin
        if ($request->filled('filter_poin')) {
            $poin = $request->input('filter_poin');
            if ($poin == 'ringan') {
                $query->where('poin', '<=', 25);
            } elseif ($poin == 'sedang') {
                $query->whereBetween('poin', [26, 75]);
            } elseif ($poin == 'berat') {
                $query->where('poin', '>', 75);
            }
        }

        // Paginate hasil query
        $pelanggaran = $query->latest()->paginate(10)->withQueryString();

        return view('admin.jenis-pelanggaran.index', [
            'pelanggaran' => $pelanggaran,
            'request' => $request
        ]);
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

===== app\Http\Controllers\Admin\PenggunaController.php =====
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

===== app\Http\Controllers\Auth\AuthenticatedSessionController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

===== app\Http\Controllers\Auth\ConfirmablePasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\EmailVerificationNotificationController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false));
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}

===== app\Http\Controllers\Auth\EmailVerificationPromptController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : view('auth.verify-email');
    }
}

===== app\Http\Controllers\Auth\NewPasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\PasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}

===== app\Http\Controllers\Auth\PasswordResetLinkController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\RegisteredUserController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\VerifyEmailController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}

===== app\Http\Controllers\Guru\DashboardController.php =====
<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\PelanggaranSiswa;
use Illuminate\Http\Request;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $jadwalAkanDatang = JadwalBimbingan::where('konselor_id', Auth::id())
                                ->where('status', 'terverifikasi')
                                ->where('tanggal_jadwal', '>=', now())
                                ->orderBy('tanggal_jadwal', 'asc')
                                ->take(5)
                                ->get();
                                
        $siswaPoinTertinggi = Siswa::select('siswa.*', DB::raw('SUM(jenis_pelanggaran.poin) as total_poin'))
                                    ->join('pelanggaran_siswa', 'siswa.id', '=', 'pelanggaran_siswa.siswa_id')
                                    ->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                                    ->groupBy('siswa.id', 'siswa.nama', 'siswa.nis', 'siswa.kelas', 'siswa.wali_kelas_id', 'siswa.created_at', 'siswa.updated_at')
                                    ->orderBy('total_poin', 'desc')
                                    ->take(5)
                                    ->get();

        return view('guru.dashboard', compact('jadwalAkanDatang', 'siswaPoinTertinggi'));
    }
}

===== app\Http\Controllers\Guru\JadwalBimbinganController.php =====
<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\JadwalBimbingan;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class JadwalBimbinganController extends Controller
{

    public function index(Request $request)
    {
        // Data untuk dropdown filter
        $siswaFilter = Siswa::orderBy('nama')->get();
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');

        // Memulai query dasar dengan filter keamanan
        $query = JadwalBimbingan::with('siswa')
                    ->where('konselor_id', Auth::id());

        // Filter berdasarkan pencarian nama siswa
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->whereHas('siswa', function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan kelas
        if ($request->filled('filter_kelas')) {
            $query->whereHas('siswa', function ($q) use ($request) {
                $q->where('kelas', $request->input('filter_kelas'));
            });
        }

        // Filter berdasarkan status
        if ($request->filled('filter_status')) {
            $query->where('status', $request->input('filter_status'));
        }

        // Filter berdasarkan rentang tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('tanggal_jadwal', [$startDate, $endDate . ' 23:59:59']);
        }

        // Paginate hasil query
        $jadwal = $query->latest()->paginate(10)->withQueryString();
        return view('guru.jadwal.index', compact('jadwal', 'siswaFilter', 'kelasFilter', 'request'));
    }

    public function create()
    {
        $siswa = Siswa::orderBy('nama')->get();
        return view('guru.jadwal.create', compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'tanggal_jadwal' => 'required|date',
        ]);

        JadwalBimbingan::create([
            'siswa_id' => $request->siswa_id,
            'konselor_id' => Auth::id(),
            'tanggal_jadwal' => $request->tanggal_jadwal,
            'status' => 'menunggu_verifikasi', // Status default
        ]);
        // HAPUS dd($jadwalBaru); DARI SINI

        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Jadwal bimbingan berhasil dibuat dan menunggu verifikasi.');
    }

    public function edit(JadwalBimbingan $jadwalBimbingan)
    {
        if ($jadwalBimbingan->konselor_id !== Auth::id()) {
            abort(403);
        }

        if ($jadwalBimbingan->status === 'selesai') {
            return redirect()->route('guru.jadwal-bimbingan.index')->with('error', 'Jadwal yang sudah selesai tidak dapat diubah lagi.');
        }

        $siswa = Siswa::orderBy('nama')->get();
        
        // Logika Baru: Selalu sertakan status saat ini sebagai pilihan.
        $statuses = [
            $jadwalBimbingan->status => Str::title(str_replace('_', ' ', $jadwalBimbingan->status)) . ' (Saat Ini)'
        ];

        if (in_array($jadwalBimbingan->status, ['dibatalkan', 'ditolak'])) {
            // Jika dibatalkan/ditolak, tambahkan opsi untuk mengajukan ulang.
            $statuses['menunggu_verifikasi'] = 'Ajukan Ulang (Menunggu Verifikasi)';
        } else {
            // Jika masih aktif (menunggu atau terverifikasi), tambahkan opsi untuk membatalkan.
            $statuses['dibatalkan'] = 'Dibatalkan';
        }

        return view('guru.jadwal.edit', compact('jadwalBimbingan', 'siswa', 'statuses'));
    }

    public function update(Request $request, JadwalBimbingan $jadwalBimbingan)
    {
        if ($jadwalBimbingan->konselor_id !== Auth::id()) {
            abort(403);
        }
        if ($jadwalBimbingan->status === 'selesai') {
            return redirect()->route('guru.jadwal-bimbingan.index')->with('error', 'Jadwal yang sudah selesai tidak dapat diubah lagi.');
        }

        // Logika Baru: Perbarui aturan validasi agar lebih fleksibel
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'tanggal_jadwal' => 'required|date',
            'status' => ['required', Rule::in(['menunggu_verifikasi', 'dibatalkan', 'terverifikasi'])],
        ]);
        
        $jadwalBimbingan->update($request->all());
        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Jadwal bimbingan berhasil diperbarui.');
    }

    public function destroy(JadwalBimbingan $jadwalBimbingan)
    {
        if ($jadwalBimbingan->konselor_id !== Auth::id()) {
            abort(403);
        }
        $jadwalBimbingan->delete();
        return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Jadwal bimbingan berhasil dihapus.');
    }
}

===== app\Http\Controllers\Guru\LaporanBimbinganController.php =====
<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\Auth;
use App\Models\LaporanBimbingan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\DB;
use App\Models\LaporanDokumen;
use App\Models\Siswa;
use App\Models\JenisPelanggaran;
use App\Models\PelanggaranSiswa;



class LaporanBimbinganController extends Controller
{
    private function getTemplateSurat()
    {
        return [
            'surat_perjanjian' => [
                'label' => 'Surat Perjanjian Siswa',
                'fields' => [
                    'isi_janji' => ['label' => 'Isi Poin-Poin Perjanjian', 'type' => 'textarea', 'required' => true, 'placeholder' => 'Siswa berjanji untuk...'],
                ]
            ],
            'surat_penyerahan_ortu' => [
                'label' => 'Surat Penyerahan Kembali ke Orang Tua',
                'fields' => [
                    'tempat_lahir' => ['label' => 'Tempat Lahir Siswa', 'type' => 'text', 'required' => true],
                    'tanggal_lahir' => ['label' => 'Tanggal Lahir Siswa', 'type' => 'date', 'required' => true],
                    'jenis_kelamin' => ['label' => 'Jenis Kelamin Siswa', 'type' => 'select', 'required' => true, 'options' => ['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan']],
                ]
            ],
            'surat_peringatan' => [
                'label' => 'Surat Peringatan',
                'fields' => [
                    'deskripsi_pelanggaran' => ['label' => 'Deskripsi Pelanggaran yang Dilakukan', 'type' => 'textarea', 'required' => true],
                ]
            ],
            'surat_skorsing' => [
                'label' => 'Surat Skorsing',
                'fields' => [
                    'tanggal_mulai_skorsing' => ['label' => 'Skorsing Berlaku Mulai Tanggal', 'type' => 'date', 'required' => true],
                    'tanggal_selesai_skorsing' => ['label' => 'Skorsing Selesai Tanggal', 'type' => 'date', 'required' => true],
                    'tanggal_masuk_kembali' => ['label' => 'Siswa Masuk Kembali Hari/Tanggal', 'type' => 'text', 'required' => true, 'placeholder' => 'Contoh: Senin, 20 Oktober 2025'],
                ]
            ],
            'surat_undangan_ortu' => [
                'label' => 'Surat Undangan Orang Tua',
                'fields' => [
                    'tanggal_undangan' => ['label' => 'Hari/Tanggal Undangan', 'type' => 'text', 'required' => true, 'placeholder' => 'Contoh: Senin, 20 Oktober 2025'],
                    'jam_undangan' => ['label' => 'Jam', 'type' => 'time', 'required' => true],
                    'tempat_undangan' => ['label' => 'Tempat', 'type' => 'text', 'required' => true, 'value' => 'Ruang Bimbingan Konseling'],
                ]
            ],
        ];
    }

    public function create($jadwalId)
    {
        $jadwal = JadwalBimbingan::find($jadwalId);
        if (!$jadwal) {
            abort(404, 'Jadwal bimbingan tidak ditemukan.');
        }

        if ($jadwal->konselor_id !== Auth::id()) {
            abort(403, 'Anda tidak berhak membuat laporan untuk jadwal ini.');
        }

        return view('guru.laporan.create', [
            'jadwal' => $jadwal,
            // Mengirim struktur template yang benar ke view
            'templateSurat' => $this->getTemplateSurat(),
        ]);
    }


    public function store(Request $request, $jadwalId)
    {
        $jadwal = JadwalBimbingan::find($jadwalId);
        if (!$jadwal) {
            abort(404);
        }
        if ($jadwal->konselor_id !== Auth::id()) {
            abort(403);
        }

        $templates = $this->getTemplateSurat();
        $selectedTemplateKeys = $request->input('jenis_surat', []); // Sekarang array

        if (empty($selectedTemplateKeys)) {
            return back()->withErrors(['jenis_surat' => 'Pilih setidaknya satu jenis surat.'])->withInput();
        }

        // Kumpulkan semua field dinamis yang dibutuhkan dari SEMUA template yang dipilih
        $allRequiredFields = [];
        $validationRules = [
            'jenis_surat' => 'required|array', // Validasi sebagai array
            'jenis_surat.*' => 'in:' . implode(',', array_keys($templates)), // Setiap item harus valid
            'isi_laporan' => 'nullable|string',
            'rencana_tindak_lanjut' => 'nullable|string',
        ];

        foreach ($selectedTemplateKeys as $key) {
            $templateConfig = $templates[$key] ?? null;
            if ($templateConfig) {
                foreach ($templateConfig['fields'] as $fieldKey => $config) {
                    if ($config['required'] && !isset($validationRules[$fieldKey])) {
                        $validationRules[$fieldKey] = 'required';
                    }
                    $allRequiredFields[$fieldKey] = $config; // Kumpulkan semua field unik
                }
            }
        }

        $request->validate($validationRules);

        // Siapkan data statis sekali saja
        $siswa = $jadwal->siswa->load(['waliMurid', 'waliKelas']);
        $staticData = [
            'nama_siswa' => $siswa->nama,
            'nis' => $siswa->nis,
            'kelas' => $siswa->kelas,
            'nama_ortu' => $siswa->waliMurid->nama ?? 'N/A',
            'nama_walas' => $siswa->waliKelas->nama ?? 'N/A',
            'nama_konselor' => Auth::user()->name,
            'nip_konselor' => Auth::user()->guru->nip ?? 'N/A',
            'tanggal_surat' => Carbon::now()->isoFormat('D MMMM YYYY'),
            'isi_laporan' => $request->isi_laporan ?? '-',
            'tindak_lanjut' => $request->rencana_tindak_lanjut ?? '-',
        ];

        // Ambil data dinamis dari request
        $dynamicFieldsData = $request->only(array_keys($allRequiredFields));

        // Format data dinamis (tanggal, janji, dll.)
        foreach ($dynamicFieldsData as $key => &$value) {
            if (isset($allRequiredFields[$key])) {
                if (in_array($key, ['tanggal_mulai_skorsing', 'tanggal_selesai_skorsing', 'tanggal_lahir'])) {
                    $value = Carbon::parse($value)->isoFormat('dddd, D MMMM YYYY');
                } elseif ($key === 'isi_janji') {
                    $lines = explode("\n", trim($value));
                    $formattedLines = [];
                    foreach ($lines as $index => $line) {
                        $formattedLines[] = ($index + 1) . ". " . trim($line);
                    }
                    $value = implode("\n", $formattedLines);
                }
            }
        }
        unset($value); // Hapus referensi

        $templateData = array_merge($staticData, $dynamicFieldsData);

        // Gunakan transaksi database
        DB::beginTransaction();
        try {
            // 1. Buat record laporan utama
            $laporanBimbingan = LaporanBimbingan::create([
                'jadwal_id' => $jadwal->id,
                'isi_laporan' => $request->isi_laporan,
                'rencana_tindak_lanjut' => $request->rencana_tindak_lanjut,
                'dibuat_oleh' => Auth::id(),
            ]);

            // 2. Loop untuk setiap template yang dipilih
            foreach ($selectedTemplateKeys as $templateKey) {
                $templatePath = storage_path("app/templates/{$templateKey}.docx");
                if (!file_exists($templatePath)) {
                    throw new \Exception("Template {$templateKey}.docx tidak ditemukan.");
                }

                $templateProcessor = new TemplateProcessor($templatePath);
                $templateProcessor->setValues($templateData); // Gunakan data yang sama

                $fileName = "laporan_{$templateKey}_" . $siswa->nis . '_' . time() . '_' . uniqid() . '.docx';
                $path = "laporan_word/{$fileName}";
                if (!Storage::disk('public')->exists('laporan_word')) {
                    Storage::disk('public')->makeDirectory('laporan_word');
                }
                $templateProcessor->saveAs(storage_path("app/public/{$path}"));

                // 3. Simpan info dokumen ke tabel baru
                LaporanDokumen::create([
                    'laporan_bimbingan_id' => $laporanBimbingan->id,
                    'jenis_surat' => $templateKey,
                    'file_path' => $path,
                ]);
            }

            // 4. Update status jadwal
            $jadwal->update(['status' => 'selesai']);

            DB::commit(); // Konfirmasi semua perubahan jika berhasil

            return redirect()->route('guru.jadwal-bimbingan.index')->with('success', 'Laporan berhasil dibuat dan ' . count($selectedTemplateKeys) . ' file surat telah digenerate.');
        } catch (\Exception $e) {
            DB::rollBack(); // Batalkan semua perubahan jika ada error
            // Hapus file yang mungkin sudah terbuat (opsional, tergantung kebutuhan)
            return back()->with('error', 'Terjadi kesalahan saat membuat laporan: ' . $e->getMessage())->withInput();
        }
    }



    public function show(LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }
        $laporanBimbingan->load('jadwalBimbingan.siswa', 'pembuat', 'dokumen');
        return view('guru.laporan.show', compact('laporanBimbingan'));
    }

    public function edit(LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }
        $laporanBimbingan->load('jadwalBimbingan.siswa');
        return view('guru.laporan.edit', compact('laporanBimbingan'));
    }

    public function update(Request $request, LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'isi_laporan' => 'required|string',
            'rencana_tindak_lanjut' => 'nullable|string',
        ]);

        $laporanBimbingan->update($request->all());

        return redirect()->route('guru.laporan.show', $laporanBimbingan->id)->with('success', 'Laporan berhasil diperbarui.');
    }

    public function downloadPdf(LaporanBimbingan $laporanBimbingan)
    {
        if ($laporanBimbingan->dibuat_oleh !== Auth::id()) {
            abort(403);
        }

        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh.guru');

        $pdf = Pdf::loadView('guru.laporan.pdf', compact('laporanBimbingan'));

        $namaFile = 'laporan-bimbingan-' . Str::slug($laporanBimbingan->jadwalBimbingan->siswa->nama) . '.pdf';

        return $pdf->download($namaFile);
    }

    public function laporanSiswa($id)
    {
        $siswa = Siswa::with(['pelanggaran.jenisPelanggaran', 'laporanBimbingan'])->findOrFail($id);
        return view('guru.laporan.individu', compact('siswa'));
    }

    public function laporanSiswaPdf($id)
    {
        $siswa = Siswa::with(['pelanggaran.jenisPelanggaran', 'laporanBimbingan'])->findOrFail($id);

        $pdf = Pdf::loadView('pdf.laporan_individu', compact('siswa'))
            ->setPaper('a4', 'portrait');

        $filename = 'laporan_kasus_individu_' . str_replace(' ', '_', strtolower($siswa->nama)) . '_' . now()->format('Ymd_His') . '.pdf';
        return $pdf->download($filename);
    }

    public function laporanKolektif(Request $request)
    {
        $jenisKasus = $request->input('jenis_kasus');
        $kelas = $request->input('kelas');
        $periodeAwal = $request->input('periode_awal');
        $periodeAkhir = $request->input('periode_akhir');

        // Ambil semua jenis pelanggaran (untuk dropdown)
        $daftarJenis = JenisPelanggaran::orderBy('nama_pelanggaran')->get();

        // Query dasar
        $query = PelanggaranSiswa::with(['jenisPelanggaran', 'siswa'])
            ->when($jenisKasus, fn($q) => $q->whereHas('jenisPelanggaran', fn($j) => $j->where('nama_pelanggaran', $jenisKasus)))
            ->when($kelas, fn($q) => $q->whereHas('siswa', fn($s) => $s->where('kelas', $kelas)))
            ->when(
                $periodeAwal && $periodeAkhir,
                fn($q) =>
                $q->whereBetween('tanggal_pelanggaran', [$periodeAwal, $periodeAkhir])
            );

        $data = $query->get()
            ->groupBy(fn($item) => $item->jenisPelanggaran->nama_pelanggaran);

        return view('guru.laporan.kolektif', compact('data', 'daftarJenis', 'jenisKasus', 'kelas', 'periodeAwal', 'periodeAkhir'));
    }

    public function laporanKolektifPdf(Request $request)
    {
        $jenisKasus = $request->input('jenis_kasus');
        $kelas = $request->input('kelas');
        $periodeAwal = $request->input('periode_awal');
        $periodeAkhir = $request->input('periode_akhir');

        $query = PelanggaranSiswa::with(['jenisPelanggaran', 'siswa'])
            ->when($jenisKasus, fn($q) => $q->whereHas('jenisPelanggaran', fn($j) => $j->where('nama_pelanggaran', $jenisKasus)))
            ->when($kelas, fn($q) => $q->whereHas('siswa', fn($s) => $s->where('kelas', $kelas)))
            ->when(
                $periodeAwal && $periodeAkhir,
                fn($q) =>
                $q->whereBetween('tanggal_pelanggaran', [$periodeAwal, $periodeAkhir])
            );

        $data = $query->get()
            ->groupBy(fn($item) => $item->jenisPelanggaran->nama_pelanggaran);

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.laporan_kolektif', compact('data', 'jenisKasus', 'kelas', 'periodeAwal', 'periodeAkhir'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('laporan_kolektif_' . now()->format('Ymd_His') . '.pdf');
    }

    public function laporanIntervensi(Request $request)
    {
        $periodeAwal = $request->input('periode_awal');
        $periodeAkhir = $request->input('periode_akhir');
        $status = $request->input('status'); // "sudah" / "belum"

        $query = JadwalBimbingan::with(['siswa', 'guru', 'laporanBimbingan'])
            ->when(
                $periodeAwal && $periodeAkhir,
                fn($q) =>
                $q->whereBetween('tanggal_jadwal', [$periodeAwal, $periodeAkhir])
            );

        // Filter status tindak lanjut
        if ($status === 'sudah') {
            $query->whereHas('laporanBimbingan');
        } elseif ($status === 'belum') {
            $query->whereDoesntHave('laporanBimbingan');
        }

        $data = $query->orderBy('tanggal_jadwal', 'desc')->get();

        return view('guru.laporan.intervensi', compact('data', 'periodeAwal', 'periodeAkhir', 'status'));
    }

    public function laporanIntervensiPdf(Request $request)
    {
        $periodeAwal = $request->input('periode_awal');
        $periodeAkhir = $request->input('periode_akhir');
        $status = $request->input('status');

        $query = JadwalBimbingan::with(['siswa', 'guru', 'laporanBimbingan'])
            ->when(
                $periodeAwal && $periodeAkhir,
                fn($q) =>
                $q->whereBetween('tanggal_jadwal', [$periodeAwal, $periodeAkhir])
            );

        if ($status === 'sudah') {
            $query->whereHas('laporanBimbingan');
        } elseif ($status === 'belum') {
            $query->whereDoesntHave('laporanBimbingan');
        }

        $data = $query->orderBy('tanggal_jadwal', 'desc')->get();

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.laporan_intervensi', compact('data', 'periodeAwal', 'periodeAkhir', 'status'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('laporan_intervensi_' . now()->format('Ymd_His') . '.pdf');
    }
}

===== app\Http\Controllers\Guru\PelanggaranSiswaController.php =====
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
        // Lakukan validasi data yang masuk
        $validatedData = $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_pelanggaran_id' => 'required|exists:jenis_pelanggaran,id',
            'catatan' => 'nullable|string',
        ]);

        PelanggaranSiswa::create([
            'siswa_id' => $validatedData['siswa_id'],
            'jenis_pelanggaran_id' => $validatedData['jenis_pelanggaran_id'],
            'catatan' => $validatedData['catatan'],
            'dilaporkan_oleh' => Auth::id(), // ID Guru yang login otomatis tersimpan
            // tanggal_pelanggaran akan diisi otomatis oleh model
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

===== app\Http\Controllers\Guru\SiswaController.php =====
<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\WaliMurid;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Guru;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil data untuk filter dropdown
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');
        $waliKelasFilter = Guru::whereIn('id', function ($query) {
            $query->select('wali_kelas_id')->from('siswa');
        })->orderBy('nama')->get();

        // Memulai query dasar
        $query = Siswa::with('waliKelas');

        // Filter berdasarkan pencarian nama/NIS
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('nis', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan kelas
        if ($request->filled('filter_kelas')) {
            $query->where('kelas', $request->input('filter_kelas'));
        }

        // Filter berdasarkan wali kelas
        if ($request->filled('filter_wali_kelas')) {
            $query->where('wali_kelas_id', $request->input('filter_wali_kelas'));
        }

        // Paginate hasil query
        $siswa = $query->latest()->paginate(10)->withQueryString();

        return view('guru.siswa.index', [
            'siswa' => $siswa,
            'kelasFilter' => $kelasFilter,
            'waliKelasFilter' => $waliKelasFilter,
            'request' => $request // Mengirim semua input request ke view
        ]);
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
            // --- VALIDASI BARU UNTUK PASSWORD ---
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $siswa->update($request->only('nama', 'nis', 'kelas', 'wali_kelas_id'));
        $siswa->waliMurid->update([
            'nama' => $request->nama_wali,
            'nomor_telepon' => $request->nomor_telepon_wali,
        ]);

        // Ambil user wali
        $userWali = $siswa->waliMurid->user;
        $userWali->name = $request->nama_wali;
        $userWali->email = $request->email_wali;

        // --- LOGIKA BARU UNTUK UPDATE PASSWORD ---
        // Update password hanya jika kolomnya diisi
        if ($request->filled('password')) {
            $userWali->password = Hash::make($request->password);
        }
        $userWali->save();
        // --- AKHIR LOGIKA BARU ---

        return redirect()->route('guru.siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        // cascade on delete akan menghapus wali_murid, user, pelanggaran, dll.
        $siswa->delete();
        return redirect()->route('guru.siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}

===== app\Http\Controllers\KepalaSekolah\DashboardController.php =====
<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\PelanggaranSiswa;
use App\Models\LaporanBimbingan;
use App\Models\JadwalBimbingan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    

    public function index(Request $request)
    {
        // --- 1. Data Statistik (Card) ---
        $stats = [
            'total_siswa' => Siswa::count(),
            'total_pelanggaran' => PelanggaranSiswa::count(),
            'total_laporan' => LaporanBimbingan::count(),
            'jadwal_aktif' => JadwalBimbingan::whereIn('status', ['menunggu_verifikasi', 'terverifikasi'])->count(),
        ];

        // --- 2. Data untuk Grafik ---
        $selectedYear = $request->input('tahun', Carbon::now()->year);
        $selectedSemester = $request->input('semester');

        $query = PelanggaranSiswa::select(
                DB::raw('MONTH(tanggal_pelanggaran) as bulan'),
                DB::raw('COUNT(*) as jumlah')
            )
            ->whereYear('tanggal_pelanggaran', $selectedYear)
            ->groupBy('bulan');

        if ($selectedSemester == 1) {
            $query->whereMonth('tanggal_pelanggaran', '>=', 1)->whereMonth('tanggal_pelanggaran', '<=', 6);
        } elseif ($selectedSemester == 2) {
            $query->whereMonth('tanggal_pelanggaran', '>=', 7)->whereMonth('tanggal_pelanggaran', '<=', 12);
        }

        $dataPelanggaran = $query->pluck('jumlah', 'bulan')->all();

        $chartData = array_fill(1, 12, 0);
        foreach ($dataPelanggaran as $bulan => $jumlah) {
            $chartData[$bulan] = $jumlah;
        }

        $labels = [
            'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
            'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'
        ];
        
        if ($selectedSemester == 1) {
            $labels = array_slice($labels, 0, 6);
            $chartData = array_slice($chartData, 0, 6);
        } elseif ($selectedSemester == 2) {
            $labels = array_slice($labels, 6, 6);
            $chartData = array_slice(array_values($chartData), 6, 6);
        } else {
             $chartData = array_values($chartData);
        }
        
        // --- 3. Data untuk Widget Baru ---
        $recentReports = LaporanBimbingan::with('jadwalBimbingan.siswa')->latest()->take(5)->get();
        
        $highPointStudents = Siswa::withCount(['pelanggaran as total_poin' => function ($query) {
            $query->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                  ->select(DB::raw('sum(jenis_pelanggaran.poin)'));
        }])->orderByDesc('total_poin')->take(5)->get();


        // --- 4. Data untuk Filter Dropdown ---
        $availableYears = PelanggaranSiswa::select(DB::raw('YEAR(tanggal_pelanggaran) as tahun'))
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        return view('kepsek.dashboard', compact(
            'stats', 
            'labels', 
            'chartData', 
            'availableYears', 
            'selectedYear', 
            'selectedSemester',
            'recentReports',
            'highPointStudents'
        ));
    }
}

===== app\Http\Controllers\KepalaSekolah\LaporanController.php =====
<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBimbingan;
use App\Models\User;
use App\Models\Siswa;

class LaporanController extends Controller
{

    public function index(Request $request)
    {
        // Data untuk dropdown filter
        $konselorFilter = User::whereIn('role', ['guru_bk', 'wali_kelas'])->orderBy('name')->get();
        $kelasFilter = Siswa::select('kelas')->distinct()->orderBy('kelas')->pluck('kelas');

        // Memulai query dasar
        $query = LaporanBimbingan::with(['jadwalBimbingan.siswa', 'pembuat']);

        // Filter berdasarkan pencarian nama siswa
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->whereHas('jadwalBimbingan.siswa', function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%");
            });
        }

        // Filter lainnya
        if ($request->filled('filter_konselor')) {
            $query->where('dibuat_oleh', $request->input('filter_konselor'));
        }
        if ($request->filled('filter_kelas')) {
            $query->whereHas('jadwalBimbingan.siswa', function ($q) use ($request) {
                $q->where('kelas', $request->input('filter_kelas'));
            });
        }
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date . ' 23:59:59']);
        }

        $laporan = $query->latest()->paginate(10)->withQueryString();

        return view('kepsek.laporan.index', compact('laporan', 'konselorFilter', 'kelasFilter', 'request'));
    }

    public function show(LaporanBimbingan $laporanBimbingan)
    {
        // Kepala sekolah bisa melihat semua laporan, jadi tidak perlu pengecekan hak akses spesifik
        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh.guru');
        return view('kepsek.laporan.show', compact('laporanBimbingan'));
    }
}

===== app\Http\Controllers\Kepsek\LaporanKinerjaController.php =====
<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JadwalBimbingan;
use App\Models\LaporanBimbingan;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanKinerjaController extends Controller
{
    public function index(Request $request)
    {
        $periodeAwal = $request->input('periode_awal');
        $periodeAkhir = $request->input('periode_akhir');

        $guruBk = User::where('role', 'guru_bk')->get()->map(function ($guru) use ($periodeAwal, $periodeAkhir) {
            $jadwalQuery = JadwalBimbingan::where('konselor_id', $guru->id);
            $laporanQuery = LaporanBimbingan::whereHas('jadwal', fn($q) => $q->where('konselor_id', $guru->id));

            if ($periodeAwal && $periodeAkhir) {
                $jadwalQuery->whereBetween('tanggal_jadwal', [$periodeAwal, $periodeAkhir]);
                $laporanQuery->whereBetween('created_at', [$periodeAwal, $periodeAkhir]);
            }

            return [
                'nama' => $guru->name,
                'total_jadwal' => $jadwalQuery->count(),
                'total_laporan' => $laporanQuery->count(),
                'jenis_kasus' => \App\Models\PelanggaranSiswa::whereHas('siswa', function ($q) use ($guru) {
                    $q->whereHas('jadwalBimbingan', function ($qq) use ($guru) {
                        $qq->where('konselor_id', $guru->id);
                    });
                })
                    ->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                    ->distinct('jenis_pelanggaran.id')
                    ->count('jenis_pelanggaran.id'),

            ];
        });

        return view('kepsek.laporan.kinerja', compact('guruBk', 'periodeAwal', 'periodeAkhir'));
    }

    public function downloadPdf(Request $request)
    {
        $periodeAwal = $request->input('periode_awal');
        $periodeAkhir = $request->input('periode_akhir');

        $guruBk = User::where('role', 'guru_bk')->get()->map(function ($guru) use ($periodeAwal, $periodeAkhir) {
            $jadwalQuery = JadwalBimbingan::where('konselor_id', $guru->id);
            $laporanQuery = LaporanBimbingan::whereHas('jadwal', fn($q) => $q->where('konselor_id', $guru->id));

            if ($periodeAwal && $periodeAkhir) {
                $jadwalQuery->whereBetween('tanggal_jadwal', [$periodeAwal, $periodeAkhir]);
                $laporanQuery->whereBetween('created_at', [$periodeAwal, $periodeAkhir]);
            }

            return [
                'nama' => $guru->name,
                'total_jadwal' => $jadwalQuery->count(),
                'total_laporan' => $laporanQuery->count(),
                'jenis_kasus' => \App\Models\PelanggaranSiswa::whereHas('siswa', function ($q) use ($guru) {
                    $q->whereHas('jadwalBimbingan', function ($qq) use ($guru) {
                        $qq->where('konselor_id', $guru->id);
                    });
                })
                    ->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
                    ->distinct('jenis_pelanggaran.id')
                    ->count('jenis_pelanggaran.id'),

            ];
        });

        $pdf = Pdf::loadView('pdf.laporan_kinerja', compact('guruBk', 'periodeAwal', 'periodeAkhir'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('laporan_kinerja_guru_bk_' . now()->format('Ymd_His') . '.pdf');
    }
}

===== app\Http\Controllers\Kepsek\LaporanStatistikController.php =====
<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PelanggaranSiswa;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\LaporanBimbingan;


class LaporanStatistikController extends Controller
{
    public function index(Request $request)
    {
        $tahun = $request->input('tahun', now()->year);

        // Kasus per bulan
        // Kasus per bulan (pakai tanggal_pelanggaran)
        $kasusBulanan = PelanggaranSiswa::selectRaw('MONTH(tanggal_pelanggaran) as bulan, COUNT(*) as total')
            ->whereYear('tanggal_pelanggaran', $tahun)
            ->groupBy('bulan')
            ->pluck('total', 'bulan');


        // Jenis pelanggaran paling sering
        $jenisKasus = PelanggaranSiswa::join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
            ->select('jenis_pelanggaran.nama_pelanggaran', DB::raw('COUNT(*) as total'))
            ->groupBy('jenis_pelanggaran.id', 'jenis_pelanggaran.nama_pelanggaran')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        // Efektivitas penanganan
        $totalKasus = PelanggaranSiswa::count();
        $totalTertangani = LaporanBimbingan::count();
        $efektivitas = $totalKasus > 0 ? round(($totalTertangani / $totalKasus) * 100, 1) : 0;

        return view('kepsek.laporan.statistik', compact('kasusBulanan', 'jenisKasus', 'efektivitas', 'tahun'));
    }

    public function downloadPdf(Request $request)
    {
        $tahun = $request->input('tahun', now()->year);

        $jenisKasus = PelanggaranSiswa::join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
            ->select('jenis_pelanggaran.nama_pelanggaran', DB::raw('COUNT(*) as total'))
            ->groupBy('jenis_pelanggaran.id', 'jenis_pelanggaran.nama_pelanggaran')
            ->orderByDesc('total')
            ->get();

        $totalKasus = PelanggaranSiswa::count();
        $totalTertangani = LaporanBimbingan::count();
        $efektivitas = $totalKasus > 0 ? round(($totalTertangani / $totalKasus) * 100, 1) : 0;

        $pdf = Pdf::loadView('pdf.laporan_statistik', compact('jenisKasus', 'efektivitas', 'tahun'))
            ->setPaper('a4', 'portrait');

        return $pdf->download('laporan_statistik_' . $tahun . '_' . now()->format('Ymd_His') . '.pdf');
    }
}

===== app\Http\Controllers\OrangTua\DashboardController.php =====
<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\LaporanBimbingan;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Periksa apakah akun ini sudah terhubung dengan data Wali Murid dan Siswa
        if (!$user->wali || !$user->wali->siswa) {
            // Jika tidak terhubung, kirim data null ke view agar tidak error
            return view('ortu.dashboard', [
                'siswa' => null,
                'waliKelasUser' => null,
            ]);
        }

        // Jika terhubung, lanjutkan mengambil semua data yang dibutuhkan
        $siswa = $user->wali->siswa->load(
            'jadwalBimbingan.laporan', 
            'pelanggaran.jenisPelanggaran', 
            'waliKelas.user'
        );
        
        $waliKelasUser = $siswa->waliKelas->user;

        return view('ortu.dashboard', [
            'siswa' => $siswa,
            'waliKelasUser' => $waliKelasUser,
        ]);
    }
}

===== app\Http\Controllers\OrangTua\LaporanController.php =====
<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBimbingan;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class LaporanController extends Controller
{
    public function show(LaporanBimbingan $laporanBimbingan)
    {
        // --- LOGIKA BARU YANG LEBIH AMAN ---
        // 1. Ambil ID wali murid dari pengguna yang sedang login.
        $waliIdPengguna = Auth::user()->wali_id;

        // 2. Ambil ID wali murid yang terkait dengan laporan ini.
        $waliIdLaporan = $laporanBimbingan->jadwalBimbingan->siswa->waliMurid->id;

        // 3. Pastikan keduanya sama. Jika tidak, akses ditolak.
        if ($waliIdPengguna !== $waliIdLaporan) {
            abort(403);
        }
        // --- AKHIR LOGIKA BARU ---

        // Muat relasi yang dibutuhkan untuk ditampilkan di view
        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh');

        return view('ortu.laporan.show', compact('laporanBimbingan'));
    }

    
}

===== app\Http\Controllers\WaliKelas\DashboardController.php =====
<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil ID guru dari user yang sedang login
        $waliKelasId = Auth::user()->guru_id;

        // Mengambil semua siswa yang perwaliannya dipegang oleh guru yang login
        // Diurutkan berdasarkan nama siswa
        $siswaDiampu = Siswa::where('wali_kelas_id', $waliKelasId)
                            ->orderBy('nama', 'asc')
                            ->get();

        return view('walikelas.dashboard', compact('siswaDiampu'));
    }
}

===== app\Http\Controllers\WaliKelas\LaporanController.php =====
<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBimbingan;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function show(LaporanBimbingan $laporanBimbingan)
    {
        // Keamanan: Pastikan wali kelas hanya bisa melihat laporan siswa di kelasnya.
        $siswa = $laporanBimbingan->jadwalBimbingan->siswa;
        if ($siswa->wali_kelas_id !== Auth::user()->guru_id) {
            abort(403, 'Anda tidak memiliki hak akses untuk melihat laporan ini.');
        }

        $laporanBimbingan->load('jadwalBimbingan.siswa', 'dibuatOleh.guru');
        return view('walikelas.laporan.show', compact('laporanBimbingan'));
    }
}

===== app\Http\Controllers\WaliKelas\LaporanKelasController.php =====
<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanKelasController extends Controller
{
    public function index(Request $request)
    {
        $kelas = $request->input('kelas');

        $query = Siswa::with(['pelanggaran.jenisPelanggaran', 'laporanBimbingan']);

        if ($kelas) {
            $query->where('kelas', $kelas);
        }

        $data = $query->get()->map(function ($siswa) {
            $totalPelanggaran = $siswa->pelanggaran->count();
            $totalPoin = $siswa->pelanggaran->sum(fn($p) => $p->jenisPelanggaran->poin ?? 0);
            $totalBimbingan = $siswa->laporanBimbingan->count();

            return [
                'nama' => $siswa->nama,
                'kelas' => $siswa->kelas,
                'pelanggaran' => $totalPelanggaran,
                'poin' => $totalPoin,
                'bimbingan' => $totalBimbingan,
            ];
        });

        return view('walikelas.laporan.kelas', compact('data', 'kelas'));
    }

    public function downloadPdf(Request $request)
    {
        $kelas = $request->input('kelas');

        $query = Siswa::with(['pelanggaran.jenisPelanggaran', 'laporanBimbingan']);
        if ($kelas) $query->where('kelas', $kelas);

        $data = $query->get()->map(function ($siswa) {
            return [
                'nama' => $siswa->nama,
                'kelas' => $siswa->kelas,
                'pelanggaran' => $siswa->pelanggaran->count(),
                'poin' => $siswa->pelanggaran->sum(fn($p) => $p->jenisPelanggaran->poin ?? 0),
                'bimbingan' => $siswa->laporanBimbingan->count(),
            ];
        });

        $pdf = Pdf::loadView('pdf.laporan_kelas', compact('data', 'kelas'))
                ->setPaper('a4', 'landscape');

        return $pdf->download('laporan_kelas_' . ($kelas ?? 'semua') . '_' . now()->format('Ymd_His') . '.pdf');
    }
}

===== app\Http\Controllers\WaliKelas\SiswaController.php =====
<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Menampilkan halaman detail siswa untuk Wali Kelas.
     */
    public function show(Siswa $siswa)
    {
        // Keamanan: Pastikan wali kelas hanya bisa melihat siswa di kelasnya.
        if ($siswa->wali_kelas_id !== Auth::user()->guru_id) {
            abort(403, 'Anda tidak memiliki hak akses untuk melihat data siswa ini.');
        }

        // Muat semua relasi yang dibutuhkan untuk ditampilkan di view
        $siswa->load(['pelanggaran.jenisPelanggaran', 'jadwalBimbingan.konselor']);

        return view('walikelas.siswa.show', compact('siswa'));
    }
}

===== app\Http\Controllers\Controller.php =====
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

===== app\Http\Controllers\ProfileController.php =====
<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

```


## Models Content
```
===== app\Models\Guru.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $fillable = ['nama', 'nip'];

    // Relasi: Satu guru bisa menjadi wali kelas dari banyak siswa
    public function siswaWalian(): HasMany
    {
        return $this->hasMany(Siswa::class, 'wali_kelas_id');
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}

===== app\Models\JadwalBimbingan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JadwalBimbingan extends Model
{
    use HasFactory;

    protected $table = 'jadwal_bimbingan';

    protected $fillable = [
        'siswa_id',
        'konselor_id',
        'tanggal_jadwal',
        'status',
        'diverifikasi_oleh',
    ];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function konselor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'konselor_id');
    }

    public function laporan(): HasOne
    {
        return $this->hasOne(LaporanBimbingan::class, 'jadwal_id');
    }

    public function guru(): BelongsTo
    {
        return $this->belongsTo(User::class, 'konselor_id');
    }

    public function laporanBimbingan(): HasMany
    {
        return $this->hasMany(LaporanBimbingan::class, 'jadwal_id');
    }
}

===== app\Models\JenisPelanggaran.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisPelanggaran extends Model
{
    use HasFactory;

    protected $table = 'jenis_pelanggaran';

    protected $fillable = [
        'nama_pelanggaran',
        'poin',
        'dibuat_oleh',
    ];
}

===== app\Models\LaporanBimbingan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanBimbingan extends Model
{
    use HasFactory;

    protected $table = 'laporan_bimbingan';

    protected $fillable = [
        'jadwal_id',
        'jenis_surat',
        'file_pendukung',
        'isi_laporan',
        'rencana_tindak_lanjut',
        'dibuat_oleh',
    ];

    public function jadwalBimbingan(): BelongsTo
    {
        return $this->belongsTo(JadwalBimbingan::class, 'jadwal_id');
    }

    public function dibuatOleh(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function pembuat()
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function dokumen()
    {
        return $this->hasMany(LaporanDokumen::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(\App\Models\JadwalBimbingan::class, 'jadwal_id');
    }
}

===== app\Models\LaporanDokumen.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanDokumen extends Model
{
    use HasFactory;

    protected $table = 'laporan_dokumen';

    protected $fillable = [
        'laporan_bimbingan_id',
        'jenis_surat',
        'file_path',
    ];

    public function laporanBimbingan()
    {
        return $this->belongsTo(LaporanBimbingan::class);
    }
}

===== app\Models\PelanggaranSiswa.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PelanggaranSiswa extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran_siswa';
    
    // Karena kita memakai nama kolom 'tanggal_pelanggaran' bukan 'created_at'
    const CREATED_AT = 'tanggal_pelanggaran';
    const UPDATED_AT = null; // Tidak ada updated_at di tabel ini

    protected $fillable = [
        'siswa_id',
        'jenis_pelanggaran_id',
        'catatan',
        'dilaporkan_oleh',
    ];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function jenisPelanggaran(): BelongsTo
    {
        return $this->belongsTo(JenisPelanggaran::class);
    }

    public function pelapor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dilaporkan_oleh');
    }
}

===== app\Models\Siswa.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'wali_kelas_id',
    ];

    // Relasi: Satu siswa dimiliki oleh satu wali kelas
    public function waliKelas(): BelongsTo
    {
        return $this->belongsTo(Guru::class, 'wali_kelas_id');
    }

    // Relasi: Satu siswa punya satu wali murid
    public function waliMurid(): HasOne
    {
        return $this->hasOne(WaliMurid::class);
    }

    // Relasi: Satu siswa bisa punya banyak catatan pelanggaran
    public function pelanggaran(): HasMany
    {
        return $this->hasMany(PelanggaranSiswa::class);
    }

    public function totalPoin()
    {
        // Method ini akan menjumlahkan poin dari semua pelanggaran yang dimiliki siswa.
        // Kita menggunakan relasi 'pelanggaran' yang sudah ada dan mengambil kolom 'poin' dari tabel 'jenis_pelanggaran' yang terhubung.
        return $this->pelanggaran()->join('jenis_pelanggaran', 'pelanggaran_siswa.jenis_pelanggaran_id', '=', 'jenis_pelanggaran.id')
            ->sum('jenis_pelanggaran.poin');
    }

    public function jadwalBimbingan(): HasMany
    {
        return $this->hasMany(JadwalBimbingan::class);
    }

    public function laporanBimbingan()
    {
        return $this->hasManyThrough(
            \App\Models\LaporanBimbingan::class,
            \App\Models\JadwalBimbingan::class,
            'siswa_id',      // FK di tabel jadwal_bimbingan
            'jadwal_id',     // FK di tabel laporan_bimbingan
            'id',            // PK di tabel siswa
            'id'             // PK di tabel jadwal_bimbingan
        );
    }
}

===== app\Models\WaliMurid.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class WaliMurid extends Model
{
    use HasFactory;

    protected $table = 'wali_murid';

    protected $fillable = [
        'siswa_id',
        'nama',
        'nomor_telepon',
    ];

    // Relasi: Satu wali murid dimiliki oleh satu siswa
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'wali_id');
    }
}

```


## Views & UI Files Content
```
===== resources\views\admin\guru\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Tambah Data Guru Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('admin.guru.store') }}" method="POST">
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Guru</h3>
                        </div>

                        <div>
                            <x-input-label for="nama" :value="__('Nama Lengkap (beserta gelar)')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>

                        <div>
                            <x-input-label for="nip" :value="__('NIP (Nomor Induk Pegawai)')" />
                            <x-text-input id="nip" name="nip" type="text" class="mt-1 block w-full" :value="old('nip')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nip')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan') }}
                        </x-primary-button>
                        <a href="{{ route('admin.guru.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\guru\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Data Guru: ') . $guru->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('admin.guru.update', $guru->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Guru</h3>
                        </div>

                        <div>
                            <x-input-label for="nama" :value="__('Nama Lengkap (beserta gelar)')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama', $guru->nama)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>

                        <div>
                            <x-input-label for="nip" :value="__('NIP (Nomor Induk Pegawai)')" />
                            <x-text-input id="nip" name="nip" type="text" class="mt-1 block w-full" :value="old('nip', $guru->nip)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nip')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update') }}
                        </x-primary-button>
                        <a href="{{ route('admin.guru.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\guru\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Data Master Guru') }}
            </h2>
            <a href="{{ route('admin.guru.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                Tambah Guru
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <form action="{{ route('admin.guru.index') }}" method="GET" class="mb-6">
                        <div class="flex items-center gap-4">
                            <div class="flex-grow">
                                <x-text-input id="search" type="text" name="search" class="w-full" :value="$request->search" placeholder="Cari Nama atau NIP..."/>
                            </div>
                            <x-primary-button type="submit" class="bg-teal-600 hover:bg-teal-500">Cari</x-primary-button>
                            @if($request->filled('search'))
                                <a href="{{ route('admin.guru.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset</a>
                            @endif
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif
                     @if (session('error'))
                        <div class="mb-4 p-4 bg-red-100 text-red-800 border border-red-300 rounded-lg">{{ session('error') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">NIP</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($guru as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $item->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->nip }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                            <a href="{{ route('admin.guru.edit', $item->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit</a>
                                            <form action="{{ route('admin.guru.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data guru ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-center text-slate-500">Tidak ada data guru ditemukan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($guru->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $guru->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\jadwal\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Verifikasi & Kelola Jadwal Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="border-b border-slate-200 pb-4 mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Semua Jadwal Bimbingan</h3>
                        <p class="mt-1 text-sm text-slate-500">Gunakan filter untuk meninjau jadwal bimbingan yang diajukan.</p>
                    </div>

                     <form id="filter-form" action="{{ route('admin.jadwal.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div>
                                <x-input-label for="search" :value="__('Cari Nama Siswa')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter..."/>
                            </div>
                             <div>
                                <x-input-label for="filter_kelas" :value="__('Filter Kelas')" />
                                <select name="filter_kelas" id="filter_kelas" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Kelas</option>
                                    @foreach($kelasFilter as $kelas)
                                        <option value="{{ $kelas }}" @selected($request->filter_kelas == $kelas)>{{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="filter_konselor" :value="__('Filter Konselor')" />
                                <select name="filter_konselor" id="filter_konselor" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Konselor</option>
                                    @foreach($konselorFilter as $konselor)
                                        <option value="{{ $konselor->id }}" @selected($request->filter_konselor == $konselor->id)>{{ $konselor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="filter_status" :value="__('Filter Status')" />
                                <select name="filter_status" id="filter_status" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Status</option>
                                    <option value="menunggu_verifikasi" @selected($request->filter_status == 'menunggu_verifikasi')>Menunggu Verifikasi</option>
                                    <option value="terverifikasi" @selected($request->filter_status == 'terverifikasi')>Terverifikasi</option>
                                    <option value="selesai" @selected($request->filter_status == 'selesai')>Selesai</option>
                                    <option value="dibatalkan" @selected($request->filter_status == 'dibatalkan')>Dibatalkan</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                             <div>
                                <x-input-label for="start_date" :value="__('Dari Tanggal')" />
                                <x-text-input id="start_date" type="date" name="start_date" class="filter-input w-full mt-1" :value="$request->start_date" />
                            </div>
                             <div>
                                <x-input-label for="end_date" :value="__('Sampai Tanggal')" />
                                <x-text-input id="end_date" type="date" name="end_date" class="filter-input w-full mt-1" :value="$request->end_date" />
                            </div>
                        </div>
                         <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('admin.jadwal.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Konselor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Jadwal Diajukan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($jadwal as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <div class="font-medium text-slate-900">{{ $item->siswa->nama }}</div>
                                            <div class="text-slate-500">{{ $item->siswa->kelas }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->konselor->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ \Carbon\Carbon::parse($item->tanggal_jadwal)->isoFormat('dddd, D MMM YYYY, HH:mm') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            @php
                                                $statusClass = [
                                                    'menunggu_verifikasi' => 'bg-amber-100 text-amber-800',
                                                    'terverifikasi' => 'bg-blue-100 text-blue-800',
                                                    'selesai' => 'bg-green-100 text-green-800',
                                                    'dibatalkan' => 'bg-red-100 text-red-800',
                                                ][$item->status] ?? 'bg-slate-100 text-slate-800';
                                            @endphp
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                {{ str_replace('_', ' ', Str::title($item->status)) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            @if($item->status == 'menunggu_verifikasi')
                                                <form action="{{ route('admin.jadwal.update', $item->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="terverifikasi">
                                                    <button type="submit" class="inline-block px-3 py-1 text-sm font-semibold text-green-600 bg-green-50 rounded-md hover:bg-green-100">Verifikasi</button>
                                                </form>
                                                <form action="{{ route('admin.jadwal.update', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin membatalkan jadwal ini?');">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="dibatalkan">
                                                    <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Batalkan</button>
                                                </form>
                                            @else
                                                <span class="text-xs text-slate-400">Tidak ada aksi</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-slate-500">Tidak ada jadwal yang cocok dengan filter.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     @if ($jadwal->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $jadwal->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('filter-form');
            const filters = form.querySelectorAll('.filter-input');

            filters.forEach(function (element) {
                element.addEventListener('change', function () {
                    form.submit();
                });
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\jenis-pelanggaran\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Tambah Jenis Pelanggaran Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-8">
                    <form action="{{ route('admin.jenis-pelanggaran.store') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="nama_pelanggaran" :value="__('Nama Pelanggaran')" />
                                <x-text-input id="nama_pelanggaran" name="nama_pelanggaran" type="text" class="mt-1 block w-full" :value="old('nama_pelanggaran')" required autofocus placeholder="Contoh: Terlambat masuk sekolah"/>
                                <x-input-error class="mt-2" :messages="$errors->get('nama_pelanggaran')" />
                            </div>

                            <div>
                                <x-input-label for="poin" :value="__('Poin Pelanggaran')" />
                                <x-text-input id="poin" name="poin" type="number" class="mt-1 block w-full" :value="old('poin')" required placeholder="Contoh: 5"/>
                                <x-input-error class="mt-2" :messages="$errors->get('poin')" />
                            </div>

                            <div class="flex items-center gap-4 border-t border-slate-200 pt-6">
                                <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                                    {{ __('Simpan Data') }}
                                </x-primary-button>
                                <a href="{{ route('admin.jenis-pelanggaran.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\jenis-pelanggaran\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Jenis Pelanggaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-8">
                    <form action="{{ route('admin.jenis-pelanggaran.update', $jenisPelanggaran->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="nama_pelanggaran" :value="__('Nama Pelanggaran')" />
                                <x-text-input id="nama_pelanggaran" name="nama_pelanggaran" type="text" class="mt-1 block w-full" :value="old('nama_pelanggaran', $jenisPelanggaran->nama_pelanggaran)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('nama_pelanggaran')" />
                            </div>

                            <div>
                                <x-input-label for="poin" :value="__('Poin Pelanggaran')" />
                                <x-text-input id="poin" name="poin" type="number" class="mt-1 block w-full" :value="old('poin', $jenisPelanggaran->poin)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('poin')" />
                            </div>

                            <div class="flex items-center gap-4 border-t border-slate-200 pt-6">
                                <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                                    {{ __('Update Data') }}
                                </x-primary-button>
                                <a href="{{ route('admin.jenis-pelanggaran.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\jenis-pelanggaran\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Manajemen Jenis Pelanggaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Pelanggaran</h3>
                        <a href="{{ route('admin.jenis-pelanggaran.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                            Tambah Data
                        </a>
                    </div>

                    <form id="filter-form" action="{{ route('admin.jenis-pelanggaran.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-2">
                                <x-input-label for="search" :value="__('Cari Nama Pelanggaran')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter untuk mencari..."/>
                            </div>
                            <div>
                                <x-input-label for="filter_poin" :value="__('Filter Kategori Poin')" />
                                <select name="filter_poin" id="filter_poin" class="filter-input w-full mt-1 border-slate-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">
                                    <option value="">Semua Kategori</option>
                                    <option value="ringan" @selected($request->filter_poin == 'ringan')>Ringan (1-25 Poin)</option>
                                    <option value="sedang" @selected($request->filter_poin == 'sedang')>Sedang (26-75 Poin)</option>
                                    <option value="berat" @selected($request->filter_poin == 'berat')>Berat (>75 Poin)</option>
                                </select>
                            </div>
                        </div>
                         <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('admin.jenis-pelanggaran.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Nama Pelanggaran</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Poin</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($pelanggaran as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $loop->iteration + $pelanggaran->firstItem() - 1 }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 font-medium">{{ $item->nama_pelanggaran }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold {{ $item->poin > 75 ? 'text-red-600' : ($item->poin > 25 ? 'text-amber-600' : 'text-slate-800') }}">
                                            {{ $item->poin }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.jenis-pelanggaran.edit', $item->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit</a>
                                            <form action="{{ route('admin.jenis-pelanggaran.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-slate-500">Tidak ada data yang cocok dengan filter.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($pelanggaran->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $pelanggaran->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('filter-form');
            const filters = form.querySelectorAll('.filter-input');

            filters.forEach(function (element) {
                element.addEventListener('change', function () {
                    form.submit();
                });
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\pengguna\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Tambah Pengguna Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-8">
                    <form action="{{ route('admin.pengguna.store') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="select-guru" :value="__('Pilih Guru (Ketik untuk mencari)')" />
                                {{-- ID baru ditambahkan di sini --}}
                                <select id="select-guru" name="guru_id" placeholder="Pilih guru..." required>
                                    <option value="">-- Pilih Guru --</option>
                                    @foreach($guru as $g)
                                        <option value="{{ $g->id }}">{{ $g->nama }} - (NIP: {{ $g->nip ?? 'Tidak ada' }})</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('guru_id')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="role" :value="__('Peran (Role)')" />
                                <select id="role" name="role" class="block mt-1 w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm" required>
                                    <option value="guru_bk">Guru BK</option>
                                    <option value="wali_kelas">Wali Kelas</option>
                                    <option value="kepala_sekolah">Kepala Sekolah</option>
                                    <option value="admin_bk">Admin BK</option>
                                    <option value="wakasek">Wakasek</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('role')" />
                            </div>

                            <div>
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('password')" />
                            </div>
                            
                            <div>
                                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" required />
                            </div>

                            <div class="flex items-center gap-4 border-t border-slate-200 pt-6">
                                <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                                    {{ __('Simpan Pengguna') }}
                                </x-primary-button>
                                <a href="{{ route('admin.pengguna.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new TomSelect('#select-guru',{
                create: false,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\pengguna\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Pengguna: ') . $pengguna->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-8">
                    <form action="{{ route('admin.pengguna.update', $pengguna->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="name" :value="__('Nama Pengguna')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $pengguna->name)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                    :value="old('email', $pengguna->email)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="role" :value="__('Peran (Role)')" />
                                <select id="role" name="role"
                                    class="block mt-1 w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm"
                                    required>
                                    <option value="guru_bk" @selected($pengguna->role == 'guru_bk')>Guru BK</option>
                                    <option value="wali_kelas" @selected($pengguna->role == 'wali_kelas')>Wali Kelas</option>
                                    <option value="kepala_sekolah" @selected($pengguna->role == 'kepala_sekolah')>Kepala Sekolah</option>
                                    <option value="admin_bk" @selected($pengguna->role == 'admin_bk')>Admin BK</option>
                                    <option value="orang_tua" @selected($pengguna->role == 'orang_tua')>Orang Tua</option>  
                                    <option value="wakasek" @selected($pengguna->role == 'wakasek')>Wakasek</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('role')" />
                            </div>

                            <div class="mt-4">
                                <p class="text-sm text-slate-500">Kosongkan password jika tidak ingin mengubahnya.</p>
                            </div>

                            <div>
                                <x-input-label for="password" :value="__('Password Baru')" />
                                <x-text-input id="password" name="password" type="password"
                                    class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('password')" />
                            </div>

                            <div>
                                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')" />
                                <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                    class="mt-1 block w-full" />
                            </div>

                            <div class="flex items-center gap-4 border-t border-slate-200 pt-6">
                                <x-primary-button
                                    class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                                    {{ __('Update Pengguna') }}
                                </x-primary-button>
                                <a href="{{ route('admin.pengguna.index') }}"
                                    class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\pengguna\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Manajemen Pengguna Sistem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Pengguna</h3>
                        <a href="{{ route('admin.pengguna.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                            Tambah Pengguna
                        </a>
                    </div>

                    <form id="filter-form" action="{{ route('admin.pengguna.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-2">
                                <x-input-label for="search" :value="__('Cari Nama / Email')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter untuk mencari..."/>
                            </div>
                            <div>
                                <x-input-label for="filter_role" :value="__('Filter Peran')" />
                                <select name="filter_role" id="filter_role" class="filter-input w-full mt-1 border-slate-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">
                                    <option value="">Semua Peran</option>
                                    <option value="admin_bk" @selected($request->filter_role == 'admin_bk')>Admin BK</option>
                                    <option value="guru_bk" @selected($request->filter_role == 'guru_bk')>Guru BK</option>
                                    <option value="wali_kelas" @selected($request->filter_role == 'wali_kelas')>Wali Kelas</option>
                                    <option value="kepala_sekolah" @selected($request->filter_role == 'kepala_sekolah')>Kepala Sekolah</option>
                                    <option value="wakasek" @selected($request->filter_role == 'wakasek')>Wakasek</option>
                                    <option value="orang_tua" @selected($request->filter_role == 'orang_tua')>Orang Tua</option>
                                </select>
                            </div>
                        </div>
                         <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('admin.pengguna.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="mb-4 p-4 bg-red-100 text-red-800 border border-red-300 rounded-lg">{{ session('error') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Peran</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @foreach ($pengguna as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $user->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $user->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ str_replace('_', ' ', Str::title($user->role)) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.pengguna.edit', $user->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit</a>
                                            <form action="{{ route('admin.pengguna.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus pengguna ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                     @if ($pengguna->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $pengguna->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('filter-form');
            const filters = form.querySelectorAll('.filter-input');

            filters.forEach(function (element) {
                element.addEventListener('change', function () {
                    form.submit();
                });
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Admin BK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-amber-500/10 border border-amber-500/20 text-amber-800 rounded-xl p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:border-amber-500/30">
                    <div>
                        <div class="flex items-center gap-4">
                            <div class="bg-amber-500/20 p-2 rounded-lg">
                                <svg class="h-6 w-6 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                            </div>
                            <p class="font-semibold">Jadwal Perlu Verifikasi</p>
                        </div>
                        <p class="mt-4 text-5xl font-bold">{{ $jadwalPerluVerifikasi }}</p>
                    </div>
                    <a href="#" class="mt-4 text-sm font-semibold hover:underline">Lihat Detail &rarr;</a>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 group transition-all duration-300 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <div class="bg-slate-100 group-hover:bg-teal-100 rounded-lg p-2 transition-colors duration-300">
                             <svg class="h-6 w-6 text-slate-500 group-hover:text-teal-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                        </div>
                        <p class="font-semibold text-slate-700">Jenis Pelanggaran</p>
                    </div>
                    <p class="mt-4 text-4xl font-bold text-slate-900">{{ $totalJenisPelanggaran }}</p>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 group transition-all duration-300 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <div class="bg-slate-100 group-hover:bg-teal-100 rounded-lg p-2 transition-colors duration-300">
                             <svg class="h-6 w-6 text-slate-500 group-hover:text-teal-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                        </div>
                        <p class="font-semibold text-slate-700">Total Siswa</p>
                    </div>
                    <p class="mt-4 text-4xl font-bold text-slate-900">{{ $totalSiswa }}</p>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 group transition-all duration-300 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <div class="bg-slate-100 group-hover:bg-teal-100 rounded-lg p-2 transition-colors duration-300">
                           <svg class="h-6 w-6 text-slate-500 group-hover:text-teal-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m-7.5-2.962a3.75 3.75 0 0 1 5.958 0m0 0a3.75 3.75 0 0 1-5.958 0M3 18.72a9.094 9.094 0 0 1 3.741-.479 3 3 0 0 1 4.682-2.72M12 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" /></svg>
                        </div>
                        <p class="font-semibold text-slate-700">Pengguna Sistem</p>
                    </div>
                    <p class="mt-4 text-4xl font-bold text-slate-900">{{ $totalPengguna }}</p>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1 bg-white p-6 shadow-sm sm:rounded-xl">
                    <h3 class="font-semibold text-slate-900 mb-4">Akses Cepat</h3>
                    <div class="space-y-3">
                        <a href="{{ route('admin.jenis-pelanggaran.create') }}" class="group flex items-center justify-between p-3 bg-slate-50 hover:bg-teal-50 rounded-lg transition-colors duration-200">
                            <span class="font-medium text-slate-700 group-hover:text-teal-800">Tambah Pelanggaran Baru</span>
                            <span class="text-slate-400 group-hover:text-teal-600">&rarr;</span>
                        </a>
                         <a href="{{ route('admin.pengguna.create') }}" class="group flex items-center justify-between p-3 bg-slate-50 hover:bg-teal-50 rounded-lg transition-colors duration-200">
                            <span class="font-medium text-slate-700 group-hover:text-teal-800">Tambah Pengguna Baru</span>
                            <span class="text-slate-400 group-hover:text-teal-600">&rarr;</span>
                        </a>
                        <a href="{{ route('admin.jenis-pelanggaran.index') }}" class="group flex items-center justify-between p-3 bg-slate-50 hover:bg-teal-50 rounded-lg transition-colors duration-200">
                            <span class="font-medium text-slate-700 group-hover:text-teal-800">Lihat Semua Pelanggaran</span>
                            <span class="text-slate-400 group-hover:text-teal-600">&rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 bg-white p-6 shadow-sm sm:rounded-xl">
                     <h3 class="font-semibold text-slate-900 mb-4">Jenis Pelanggaran Baru Ditambahkan</h3>
                     <ul class="divide-y divide-slate-200">
                        @forelse($pelanggaranTerbaru as $item)
                            <li class="py-3 flex justify-between items-center">
                                <span class="text-sm text-slate-700">{{ $item->nama_pelanggaran }}</span>
                                <span class="text-sm font-bold text-slate-800 bg-slate-100 px-2 py-1 rounded-md">{{ $item->poin }} Poin</span>
                            </li>
                        @empty
                            <li class="py-3 text-center text-sm text-slate-500">Belum ada data baru.</li>
                        @endforelse
                     </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\auth\confirm-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\forgot-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\login.blade.php =====
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-teal-600 shadow-sm focus:ring-teal-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-slate-600 hover:text-teal-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\register.blade.php =====
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-slate-600 hover:text-teal-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="{{ route('login') }}">

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\reset-password.blade.php =====
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\verify-email.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>

===== resources\views\components\application-logo.blade.php =====
<svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"/>
</svg>

===== resources\views\components\auth-session-status.blade.php =====
@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif

===== resources\views\components\danger-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\dropdown-link.blade.php =====
<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>{{ $slot }}</a>

===== resources\views\components\dropdown.blade.php =====
@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>

===== resources\views\components\input-error.blade.php =====
@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

===== resources\views\components\input-label.blade.php =====
@props(['value'])
<label {{ $attributes->merge(['class' => 'text-sm font-medium text-slate-700 font-inter']) }}>
    {{ $value ?? $slot }}
</label>

===== resources\views\components\modal.blade.php =====
@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }}
    </div>
</div>

===== resources\views\components\nav-link.blade.php =====
@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center gap-2 w-full px-4 py-2 rounded-lg bg-gray-200 text-gray-900 font-medium'
                : 'flex items-center gap-2 w-full px-4 py-2 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\primary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500 focus:bg-teal-700 active:bg-teal-900 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\responsive-nav-link.blade.php =====
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\secondary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\text-input.blade.php =====
@props(['disabled' => false])

<input @disabled($disabled) {!! $attributes->merge(['class' => 'border-slate-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm']) !!}>

===== resources\views\guru\jadwal\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Buat Jadwal Bimbingan Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.jadwal-bimbingan.store') }}" method="POST">
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Jadwal</h3>
                            <p class="mt-1 text-sm text-slate-500">Jadwal akan berstatus "Menunggu Verifikasi" setelah dibuat.</p>
                        </div>

                        <div>
                            <x-input-label for="select-siswa" :value="__('Pilih Siswa (Ketik untuk mencari)')" />
                            <select id="select-siswa" name="siswa_id" placeholder="Pilih siswa..." required>
                                <option value="">-- Pilih Siswa --</option>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id }}" {{ old('siswa_id', request('siswa_id')) == $s->id ? 'selected' : '' }}>{{ $s->nama }} (Kelas: {{ $s->kelas }})</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('siswa_id')" />
                        </div>
                        
                        <div>
                            <x-input-label for="tanggal_jadwal" :value="__('Tanggal dan Waktu Bimbingan')" />
                            <x-text-input id="tanggal_jadwal" name="tanggal_jadwal" type="datetime-local" class="mt-1 block w-full" :value="old('tanggal_jadwal')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal_jadwal')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan Jadwal') }}
                        </x-primary-button>
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new TomSelect('#select-siswa',{
                create: false,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\guru\jadwal\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Jadwal Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.jadwal-bimbingan.update', $jadwalBimbingan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Jadwal</h3>
                        </div>

                        <div>
                            <x-input-label for="siswa_id" :value="__('Siswa (Tidak dapat diubah)')" />
                            <x-text-input id="siswa_id" name="siswa_id_disabled" type="text" class="mt-1 block w-full bg-slate-100" :value="$jadwalBimbingan->siswa->nama . ' (Kelas: ' . $jadwalBimbingan->siswa->kelas . ')'" disabled />
                            <input type="hidden" name="siswa_id" value="{{ $jadwalBimbingan->siswa_id }}">
                        </div>
                        
                        <div>
                            <x-input-label for="tanggal_jadwal" :value="__('Tanggal dan Waktu Bimbingan')" />
                            <x-text-input id="tanggal_jadwal" name="tanggal_jadwal" type="datetime-local" class="mt-1 block w-full" :value="old('tanggal_jadwal', \Carbon\Carbon::parse($jadwalBimbingan->tanggal_jadwal)->format('Y-m-d\TH:i'))" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal_jadwal')" />
                        </div>
                        <div>
                            <x-input-label for="status" :value="__('Ubah Status Jadwal')" />
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                {{-- Menampilkan status saat ini jika bukan pilihan default --}}
                                @if(!in_array($jadwalBimbingan->status, ['selesai', 'dibatalkan']))
                                    <option value="{{ $jadwalBimbingan->status }}" selected disabled>
                                        {{ str_replace('_', ' ', Str::title($jadwalBimbingan->status)) }} (Status Saat Ini)
                                    </option>
                                @endif
                                
                                {{-- Loop untuk status yang diizinkan dari controller --}}
                                @foreach($statuses as $value => $label)
                                    <option value="{{ $value }}" @selected(old('status', $jadwalBimbingan->status) == $value)>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update Jadwal') }}
                        </x-primary-button>
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\jadwal\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Jadwal Bimbingan Konseling') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Jadwal Anda</h3>
                        <a href="{{ route('guru.jadwal-bimbingan.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                            Buat Jadwal Baru
                        </a>
                    </div>

                    <!-- Form Filter Lengkap -->
                    <form id="filter-form" action="{{ route('guru.jadwal-bimbingan.index') }}" method="GET"
                        class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <!-- Pencarian Nama -->
                            <div>
                                <x-input-label for="search" :value="__('Cari Nama Siswa')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1"
                                    :value="$request->search" placeholder="Tekan Enter..." />
                            </div>
                            <!-- Filter Kelas -->
                            <div>
                                <x-input-label for="filter_kelas" :value="__('Filter Kelas')" />
                                <select name="filter_kelas" id="filter_kelas"
                                    class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Kelas</option>
                                    @foreach ($kelasFilter as $kelas)
                                        <option value="{{ $kelas }}" @selected($request->filter_kelas == $kelas)>
                                            {{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Filter Status -->
                            <div>
                                <x-input-label for="filter_status" :value="__('Filter Status')" />
                                <select name="filter_status" id="filter_status"
                                    class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Status</option>
                                    <option value="menunggu_verifikasi" @selected($request->filter_status == 'menunggu_verifikasi')>Menunggu Verifikasi
                                    </option>
                                    <option value="terverifikasi" @selected($request->filter_status == 'terverifikasi')>Terverifikasi</option>
                                    <option value="selesai" @selected($request->filter_status == 'selesai')>Selesai</option>
                                    <option value="dibatalkan" @selected($request->filter_status == 'dibatalkan')>Dibatalkan</option>
                                </select>
                            </div>
                            <!-- Spacer -->
                            <div></div>
                        </div>
                        <!-- Filter Tanggal -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                            <div>
                                <x-input-label for="start_date" :value="__('Dari Tanggal')" />
                                <x-text-input id="start_date" type="date" name="start_date"
                                    class="filter-input w-full mt-1" :value="$request->start_date" />
                            </div>
                            <div>
                                <x-input-label for="end_date" :value="__('Sampai Tanggal')" />
                                <x-text-input id="end_date" type="date" name="end_date"
                                    class="filter-input w-full mt-1" :value="$request->end_date" />
                            </div>
                        </div>
                        <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('guru.jadwal-bimbingan.index') }}"
                                class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>


                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                            {{ session('success') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Siswa
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal
                                        & Waktu</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Status
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($jadwal as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">
                                            {{ $item->siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">
                                            {{ \Carbon\Carbon::parse($item->tanggal_jadwal)->isoFormat('dddd, D MMMM YYYY, HH:mm') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            @php
                                                $statusClass =
                                                    [
                                                        'menunggu_verifikasi' => 'bg-amber-100 text-amber-800',
                                                        'terverifikasi' => 'bg-blue-100 text-blue-800',
                                                        'selesai' => 'bg-green-100 text-green-800',
                                                        'dibatalkan' => 'bg-red-100 text-red-800',
                                                    ][$item->status] ?? 'bg-slate-100 text-slate-800';
                                            @endphp
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                {{ str_replace('_', ' ', Str::title($item->status)) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            @if ($item->laporan)
                                                <a href="{{ route('guru.laporan.show', $item->laporan->id) }}"
                                                    class="inline-block px-3 py-1 text-sm font-semibold text-green-600 bg-green-50 rounded-md hover:bg-green-100">Lihat
                                                    Laporan</a>
                                            @elseif(in_array($item->status, ['terverifikasi', 'selesai']))
                                                <a href="{{ route('guru.laporan.create', $item->id) }}"
                                                    class="inline-block px-3 py-1 text-sm font-semibold text-blue-600 bg-blue-50 rounded-md hover:bg-blue-100">Buat
                                                    Laporan</a>
                                            @endif
                                            @if ($item->status !== 'selesai')
                                                <a href="{{ route('guru.jadwal-bimbingan.edit', $item->id) }}"
                                                    class="ml-2 inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit
                                                    Jadwal</a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-slate-500">Tidak ada jadwal
                                            yang cocok dengan filter.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($jadwal->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $jadwal->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('filter-form');
                const filters = form.querySelectorAll('.filter-input');

                filters.forEach(function(element) {
                    element.addEventListener('change', function() {
                        // Langsung submit form setiap kali ada perubahan, tanpa pengecualian.
                        form.submit();
                    });
                });
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\guru\laporan\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Buat Laporan Bimbingan untuk ' . $jadwal->siswa->nama) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">

                {{-- ================= AWAL MODIFIKASI ================= --}}
                <form action="{{ route('guru.laporan.store', $jadwal->id) }}" method="POST"
                      x-data='{
                          templates: @json($templateSurat),
                          errors: @js($errors->any() ? $errors->toArray() : (object)[]), // Gunakan object kosong jika tidak ada error
                          selectedTemplate: "{{ old('jenis_surat') }}",

                          isFieldVisible(fieldKey) {
                              for (const templateKey of this.selectedTemplates) {
                                  if (this.templates[templateKey]?.fields[fieldKey]) { return true; }
                              } return false;
                          },
                          isFieldRequired(fieldKey) {
                               for (const templateKey of this.selectedTemplates) {
                                  if (this.templates[templateKey]?.fields[fieldKey]?.required) { return true; }
                              } return false;
                          },
                          getFieldDetails(fieldKey) {
                              for (const templateKey of this.selectedTemplates) {
                                   if (this.templates[templateKey]?.fields[fieldKey]) {
                                      return this.templates[templateKey]?.fields[fieldKey];
                                  }
                              } return { label: "", type: "text", required: false };
                          },
                          selectedTemplates: @js(old('jenis_surat', []))
                      }'>
                {{-- ================= AKHIR MODIFIKASI ================= --}}
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Laporan</h3>
                            <p class="mt-1 text-sm text-slate-500">Pilih satu atau lebih jenis surat yang akan dibuat. Formulir akan menyesuaikan.</p>
                        </div>

                        <div>
                            <x-input-label :value="__('Pilih Jenis Surat/Laporan')" />
                             <div class="mt-2 space-y-2">
                                @foreach ($templateSurat as $key => $config)
                                <label class="flex items-center">
                                    <input type="checkbox" name="jenis_surat[]" value="{{ $key }}" x-model="selectedTemplates" class="rounded border-gray-300 text-teal-600 shadow-sm focus:ring-teal-500">
                                    <span class="ms-2 text-sm text-gray-600">{{ $config['label'] }}</span>
                                </label>
                                @endforeach
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_surat')" />
                             <x-input-error class="mt-2" :messages="$errors->get('jenis_surat.*')" />
                        </div>


                        {{-- FORM DINAMIS --}}
                        <div x-show="selectedTemplates.length > 0" class="space-y-6 border-t border-slate-200 pt-6">
                            <h4 class="text-md font-medium text-slate-700">Input Tambahan (jika diperlukan)</h4>

                             @php
                                $allPossibleFields = [];
                                foreach ($templateSurat as $config) {
                                    foreach ($config['fields'] as $key => $fieldConfig) {
                                        if (!isset($allPossibleFields[$key])) {
                                            $allPossibleFields[$key] = $fieldConfig;
                                        }
                                    }
                                }
                            @endphp

                            @foreach ($allPossibleFields as $key => $field)
                                <template x-if="isFieldVisible('{{ $key }}')">
                                    <div class="transition-all">
                                        <x-input-label x-text="getFieldDetails('{{ $key }}').label" for="{{ $key }}" />

                                        @if ($field['type'] === 'textarea')
                                            <textarea id="{{ $key }}" name="{{ $key }}" rows="7" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" x-bind:required="isFieldRequired('{{ $key }}')" placeholder="{{ $field['placeholder'] ?? '' }}">{{ old($key) }}</textarea>
                                        @elseif ($field['type'] === 'select')
                                            <select id="{{ $key }}" name="{{ $key }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" x-bind:required="isFieldRequired('{{ $key }}')">
                                                 <option value="">-- Pilih --</option>
                                                 @foreach($field['options'] as $optionValue => $optionLabel)
                                                     <option value="{{ $optionValue }}" @selected(old($key) == $optionValue)>{{ $optionLabel }}</option>
                                                 @endforeach
                                            </select>
                                        @else
                                            <x-text-input id="{{ $key }}" name="{{ $key }}" type="{{ $field['type'] }}" class="mt-1 block w-full" x-bind:required="isFieldRequired('{{ $key }}')" placeholder="{{ $field['placeholder'] ?? '' }}" value="{{ old($key, $field['value'] ?? '') }}" />
                                        @endif

                                        <div x-show="errors['{{ $key }}']" class="text-sm text-red-600 mt-2" x-text="errors['{{ $key }}']?.[0]"></div>
                                    </div>
                                </template>
                            @endforeach
                        </div>

                        <div class="border-t border-slate-200 pt-6 space-y-6">
                            <div>
                                <x-input-label for="isi_laporan" :value="__('Isi Laporan Tambahan (Opsional)')" />
                                <textarea id="isi_laporan" name="isi_laporan" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('isi_laporan') }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('isi_laporan')" />
                            </div>

                            <div>
                                <x-input-label for="rencana_tindak_lanjut" :value="__('Rencana Tindak Lanjut (Opsional)')" />
                                <textarea id="rencana_tindak_lanjut" name="rencana_tindak_lanjut" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('rencana_tindak_lanjut') }}</textarea>
                                 <x-input-error class="mt-2" :messages="$errors->get('rencana_tindak_lanjut')" />
                            </div>
                        </div>

                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan & Buat Surat') }}
                        </x-primary-button>
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\laporan\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.laporan.update', $laporanBimbingan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Sesi Konseling</h3>
                            <div class="mt-2 text-sm text-slate-600 space-y-1">
                                <p><span class="font-semibold">Siswa:</span> {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}</p>
                                <p><span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($laporanBimbingan->jadwalBimbingan->tanggal_jadwal)->isoFormat('dddd, D MMMM YYYY') }}</p>
                            </div>
                        </div>
                        
                        <div>
                            <x-input-label for="isi_laporan" :value="__('Isi Laporan / Hasil Konseling')" />
                            <textarea id="isi_laporan" name="isi_laporan" rows="8" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('isi_laporan', $laporanBimbingan->isi_laporan) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('isi_laporan')" />
                        </div>
                        
                        <div>
                            <x-input-label for="rencana_tindak_lanjut" :value="__('Rencana Tindak Lanjut (Opsional)')" />
                            <textarea id="rencana_tindak_lanjut" name="rencana_tindak_lanjut" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('rencana_tindak_lanjut', $laporanBimbingan->rencana_tindak_lanjut) }}</textarea>
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update Laporan') }}
                        </x-primary-button>
                        <a href="{{ route('guru.laporan.show', $laporanBimbingan->id) }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\laporan\individu.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Kasus Individu') }}
            </h2>
            <a href="{{ route('guru.laporan.siswa.pdf', $siswa->id) }}" 
               class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
                Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Data Siswa --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-100">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Data Siswa</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-slate-700">
                    <div><span class="font-medium">Nama:</span> {{ $siswa->nama }}</div>
                    <div><span class="font-medium">NIS:</span> {{ $siswa->nis }}</div>
                    <div><span class="font-medium">Kelas:</span> {{ $siswa->kelas }}</div>
                    <div><span class="font-medium">Total Poin Pelanggaran:</span> 
                        <span class="text-red-600 font-semibold">{{ $siswa->totalPoin() }} poin</span>
                    </div>
                </div>
            </div>

            {{-- Riwayat Pelanggaran --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-100">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Riwayat Pelanggaran</h3>
                @if ($siswa->pelanggaran->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada pelanggaran tercatat.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-slate-200 rounded-lg">
                            <thead class="bg-slate-50 text-slate-700">
                                <tr>
                                    <th class="px-4 py-2 text-left text-sm font-semibold">Tanggal</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold">Jenis Pelanggaran</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold">Poin</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold">Catatan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($siswa->pelanggaran as $pel)
                                    <tr class="hover:bg-slate-50">
                                        <td class="px-4 py-2 text-sm">{{ \Carbon\Carbon::parse($pel->tanggal_pelanggaran)->format('d M Y') }}</td>
                                        <td class="px-4 py-2 text-sm">{{ $pel->jenisPelanggaran->nama_pelanggaran }}</td>
                                        <td class="px-4 py-2 text-sm text-red-600 font-semibold">{{ $pel->jenisPelanggaran->poin }}</td>
                                        <td class="px-4 py-2 text-sm">{{ $pel->catatan ?? '-' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            {{-- Riwayat Bimbingan Konseling --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-100">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Riwayat Bimbingan Konseling</h3>
                @if ($siswa->laporanBimbingan->isEmpty())
                    <p class="text-slate-500 italic">Belum ada laporan bimbingan.</p>
                @else
                    <div class="space-y-4">
                        @foreach ($siswa->laporanBimbingan->sortByDesc('created_at') as $lap)
                            <div class="border border-slate-200 rounded-lg p-4 hover:shadow-sm transition">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm text-slate-500 mb-1">
                                            {{ \Carbon\Carbon::parse($lap->created_at)->translatedFormat('d F Y') }}
                                        </p>
                                        <p class="text-slate-800 font-medium">{{ Str::limit($lap->isi_laporan, 150) }}</p>
                                        @if($lap->rencana_tindak_lanjut)
                                            <p class="text-slate-500 text-sm mt-1">
                                                <span class="font-semibold text-slate-600">Tindak Lanjut:</span> 
                                                {{ Str::limit($lap->rencana_tindak_lanjut, 100) }}
                                            </p>
                                        @endif
                                    </div>
                                    @if($lap->jenis_surat)
                                        <span class="text-xs bg-indigo-50 text-indigo-700 px-2 py-1 rounded-md border border-indigo-100">
                                            {{ $lap->jenis_surat }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>

===== resources\views\guru\laporan\intervensi.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Intervensi & Tindak Lanjut') }}
            </h2>
            <a href="{{ route('guru.laporan.intervensi.pdf', request()->all()) }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
               Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <form method="GET" action="{{ route('guru.laporan.intervensi') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Awal</label>
                        <input type="date" name="periode_awal" value="{{ request('periode_awal') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Akhir</label>
                        <input type="date" name="periode_akhir" value="{{ request('periode_akhir') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Status</label>
                        <select name="status" class="w-full rounded-md border-slate-300 text-sm">
                            <option value="">Semua</option>
                            <option value="sudah" {{ request('status') == 'sudah' ? 'selected' : '' }}>Sudah Ditindaklanjuti</option>
                            <option value="belum" {{ request('status') == 'belum' ? 'selected' : '' }}>Belum Ditindaklanjuti</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Data --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Data Intervensi</h3>

                @if ($data->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada data intervensi pada periode ini.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-slate-200 text-sm">
                            <thead class="bg-slate-50 text-slate-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">Tanggal</th>
                                    <th class="px-4 py-2 text-left">Siswa</th>
                                    <th class="px-4 py-2 text-left">Guru BK</th>
                                    <th class="px-4 py-2 text-left">Status</th>
                                    <th class="px-4 py-2 text-left">Catatan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($data as $item)
                                    <tr class="hover:bg-slate-50">
                                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($item->tanggal_jadwal)->translatedFormat('d F Y') }}</td>
                                        <td class="px-4 py-2">{{ $item->siswa->nama }}</td>
                                        <td class="px-4 py-2">{{ $item->guru->name ?? '-' }}</td>
                                        <td class="px-4 py-2">
                                            @if ($item->laporanBimbingan->isNotEmpty())
                                                <span class="text-green-700 font-medium">Sudah</span>
                                            @else
                                                <span class="text-red-700 font-medium">Belum</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2">
                                            {{ $item->laporanBimbingan->first()->rencana_tindak_lanjut ?? '-' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\laporan\kolektif.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Kasus Kolektif') }}
            </h2>
            <a href="{{ route('guru.laporan.kolektif.pdf', request()->all()) }}" 
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
                Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter --}}
            <div class="bg-white p-6 rounded-xl shadow border border-slate-200">
                <form method="GET" action="{{ route('guru.laporan.kolektif') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Jenis Kasus</label>
                        <select name="jenis_kasus" class="w-full rounded-md border-slate-300 text-sm">
                            <option value="">Semua</option>
                            @foreach ($daftarJenis as $jenis)
                                <option value="{{ $jenis->nama_pelanggaran }}" {{ request('jenis_kasus') == $jenis->nama_pelanggaran ? 'selected' : '' }}>
                                    {{ $jenis->nama_pelanggaran }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Kelas</label>
                        <input type="text" name="kelas" value="{{ request('kelas') }}" class="w-full rounded-md border-slate-300 text-sm" placeholder="Misal: X IPA 2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Awal</label>
                        <input type="date" name="periode_awal" value="{{ request('periode_awal') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Akhir</label>
                        <input type="date" name="periode_akhir" value="{{ request('periode_akhir') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>

                    <div class="md:col-span-4 flex justify-end mt-3">
                        <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Hasil Laporan --}}
            <div class="bg-white p-6 rounded-xl shadow border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Hasil Rekapitulasi</h3>

                @if ($data->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada data pelanggaran untuk filter yang dipilih.</p>
                @else
                    @foreach ($data as $jenis => $list)
                        <div class="mb-6">
                            <h4 class="text-md font-semibold text-indigo-700 mb-2">{{ $jenis }}</h4>
                            <table class="min-w-full border border-slate-200 text-sm">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-3 py-2 text-left">Nama Siswa</th>
                                        <th class="px-3 py-2 text-left">Kelas</th>
                                        <th class="px-3 py-2 text-left">Tanggal</th>
                                        <th class="px-3 py-2 text-left">Catatan</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200">
                                    @foreach ($list as $item)
                                        <tr class="hover:bg-slate-50">
                                            <td class="px-3 py-2">{{ $item->siswa->nama }}</td>
                                            <td class="px-3 py-2">{{ $item->siswa->kelas }}</td>
                                            <td class="px-3 py-2">{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->translatedFormat('d F Y') }}</td>
                                            <td class="px-3 py-2">{{ $item->catatan ?? '-' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
</x-app-layout>

===== resources\views\guru\laporan\pdf.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bimbingan Konseling</title>
    <style>
        body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 12px; line-height: 1.6; color: #333; }
        .header { text-align: center; margin-bottom: 40px; }
        .header h1 { margin: 0; font-size: 18px; }
        .header p { margin: 0; font-size: 14px; }
        .content-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .content-table th, .content-table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .content-table th { background-color: #f2f2f2; font-weight: bold; }
        .section { margin-bottom: 20px; }
        .section h2 { font-size: 14px; border-bottom: 1px solid #ccc; padding-bottom: 5px; margin-bottom: 10px; }
        .section p { white-space: pre-wrap; }
        .footer { margin-top: 50px; text-align: right; }
    </style>
</head>
<body>
    <div class="header">
        <h1>LAPORAN BIMBINGAN KONSELING</h1>
        <p>SMAN 1 GORONTALO</p>
    </div>

    <table class="content-table">
        <tr>
            <th style="width: 25%;">Nama Siswa</th>
            <td>{{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ $laporanBimbingan->jadwalBimbingan->siswa->kelas }}</td>
        </tr>
        <tr>
            <th>Tanggal Bimbingan</th>
            <td>{{ \Carbon\Carbon::parse($laporanBimbingan->jadwalBimbingan->tanggal_jadwal)->isoFormat('dddd, D MMMM YYYY') }}</td>
        </tr>
        <tr>
            <th>Konselor</th>
            <td>{{ $laporanBimbingan->dibuatOleh->name }}</td>
        </tr>
    </table>

    <div class="section">
        <h2>Hasil Konseling</h2>
        <p>{{ $laporanBimbingan->isi_laporan }}</p>
    </div>

    @if($laporanBimbingan->rencana_tindak_lanjut)
    <div class="section">
        <h2>Rencana Tindak Lanjut</h2>
        <p>{{ $laporanBimbingan->rencana_tindak_lanjut }}</p>
    </div>
    @endif

    <div class="footer">
        <p>Gorontalo, {{ \Carbon\Carbon::now()->isoFormat('D MMMM YYYY') }}</p>
        <br><br><br>
        <p>{{ $laporanBimbingan->dibuatOleh->name }}</p>
    </div>
</body>
</html>

===== resources\views\guru\laporan\show.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-2xl overflow-hidden">
                <div class="p-8 space-y-10">

                    {{-- HEADER --}}
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 pb-6 border-b border-slate-200">
                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">
                                Laporan untuk {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}
                            </h3>
                            <p class="text-sm text-slate-500 mt-1">
                                Dibuat oleh
                                <span class="font-medium text-slate-700">{{ $laporanBimbingan->pembuat->name }}</span>
                                â€¢ {{ $laporanBimbingan->created_at->isoFormat('dddd, D MMMM YYYY') }}
                            </p>
                        </div>
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}"
                           class="inline-flex items-center gap-1 text-sm font-medium text-teal-600 hover:text-teal-800 transition">
                            â† Kembali ke Daftar Jadwal
                        </a>
                    </div>

                    {{-- HIGHLIGHT: DOKUMEN --}}
                    <div class="bg-gradient-to-r from-teal-500 to-sky-500 text-white rounded-xl shadow-lg p-6">
                        <h4 class="text-base font-semibold uppercase tracking-wide mb-4">Dokumen Dihasilkan</h4>

                        @if ($laporanBimbingan->dokumen->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach($laporanBimbingan->dokumen as $dokumen)
                                    <li class="flex items-center justify-between bg-white/20 rounded-lg px-4 py-2">
                                        <span class="text-sm font-medium">{{ str_replace('_', ' ', Str::title($dokumen->jenis_surat)) }}</span>
                                        <a href="{{ Storage::url($dokumen->file_path) }}"
                                           class="inline-flex items-center px-3 py-1 bg-white text-teal-700 rounded-md text-xs font-semibold hover:bg-slate-100 transition"
                                           download>
                                            Unduh (.docx)
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-white/80 italic">Tidak ada dokumen.</p>
                        @endif
                    </div>

                    {{-- GRID DETAIL --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        {{-- Kiri: Tindak Lanjut --}}
                        <div class="md:col-span-1 space-y-6">
                            <div class="bg-slate-50 rounded-lg p-5 border border-slate-200">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">
                                    Rencana Tindak Lanjut
                                </h4>
                                <p class="text-sm text-slate-800 leading-relaxed">
                                    {!! nl2br(e($laporanBimbingan->rencana_tindak_lanjut ?: '-')) !!}
                                </p>
                            </div>
                        </div>

                        {{-- Kanan: Isi Laporan --}}
                        <div class="md:col-span-2">
                            <div class="bg-slate-50 rounded-lg p-6 border border-slate-200 h-full">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-3">
                                    Isi Laporan Tambahan
                                </h4>
                                <div class="text-slate-800 leading-relaxed prose prose-sm max-w-none">
                                    {!! nl2br(e($laporanBimbingan->isi_laporan ?: '-')) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\pelanggaran\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Catat Pelanggaran Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                 <form action="{{ route('guru.pelanggaran-siswa.store') }}" method="POST">
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Kejadian</h3>
                            <p class="mt-1 text-sm text-slate-500">Pilih siswa dan jenis pelanggaran yang dilakukan.</p>
                        </div>

                        <div>
                            <x-input-label for="select-siswa" :value="__('Pilih Siswa (Ketik untuk mencari)')" />
                            {{-- ID baru ditambahkan di sini --}}
                            <select id="select-siswa" name="siswa_id" placeholder="Pilih siswa..." required>
                                <option value="">-- Pilih Siswa --</option>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id }}" {{ old('siswa_id') == $s->id ? 'selected' : '' }}>{{ $s->nama }} (Kelas: {{ $s->kelas }})</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('siswa_id')" />
                        </div>

                        <div>
                            <x-input-label for="select-pelanggaran" :value="__('Jenis Pelanggaran (Ketik untuk mencari)')" />
                             {{-- ID baru ditambahkan di sini --}}
                            <select id="select-pelanggaran" name="jenis_pelanggaran_id" placeholder="Pilih pelanggaran..." required>
                                <option value="">-- Pilih Jenis Pelanggaran --</option>
                                @foreach($jenisPelanggaran as $jp)
                                    <option value="{{ $jp->id }}" {{ old('jenis_pelanggaran_id') == $jp->id ? 'selected' : '' }}>{{ $jp->nama_pelanggaran }} ({{$jp->poin}} Poin)</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_pelanggaran_id')" />
                        </div>

                        <div>
                            <x-input-label for="catatan" :value="__('Catatan Tambahan (Opsional)')" />
                            <textarea id="catatan" name="catatan" rows="4" class="mt-1 block w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">{{ old('catatan') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('catatan')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan Catatan') }}
                        </x-primary-button>
                        <a href="{{ route('guru.pelanggaran-siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new TomSelect('#select-siswa',{
                create: false,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });

            new TomSelect('#select-pelanggaran',{
                create: false,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\guru\pelanggaran\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Catatan Pelanggaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                 <form action="{{ route('guru.pelanggaran-siswa.update', $pelanggaranSiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Kejadian</h3>
                        </div>
                        
                        <div>
                            <x-input-label for="siswa_id" :value="__('Siswa')" />
                            <select id="siswa_id" name="siswa_id" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id }}" @selected(old('siswa_id', $pelanggaranSiswa->siswa_id) == $s->id)>{{ $s->nama }} (Kelas: {{ $s->kelas }})</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('siswa_id')" />
                        </div>
                        
                        <div>
                            <x-input-label for="jenis_pelanggaran_id" :value="__('Jenis Pelanggaran')" />
                            <select id="jenis_pelanggaran_id" name="jenis_pelanggaran_id" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                @foreach($jenisPelanggaran as $jp)
                                    <option value="{{ $jp->id }}" @selected(old('jenis_pelanggaran_id', $pelanggaranSiswa->jenis_pelanggaran_id) == $jp->id)>{{ $jp->nama_pelanggaran }} ({{$jp->poin}} Poin)</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_pelanggaran_id')" />
                        </div>

                        <div>
                            <x-input-label for="catatan" :value="__('Catatan Tambahan (Opsional)')" />
                            <textarea id="catatan" name="catatan" rows="4" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('catatan', $pelanggaranSiswa->catatan) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('catatan')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update Catatan') }}
                        </x-primary-button>
                        <a href="{{ route('guru.pelanggaran-siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\pelanggaran\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Riwayat Pelanggaran Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Data Pelanggaran Tercatat</h3>
                        <a href="{{ route('guru.pelanggaran-siswa.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                            Catat Pelanggaran
                        </a>
                    </div>

                    <form id="filter-form" action="{{ route('guru.pelanggaran-siswa.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div>
                                <x-input-label for="search" :value="__('Cari Nama Siswa')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter..."/>
                            </div>
                            <div>
                                <x-input-label for="filter_kelas" :value="__('Filter Kelas')" />
                                <select name="filter_kelas" id="filter_kelas" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Kelas</option>
                                    @foreach($kelasFilter as $kelas)
                                        <option value="{{ $kelas }}" @selected($request->filter_kelas == $kelas)>{{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div>
                                <x-input-label for="filter_jenis_pelanggaran" :value="__('Filter Pelanggaran')" />
                                <select name="filter_jenis_pelanggaran" id="filter_jenis_pelanggaran" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Jenis</option>
                                    @foreach($jenisPelanggaranFilter as $jp)
                                        <option value="{{ $jp->id }}" @selected($request->filter_jenis_pelanggaran == $jp->id)>{{ $jp->nama_pelanggaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="filter_siswa" :value="__('Filter Siswa Tertentu')" />
                                <select name="filter_siswa" id="filter_siswa" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Siswa</option>
                                    @foreach($siswaFilter as $siswa)
                                        <option value="{{ $siswa->id }}" @selected($request->filter_siswa == $siswa->id)>{{ $siswa->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                             <div>
                                <x-input-label for="start_date" :value="__('Dari Tanggal')" />
                                <x-text-input id="start_date" type="date" name="start_date" class="filter-input w-full mt-1" :value="$request->start_date" />
                            </div>
                             <div>
                                <x-input-label for="end_date" :value="__('Sampai Tanggal')" />
                                <x-text-input id="end_date" type="date" name="end_date" class="filter-input w-full mt-1" :value="$request->end_date" />
                            </div>
                        </div>

                         <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('guru.pelanggaran-siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    {{-- Sisa kode tabel tidak berubah --}}
                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif
                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Kelas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Jenis Pelanggaran</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($pelanggaranSiswa as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $item->siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->siswa->kelas }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->jenisPelanggaran->nama_pelanggaran }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->isoFormat('D MMM YYYY, HH:mm') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('guru.pelanggaran-siswa.edit', $item->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit</a>
                                            <form action="{{ route('guru.pelanggaran-siswa.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus catatan pelanggaran ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-slate-500">Tidak ada data yang cocok dengan filter.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     @if ($pelanggaranSiswa->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $pelanggaranSiswa->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('filter-form');
            const filters = form.querySelectorAll('.filter-input');

            filters.forEach(function (element) {
                element.addEventListener('change', function () {
                    // Hanya submit jika value tidak kosong (untuk tanggal)
                    if (this.value !== '') {
                        form.submit();
                    }
                });
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\guru\siswa\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Tambah Data Siswa Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.siswa.store') }}" method="POST">
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Informasi Siswa</h3>
                            <p class="mt-1 text-sm text-slate-500">Masukkan detail data diri siswa.</p>
                        </div>
                        
                        <div>
                            <x-input-label for="nama" :value="__('Nama Lengkap Siswa')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>
                        <div>
                            <x-input-label for="nis" :value="__('NIS (Nomor Induk Siswa)')" />
                            <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" :value="old('nis')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nis')" />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                             <div>
                                <x-input-label for="kelas" :value="__('Kelas')" />
                                <x-text-input id="kelas" name="kelas" type="text" class="mt-1 block w-full" :value="old('kelas')" required placeholder="Contoh: XII IPA 1" />
                                <x-input-error class="mt-2" :messages="$errors->get('kelas')" />
                            </div>
                            <div>
                                <x-input-label for="wali_kelas_id" :value="__('Pilih Wali Kelas')" />
                                <select id="wali_kelas_id" name="wali_kelas_id" class="mt-1 block w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm" required>
                                    <option value="">-- Pilih Wali --</option>
                                    @foreach($waliKelasList as $user)
                                        <option value="{{ $user->guru->id }}" {{ old('wali_kelas_id') == $user->guru->id ? 'selected' : '' }}>{{ $user->guru->nama }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('wali_kelas_id')" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-8 space-y-6 border-t border-slate-200">
                         <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Informasi & Akun Wali Murid</h3>
                            <p class="mt-1 text-sm text-slate-500">Data ini akan digunakan untuk membuat akun login bagi wali murid.</p>
                        </div>
                         <div>
                            <x-input-label for="nama_wali" :value="__('Nama Lengkap Wali')" />
                            <x-text-input id="nama_wali" name="nama_wali" type="text" class="mt-1 block w-full" :value="old('nama_wali')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_wali')" />
                        </div>
                        <div>
                            <x-input-label for="email_wali" :value="__('Email Wali (untuk login)')" />
                            <x-text-input id="email_wali" name="email_wali" type="email" class="mt-1 block w-full" :value="old('email_wali')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('email_wali')" />
                        </div>
                        <div>
                            <x-input-label for="nomor_telepon_wali" :value="__('Nomor Telepon Wali (Opsional)')" />
                            <x-text-input id="nomor_telepon_wali" name="nomor_telepon_wali" type="text" class="mt-1 block w-full" :value="old('nomor_telepon_wali')" />
                            <x-input-error class="mt-2" :messages="$errors->get('nomor_telepon_wali')" />
                        </div>
                        <p class="text-xs text-slate-500">Password default untuk akun wali murid adalah "password". Wali murid dapat mengubahnya nanti.</p>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan Data Siswa') }}
                        </x-primary-button>
                        <a href="{{ route('guru.siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\siswa\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Data Siswa: ') . $siswa->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium text-slate-900">Informasi Siswa</h3>
                        </div>
                        
                        <div>
                            <x-input-label for="nama" :value="__('Nama Lengkap Siswa')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama', $siswa->nama)" required />
                        </div>
                        <div>
                            <x-input-label for="nis" :value="__('NIS (Nomor Induk Siswa)')" />
                            <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" :value="old('nis', $siswa->nis)" required />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                             <div>
                                <x-input-label for="kelas" :value="__('Kelas')" />
                                <x-text-input id="kelas" name="kelas" type="text" class="mt-1 block w-full" :value="old('kelas', $siswa->kelas)" required />
                            </div>
                            <div>
                                <x-input-label for="wali_kelas_id" :value="__('Wali Kelas')" />
                                <select id="wali_kelas_id" name="wali_kelas_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                    @foreach($waliKelasList as $user)
                                        <option value="{{ $user->guru->id }}" @selected(old('wali_kelas_id', $siswa->wali_kelas_id) == $user->guru->id)>{{ $user->guru->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-8 space-y-6 border-t border-slate-200">
                         <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium text-slate-900">Informasi & Akun Wali Murid</h3>
                        </div>
                         <div>
                            <x-input-label for="nama_wali" :value="__('Nama Lengkap Wali')" />
                            <x-text-input id="nama_wali" name="nama_wali" type="text" class="mt-1 block w-full" :value="old('nama_wali', $siswa->waliMurid->nama)" required />
                        </div>
                        <div>
                            <x-input-label for="email_wali" :value="__('Email Wali (untuk login)')" />
                            <x-text-input id="email_wali" name="email_wali" type="email" class="mt-1 block w-full" :value="old('email_wali', $siswa->waliMurid->user->email)" required />
                        </div>
                        <div>
                            <x-input-label for="nomor_telepon_wali" :value="__('Nomor Telepon Wali (Opsional)')" />
                            <x-text-input id="nomor_telepon_wali" name="nomor_telepon_wali" type="text" class="mt-1 block w-full" :value="old('nomor_telepon_wali', $siswa->waliMurid->nomor_telepon)" />
                        </div>
                        <div class="mt-6 border-t border-slate-200 pt-6">
                            <p class="text-sm text-slate-500 mb-4">Kosongkan password jika tidak ingin mengubahnya.</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label for="password" :value="__('Password Baru Wali')" />
                                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" />
                                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                                </div>
                                <div>
                                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')" />
                                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update Data Siswa') }}
                        </x-primary-button>
                        <a href="{{ route('guru.siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\siswa\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Manajemen Data Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Siswa</h3>
                        <a href="{{ route('guru.siswa.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                            Tambah Siswa
                        </a>
                    </div>

                    <form id="filter-form" action="{{ route('guru.siswa.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="md:col-span-2">
                                <x-input-label for="search" :value="__('Cari Nama / NIS')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter untuk mencari..."/>
                            </div>
                            <div>
                                <x-input-label for="filter_kelas" :value="__('Filter Kelas')" />
                                <select name="filter_kelas" id="filter_kelas" class="filter-input w-full mt-1 border-slate-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">
                                    <option value="">Semua Kelas</option>
                                    @foreach($kelasFilter as $kelas)
                                        <option value="{{ $kelas }}" @selected($request->filter_kelas == $kelas)>{{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="filter_wali_kelas" :value="__('Filter Wali Kelas')" />
                                <select name="filter_wali_kelas" id="filter_wali_kelas" class="filter-input w-full mt-1 border-slate-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">
                                    <option value="">Semua Wali Kelas</option>
                                    @foreach($waliKelasFilter as $wali)
                                        <option value="{{ $wali->id }}" @selected($request->filter_wali_kelas == $wali->id)>{{ $wali->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 mt-4">
                            {{-- Tombol Terapkan Filter sudah tidak diperlukan --}}
                            <a href="{{ route('guru.siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    {{-- ... (sisa kode tabel tetap sama) ... --}}

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">NIS</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Kelas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Wali Kelas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Laporan Individu</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($siswa as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $item->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->nis }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->kelas }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->waliKelas->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('guru.siswa.show', $item->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-blue-600 bg-blue-50 rounded-md hover:bg-blue-100">Detail</a>
                                            <a href="{{ route('guru.siswa.edit', $item->id) }}" class="ml-2 inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit</a>
                                            <form action="{{ route('guru.siswa.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus data siswa ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                            </form>
                                        </td>
                                        <td class="px-4 py-2">
                                            <a href="{{ route('guru.laporan.siswa', $item->id) }}" 
                                               class="bg-indigo-600 text-white px-3 py-1 rounded text-sm hover:bg-indigo-700">
                                               Laporan Individu
                                            </a>
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-slate-500">
                                            Tidak ada siswa yang cocok dengan kriteria filter.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     @if ($siswa->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $siswa->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('filter-form');
            const filters = form.querySelectorAll('.filter-input');

            filters.forEach(function (element) {
                element.addEventListener('change', function () {
                    form.submit();
                });
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\guru\siswa\show.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800">
                {{ __('Detail Siswa: ') . $siswa->nama }}
            </h2>
            <a href="{{ route('guru.siswa.index') }}"
                class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali</a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

                {{-- Kolom Kiri --}}
                <div class="space-y-5">
                    {{-- Profil --}}
                    <div class="bg-white shadow-sm rounded-lg p-5">
                        <h3 class="text-base font-semibold text-slate-700 border-b pb-3">Profil Siswa</h3>
                        <div class="mt-3 space-y-1 text-sm">
                            <p><span class="text-slate-500">Nama:</span> {{ $siswa->nama }}</p>
                            <p><span class="text-slate-500">NIS:</span> {{ $siswa->nis }}</p>
                            <p><span class="text-slate-500">Kelas:</span> {{ $siswa->kelas }}</p>
                            <p><span class="text-slate-500">Wali Kelas:</span> {{ $siswa->waliKelas->nama }}</p>
                        </div>
                    </div>

                    {{-- Aksi + Poin --}}
                    <div class="bg-white shadow-sm rounded-lg p-5">
                        <h3 class="text-base font-semibold text-slate-700 border-b pb-3">Aksi Cepat & Poin</h3>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-sm">
                            <div class="space-y-2">
                                <a href="{{ route('guru.pelanggaran-siswa.create', ['siswa_id' => $siswa->id]) }}"
                                    class="block w-full px-3 py-2 text-center bg-red-50 text-red-700 rounded hover:bg-red-100">Catat
                                    Pelanggaran</a>
                                <a href="{{ route('guru.jadwal-bimbingan.create', ['siswa_id' => $siswa->id]) }}"
                                    class="block w-full px-3 py-2 text-center bg-blue-50 text-blue-700 rounded hover:bg-blue-100">Buat
                                    Jadwal Bimbingan</a>
                                @if ($siswa->waliMurid && $siswa->waliMurid->nomor_telepon)
                                    @php
                                        $wa = preg_replace('/^0/', '62', $siswa->waliMurid->nomor_telepon);
                                        $pesan = urlencode(
                                            'Halo Bapak/Ibu ' .
                                                $siswa->waliMurid->nama .
                                                ', perihal siswa' .
                                                $siswa->nama .
                                                '.',
                                        );
                                    @endphp
                                    <a href="https://wa.me/{{ $wa }}?text={{ $pesan }}" target="_blank"
                                        class="block w-full px-3 py-2 text-center bg-green-50 text-green-700 rounded hover:bg-green-100">Hubungi
                                        Ortu (WA)</a>
                                @else
                                    <p class="text-xs text-center text-slate-400 italic">Nomor ortu tidak tersedia.</p>
                                @endif
                            </div>
                            <div class="flex flex-col items-center justify-center bg-slate-50 rounded p-4">
                                <p class="text-xs text-slate-500">Total Poin</p>
                                <p
                                    class="mt-1 text-4xl font-bold {{ $siswa->totalPoin() > 50 ? 'text-red-500' : 'text-teal-600' }}">
                                    {{ $siswa->totalPoin() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan --}}
                <div class="lg:col-span-2">
                    <div class="bg-white shadow-sm rounded-lg p-5">
                        <h3 class="text-base font-semibold text-slate-700 border-b pb-3 mb-3">Riwayat Pelanggaran</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left font-medium text-slate-500 uppercase">Pelanggaran
                                        </th>
                                        <th class="px-4 py-2 text-left font-medium text-slate-500 uppercase">Poin</th>
                                        <th class="px-4 py-2 text-left font-medium text-slate-500 uppercase">Tanggal
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200">
                                    @forelse ($siswa->pelanggaran as $pelanggaran)
                                        <tr>
                                            <td class="px-4 py-2 text-slate-800">
                                                {{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                            <td class="px-4 py-2 font-bold text-slate-800">
                                                {{ $pelanggaran->jenisPelanggaran->poin }}</td>
                                            <td class="px-4 py-2 text-slate-500">
                                                {{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-4 py-3 text-center text-slate-500">Tidak ada
                                                riwayat pelanggaran.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\guru\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Guru BK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-slate-900 mb-4">Jadwal Bimbingan Terdekat</h3>
                        <div class="space-y-4">
                            @forelse ($jadwalAkanDatang as $jadwal)
                                <div class="p-4 bg-slate-50 rounded-lg">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <p class="font-semibold text-teal-700">{{ $jadwal->siswa->nama }}</p>
                                            <p class="text-sm text-slate-500">{{ $jadwal->siswa->kelas }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-medium text-slate-800">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('dddd, D MMM') }}</p>
                                            <p class="text-xs text-slate-500">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('HH:mm') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center text-sm text-slate-500 py-4">Tidak ada jadwal terverifikasi yang akan datang.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-slate-900 mb-4">Siswa dengan Poin Pelanggaran Tertinggi</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="border-b border-slate-200">
                                    <tr>
                                        <th class="py-2 text-left text-xs font-semibold text-slate-500 uppercase">Nama Siswa</th>
                                        <th class="py-2 text-left text-xs font-semibold text-slate-500 uppercase">Kelas</th>
                                        <th class="py-2 text-center text-xs font-semibold text-slate-500 uppercase">Total Poin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($siswaPoinTertinggi as $siswa)
                                        <tr class="border-b border-slate-100">
                                            <td class="py-3 text-sm font-medium text-slate-800">{{ $siswa->nama }}</td>
                                            <td class="py-3 text-sm text-slate-500">{{ $siswa->kelas }}</td>
                                            <td class="py-3 text-sm font-bold text-center {{ $siswa->total_poin > 50 ? 'text-red-500' : 'text-slate-800' }}">{{ $siswa->total_poin }}</td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="3" class="py-3 text-center text-sm text-slate-500">Data pelanggaran masih kosong.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\kepsek\laporan\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Semua Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    
                    {{-- ================= AWAL PERUBAHAN ================= --}}
                    <form id="filter-form" action="{{ route('kepsek.laporan.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div>
                                <x-input-label for="search" :value="__('Cari Nama Siswa')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter..."/>
                            </div>
                            <div>
                                <x-input-label for="filter_konselor" :value="__('Filter Konselor')" />
                                <select name="filter_konselor" id="filter_konselor" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Konselor</option>
                                    @foreach($konselorFilter as $konselor)
                                        <option value="{{ $konselor->id }}" @selected($request->filter_konselor == $konselor->id)>{{ $konselor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="filter_kelas" :value="__('Filter Kelas')" />
                                <select name="filter_kelas" id="filter_kelas" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Kelas</option>
                                    @foreach($kelasFilter as $kelas)
                                        <option value="{{ $kelas }}" @selected($request->filter_kelas == $kelas)>{{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                             <div>
                                <x-input-label for="start_date" :value="__('Dari Tanggal')" />
                                <x-text-input id="start_date" type="date" name="start_date" class="filter-input w-full mt-1" :value="$request->start_date" />
                            </div>
                             <div>
                                <x-input-label for="end_date" :value="__('Sampai Tanggal')" />
                                <x-text-input id="end_date" type="date" name="end_date" class="filter-input w-full mt-1" :value="$request->end_date" />
                            </div>
                        </div>
                         <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('kepsek.laporan.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>
                    {{-- ================= AKHIR PERUBAHAN ================= --}}


                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal Laporan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Dibuat Oleh</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($laporan as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $item->jadwalBimbingan->siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->created_at->isoFormat('D MMM YYYY') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $item->pembuat->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('kepsek.laporan.show', $item->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">
                                                Lihat Detail
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-slate-500">Tidak ada data laporan ditemukan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     @if ($laporan->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $laporan->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    {{-- SCRIPT UNTUK AUTO-SUBMIT FILTER --}}
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('filter-form');
            const filters = form.querySelectorAll('.filter-input');
    
            filters.forEach(function (element) {
                element.addEventListener('change', function () {
                    form.submit();
                });
            });
        });
    </script>
    @endpush

</x-app-layout>

===== resources\views\kepsek\laporan\kinerja.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Kinerja Guru BK') }}
            </h2>
            <a href="{{ route('kepsek.laporan.kinerja.pdf', request()->all()) }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
               Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <form method="GET" action="{{ route('kepsek.laporan.kinerja') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Awal</label>
                        <input type="date" name="periode_awal" value="{{ request('periode_awal') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Akhir</label>
                        <input type="date" name="periode_akhir" value="{{ request('periode_akhir') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Data --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                @if ($guruBk->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada data guru BK.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-slate-200 text-sm">
                            <thead class="bg-slate-50 text-slate-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">Nama Guru BK</th>
                                    <th class="px-4 py-2 text-left">Jumlah Jadwal Konseling</th>
                                    <th class="px-4 py-2 text-left">Jumlah Laporan Konseling</th>
                                    <th class="px-4 py-2 text-left">Jenis Kasus Ditangani</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($guruBk as $row)
                                    <tr class="hover:bg-slate-50">
                                        <td class="px-4 py-2">{{ $row['nama'] }}</td>
                                        <td class="px-4 py-2">{{ $row['total_jadwal'] }}</td>
                                        <td class="px-4 py-2">{{ $row['total_laporan'] }}</td>
                                        <td class="px-4 py-2">{{ $row['jenis_kasus'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\kepsek\laporan\show.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-2xl overflow-hidden">
                <div class="p-8 space-y-10">

                    {{-- HEADER (Mengikuti layout guru.laporan.show) --}}
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 pb-6 border-b border-slate-200">
                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">
                                Laporan untuk {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}
                            </h3>
                            <p class="text-sm text-slate-500 mt-1">
                                Dibuat oleh
                                <span class="font-medium text-slate-700">{{ $laporanBimbingan->pembuat->name }}</span>
                                â€¢ {{ $laporanBimbingan->created_at->isoFormat('dddd, D MMMM YYYY') }}
                            </p>
                        </div>
                        {{-- Sesuaikan rute kembali ke daftar laporan Kepala Sekolah --}}
                        <a href="{{ route('kepsek.laporan.index') }}"
                           class="inline-flex items-center gap-1 text-sm font-medium text-teal-600 hover:text-teal-800 transition">
                            â† Kembali ke Daftar Laporan
                        </a>
                    </div>

                    {{-- HIGHLIGHT: DOKUMEN (Mengikuti layout guru.laporan.show) --}}
                    <div class="bg-gradient-to-r from-teal-500 to-sky-500 text-white rounded-xl shadow-lg p-6">
                        <h4 class="text-base font-semibold uppercase tracking-wide mb-4">Dokumen Dihasilkan</h4>

                        @if ($laporanBimbingan->dokumen->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach($laporanBimbingan->dokumen as $dokumen)
                                    <li class="flex items-center justify-between bg-white/20 rounded-lg px-4 py-2">
                                        <span class="text-sm font-medium">{{ str_replace('_', ' ', Str::title($dokumen->jenis_surat)) }}</span>
                                        <a href="{{ Storage::url($dokumen->file_path) }}"
                                           class="inline-flex items-center px-3 py-1 bg-white text-teal-700 rounded-md text-xs font-semibold hover:bg-slate-100 transition"
                                           download>
                                            Unduh (.docx)
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-white/80 italic">Tidak ada dokumen terkait laporan ini.</p>
                        @endif
                    </div>

                    {{-- GRID DETAIL (Mengikuti layout guru.laporan.show) --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        {{-- Kiri: Tindak Lanjut --}}
                        <div class="md:col-span-1 space-y-6">
                            <div class="bg-slate-50 rounded-lg p-5 border border-slate-200">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">
                                    Rencana Tindak Lanjut
                                </h4>
                                <p class="text-sm text-slate-800 leading-relaxed">
                                    {!! nl2br(e($laporanBimbingan->rencana_tindak_lanjut ?: '-')) !!}
                                </p>
                            </div>
                        </div>

                        {{-- Kanan: Isi Laporan --}}
                        <div class="md:col-span-2">
                            <div class="bg-slate-50 rounded-lg p-6 border border-slate-200 h-full">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-3">
                                    Isi Laporan Tambahan
                                </h4>
                                <div class="text-slate-800 leading-relaxed prose prose-sm max-w-none">
                                    {!! nl2br(e($laporanBimbingan->isi_laporan ?: '-')) !!}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\kepsek\laporan\statistik.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Tren & Statistik Sekolah') }}
            </h2>
            <a href="{{ route('kepsek.laporan.statistik.pdf', ['tahun' => $tahun]) }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
               Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter Tahun --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <form method="GET" action="{{ route('kepsek.laporan.statistik') }}" class="flex flex-wrap items-end gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Tahun</label>
                        <input type="number" name="tahun" value="{{ $tahun }}" class="rounded-md border-slate-300 text-sm w-32">
                    </div>
                    <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                        Tampilkan
                    </button>
                </form>
            </div>

            {{-- Statistik --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200 text-center">
                    <h3 class="text-slate-500 text-sm mb-2">Efektivitas Penanganan</h3>
                    <p class="text-3xl font-bold text-indigo-600">{{ $efektivitas }}%</p>
                </div>
            </div>

            {{-- Grafik Tren --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-700 mb-4">Tren Kasus per Bulan ({{ $tahun }})</h3>
                <canvas id="chartKasusBulanan" height="100"></canvas>
            </div>

            {{-- Jenis Pelanggaran --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-700 mb-4">5 Jenis Pelanggaran Terbanyak</h3>
                <table class="min-w-full border border-slate-200 text-sm">
                    <thead class="bg-slate-50 text-slate-700">
                        <tr>
                            <th class="px-4 py-2 text-left">Jenis Pelanggaran</th>
                            <th class="px-4 py-2 text-left">Jumlah Kasus</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @foreach ($jenisKasus as $jk)
                            <tr>
                                <td class="px-4 py-2">{{ $jk->nama_pelanggaran }}</td>
                                <td class="px-4 py-2">{{ $jk->total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Chart.js --}}
    @php
    // Ubah Collection jadi array agar bisa dipakai di JS
    $kasusArray = $kasusBulanan->toArray();
@endphp

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartKasusBulanan').getContext('2d');

    // Data dari backend (sudah jadi array)
    const dataKasus = @json(array_values($kasusArray));
    const labelBulan = @json(array_map(
        fn($b) => \Carbon\Carbon::create()->month($b)->translatedFormat('F'),
        array_keys($kasusArray)
    ));

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labelBulan,
            datasets: [{
                label: 'Jumlah Kasus',
                data: dataKasus,
                borderColor: '#4f46e5',
                tension: 0.3,
                fill: false
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>

</x-app-layout>

===== resources\views\kepsek\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard Pimpinan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <h3 class="text-lg font-medium text-slate-900">Selamat Datang, {{ Auth::user()->name }}!</h3>
                <p class="text-sm text-slate-500">Berikut adalah ringkasan statistik dari sistem Bimbingan Konseling.</p>
            </div>

            {{-- ================= AWAL MODIFIKASI ================= --}}
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <div class="flex flex-wrap justify-between items-center mb-4">
                                <h3 class="text-lg font-medium text-slate-900">Tren Pelanggaran Siswa</h3>
                                <form id="filter-form" action="{{ route('kepsek.dashboard') }}" method="GET" class="flex items-center gap-4">
                                    <select name="tahun" onchange="this.form.submit()" class="filter-input border-slate-300 rounded-md shadow-sm text-sm focus:border-teal-500 focus:ring-teal-500">
                                        @forelse($availableYears as $year)
                                            <option value="{{ $year }}" @selected($year == $selectedYear)>Tahun {{ $year }}</option>
                                        @empty
                                            <option>{{ date('Y') }}</option>
                                        @endforelse
                                    </select>
                                    <select name="semester" onchange="this.form.submit()" class="filter-input border-slate-300 rounded-md shadow-sm text-sm focus:border-teal-500 focus:ring-teal-500">
                                        <option value="">Semua Semester</option>
                                        <option value="1" @selected($selectedSemester == 1)>Semester 1 (Jan-Jun)</option>
                                        <option value="2" @selected($selectedSemester == 2)>Semester 2 (Jul-Des)</option>
                                    </select>
                                </form>
                            </div>
                            <div id="chart" class="w-full"></div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1 space-y-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-4">
                            <p class="text-xs font-medium text-slate-500 truncate">Total Siswa</p>
                            <p class="mt-1 text-2xl font-semibold text-slate-900">{{ $stats['total_siswa'] }}</p>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-4">
                            <p class="text-xs font-medium text-slate-500 truncate">Total Pelanggaran</p>
                            <p class="mt-1 text-2xl font-semibold text-slate-900">{{ $stats['total_pelanggaran'] }}</p>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-4">
                            <p class="text-xs font-medium text-slate-500 truncate">Laporan Selesai</p>
                            <p class="mt-1 text-2xl font-semibold text-slate-900">{{ $stats['total_laporan'] }}</p>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-4">
                            <p class="text-xs font-medium text-slate-500 truncate">Jadwal Aktif</p>
                            <p class="mt-1 text-2xl font-semibold text-slate-900">{{ $stats['jadwal_aktif'] }}</p>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-base font-medium text-slate-900 mb-4">Siswa Poin Tertinggi</h3>
                            <ul class="space-y-3">
                                @forelse ($highPointStudents as $siswa)
                                <li class="flex items-center justify-between text-sm">
                                    <div>
                                        <p class="font-semibold text-slate-800">{{ $siswa->nama }}</p>
                                        <p class="text-xs text-slate-500">{{ $siswa->kelas }}</p>
                                    </div>
                                    <span class="font-bold text-red-500">{{ $siswa->total_poin ?? 0 }} Poin</span>
                                </li>
                                @empty
                                <p class="text-sm text-slate-500 text-center">Tidak ada data pelanggaran.</p>
                                @endforelse
                            </ul>
                        </div>
                    </div>

                     <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-base font-medium text-slate-900 mb-4">Laporan Terbaru</h3>
                             <ul class="space-y-3">
                                @forelse ($recentReports as $laporan)
                                <li class="text-sm">
                                     <a href="{{ route('kepsek.laporan.show', $laporan->id) }}" class="font-semibold text-teal-600 hover:underline">Laporan untuk {{ $laporan->jadwalBimbingan->siswa->nama }}</a>
                                     <p class="text-xs text-slate-500">{{ $laporan->created_at->diffForHumans() }}</p>
                                </li>
                                @empty
                                <p class="text-sm text-slate-500 text-center">Belum ada laporan yang dibuat.</p>
                                @endforelse
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            {{-- ================= AKHIR MODIFIKASI ================= --}}
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var options = {
                series: [{
                    name: 'Jumlah Pelanggaran',
                    data: @json($chartData)
                }],
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar: { show: false },
                    zoom: { enabled: false }
                },
                colors: ['#0d9488'],
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth' },
                xaxis: {
                    categories: @json($labels),
                    labels: {
                        style: {
                            colors: '#64748b',
                            fontSize: '12px',
                        },
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#64748b',
                            fontSize: '12px',
                        },
                         formatter: function (val) {
                            return Math.floor(val);
                        }
                    },
                },
                grid: {
                    borderColor: '#e2e8f0',
                    strokeDashArray: 4,
                },
                tooltip: {
                    x: {
                        format: 'MMMM'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\layouts\app.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body x-data="{ sidebarOpen: false }" class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 z-30 bg-white border-r border-gray-200 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:z-auto">
            @include('layouts.navigation')
        </div>

        <!-- Overlay -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" x-cloak
            class="fixed inset-0 bg-black bg-opacity-25 z-20 md:hidden"></div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col w-full">

            <!-- Mobile topbar -->
            <header class="bg-white border-b px-4 py-3 flex items-center justify-between md:hidden relative">
                <!-- Tombol hamburger -->
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Judul di tengah -->
                <div class="absolute left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                    {{ config('app.name', 'MY APP') }}
                </div>
            </header>


            <!-- Optional header (desktop only) -->
            @isset($header)
                <header class="bg-white shadow hidden md:block">
                    <div class="px-6 py-7">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>


    @if (session('success') || session('error') || session('info'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                @if (session('success'))
                    Toast.fire({
                        icon: 'success',
                        title: '{{ session('success') }}'
                    });
                @endif

                @if (session('error'))
                    Toast.fire({
                        icon: 'error',
                        title: '{{ session('error') }}'
                    });
                @endif

                @if (session('info'))
                    Toast.fire({
                        icon: 'info',
                        title: '{{ session('info') }}'
                    });
                @endif
            });
        </script>
    @endif
    @stack('scripts')
</body>

</html>

===== resources\views\layouts\guest.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-g">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-100">
            <div class="mb-6">
                <a href="/" class="flex items-center gap-3">
                    <svg class="w-10 h-10 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.375a6.375 6.375 0 0 0 6.375-6.375a6.375 6.375 0 0 0-6.375-6.375a6.375 6.375 0 0 0-6.375 6.375a6.375 6.375 0 0 0 6.375 6.375Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75h.008v.008H12v-.008Z" />
                    </svg>
                    <span class="text-2xl font-bold text-slate-800">BK SMANSA</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

===== resources\views\layouts\navigation.blade.php =====
<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
            <svg class="w-8 h-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 18.375a6.375 6.375 0 0 0 6.375-6.375a6.375 6.375 0 0 0-6.375-6.375a6.375 6.375 0 0 0-6.375 6.375a6.375 6.375 0 0 0 6.375 6.375Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75h.008v.008H12v-.008Z" />
            </svg>
            <span class="text-xl font-bold text-gray-800">BK SMANSA</span>
        </a>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">

        {{-- Tombol Dasbor Umum --}}
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('*dashboard')">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            {{ __('Dashboard') }}
        </x-nav-link>

        {{-- MENU KHUSUS ADMIN BK --}}
        @if (Auth::user()->role == 'admin_bk')
            <x-nav-link :href="route('admin.jenis-pelanggaran.index')" :active="request()->routeIs('admin.jenis-pelanggaran.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                {{ __('Jenis Pelanggaran') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.pengguna.index')" :active="request()->routeIs('admin.pengguna.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372m-10.5-.372a9.369 9.369 0 0 1 2.625-.372M12 21a9.75 9.75 0 0 1-8.25-4.5m16.5 4.5a9.75 9.75 0 0 0-8.25-4.5m-8.25 4.5A9.75 9.75 0 0 1 12 3m0 18a9.75 9.75 0 0 0 8.25-4.5M3.75 4.5a9.75 9.75 0 0 1 8.25-4.5m0 18a9.75 9.75 0 0 1-8.25-4.5m16.5-4.5a9.75 9.75 0 0 0-8.25-4.5m-8.25 4.5A9.75 9.75 0 0 1 12 3m0 18a9.75 9.75 0 0 0-8.25-4.5M3.75 4.5a9.75 9.75 0 0 1 8.25-4.5" />
                </svg>
                {{ __('Pengguna Sistem') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.guru.index')" :active="request()->routeIs('admin.guru.*')">
                {{-- Tambahkan SVG ikon Guru/User jika ada --}}
                {{ __('Data Guru') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.jadwal.index')" :active="request()->routeIs('admin.jadwal.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                {{ __('Verifikasi Jadwal') }}
            </x-nav-link>
        @endif

        {{-- MENU KHUSUS GURU BK --}}
        @if (Auth::user()->role == 'guru_bk')
            <x-nav-link :href="route('guru.siswa.index')" :active="request()->routeIs('guru.siswa.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                {{ __('Data Siswa') }}
            </x-nav-link>

            <x-nav-link :href="route('guru.pelanggaran-siswa.index')" :active="request()->routeIs('guru.pelanggaran-siswa.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75a3.375 3.375 0 0 1 6 0v1.5a3.375 3.375 0 0 1-6 0v-1.5a.375.375 0 0 0-.75 0V12m-9 3.75a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Z" />
                </svg>
                {{ __('Catat Pelanggaran') }}
            </x-nav-link>
            <x-nav-link href="{{ route('guru.laporan.kolektif') }}" :active="request()->routeIs('guru.laporan.kolektif*')">
                Laporan Kolektif
            </x-nav-link>
            <x-nav-link href="{{ route('guru.laporan.intervensi') }}" :active="request()->routeIs('guru.laporan.intervensi*')">
                Laporan Intervensi & Tindak Lanjut
            </x-nav-link>

            <x-nav-link :href="route('guru.jadwal-bimbingan.index')" :active="request()->routeIs('guru.jadwal-bimbingan.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0h18M12 15.75h.008v.008H12v-.008Z" />
                </svg>
                {{ __('Jadwal Bimbingan') }}
            </x-nav-link>
        @endif

        @if (Auth::user()->role === 'wali_kelas')
            <x-nav-link href="{{ route('walikelas.laporan.kelas') }}" :active="request()->routeIs('walikelas.laporan.kelas*')">
                Laporan Kelas
            </x-nav-link>
        @endif


        {{-- MENU KHUSUS KEPALA SEKOLAH --}}
        @if (Auth::user()->role == 'kepala_sekolah' || Auth::user()->role == 'wakasek')
            <x-nav-link href="{{ route('kepsek.laporan.index') }}" :active="request()->routeIs('kepsek.laporan.index')">
                {{ __('Laporan Bimbingan') }}
            </x-nav-link>

            <x-nav-link href="{{ route('kepsek.laporan.kinerja') }}" :active="request()->routeIs('kepsek.laporan.kinerja*')">
                Laporan Kinerja Guru BK
            </x-nav-link>
            <x-nav-link href="{{ route('kepsek.laporan.statistik') }}" :active="request()->routeIs('kepsek.laporan.statistik*')">
                Laporan Tren & Statistik Sekolah
            </x-nav-link>
            
        @endif

    </nav>

    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</aside>

===== resources\views\ortu\laporan\show.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-2xl overflow-hidden">
                <div class="p-8 space-y-10">

                    
                    {{-- HEADER (Mengikuti layout guru.laporan.show) --}}
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 pb-6 border-b border-slate-200">
                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">
                                Laporan untuk {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}
                            </h3>
                            <p class="text-sm text-slate-500 mt-1">
                                Dibuat oleh
                                <span class="font-medium text-slate-700">{{ $laporanBimbingan->pembuat->name }}</span>
                                â€¢ {{ $laporanBimbingan->created_at->isoFormat('dddd, D MMMM YYYY') }}
                            </p>
                        </div>
                        <a href="{{ route('ortu.dashboard') }}"
                           class="inline-flex items-center gap-1 text-sm font-medium text-teal-600 hover:text-teal-800 transition">
                            â† Kembali ke Dasbor
                        </a>
                    </div>

                    {{-- HIGHLIGHT: DOKUMEN (Mengikuti layout guru.laporan.show) --}}
                    <div class="bg-gradient-to-r from-teal-500 to-sky-500 text-white rounded-xl shadow-lg p-6">
                        <h4 class="text-base font-semibold uppercase tracking-wide mb-4">Dokumen Terkait</h4>

                        @if ($laporanBimbingan->dokumen->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach($laporanBimbingan->dokumen as $dokumen)
                                    <li class="flex items-center justify-between bg-white/20 rounded-lg px-4 py-2">
                                        <span class="text-sm font-medium">{{ str_replace('_', ' ', Str::title($dokumen->jenis_surat)) }}</span>
                                        <a href="{{ Storage::url($dokumen->file_path) }}"
                                           class="inline-flex items-center px-3 py-1 bg-white text-teal-700 rounded-md text-xs font-semibold hover:bg-slate-100 transition"
                                           download>
                                            Unduh (.docx)
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-white/80 italic">Tidak ada dokumen terkait laporan ini.</p>
                        @endif
                    </div>

                    {{-- GRID DETAIL (Mengikuti layout guru.laporan.show) --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        {{-- Kiri: Tindak Lanjut --}}
                        <div class="md:col-span-1 space-y-6">
                            <div class="bg-slate-50 rounded-lg p-5 border border-slate-200">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">
                                    Rencana Tindak Lanjut
                                </h4>
                                <p class="text-sm text-slate-800 leading-relaxed">
                                    {!! nl2br(e($laporanBimbingan->rencana_tindak_lanjut ?: '-')) !!}
                                </p>
                            </div>
                        </div>

                        {{-- Kanan: Isi Laporan --}}
                        <div class="md:col-span-2">
                            <div class="bg-slate-50 rounded-lg p-6 border border-slate-200 h-full">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-3">
                                    Isi Laporan Tambahan
                                </h4>
                                <div class="text-slate-800 leading-relaxed prose prose-sm max-w-none">
                                    {!! nl2br(e($laporanBimbingan->isi_laporan ?: '-')) !!}
                                </div>
                            </div>
                        </div>

                    </div>                     

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\ortu\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Orang Tua') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- ================= AWAL MODIFIKASI ================= --}}

            @if ($siswa)
                {{-- TAMPILAN NORMAL JIKA DATA SISWA DITEMUKAN --}}
                <div class="mb-6">
                    <h3 class="text-lg font-medium text-slate-900">Selamat Datang, {{ Auth::user()->name }}!</h3>
                    <p class="text-sm text-slate-500">Anda login sebagai orang tua/wali dari ananda {{ $siswa->nama }}.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                    <div class="lg:col-span-1 space-y-6">
                        
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                            <div class="p-6">
                                <h3 class="text-base font-medium text-slate-900 mb-4">Profil Ananda</h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-slate-500">Nama Lengkap</span>
                                        <span class="font-semibold text-slate-800">{{ $siswa->nama }}</span>
                                    </div>
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-slate-500">Kelas</span>
                                        <span class="font-semibold text-slate-800">{{ $siswa->kelas }}</span>
                                    </div>
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-slate-500">Total Poin</span>
                                        <span class="font-bold text-red-500">{{ $siswa->totalPoin() }} Poin</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                            <div class="p-6">
                                 <h3 class="text-base font-medium text-slate-900 mb-4">Wali Kelas</h3>
                                 <div class="flex items-center space-x-4">
                                     <div class="flex-shrink-0">
                                         <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center">
                                             <span class="text-lg font-bold text-slate-500">{{ substr($waliKelasUser->name, 0, 1) }}</span>
                                         </div>
                                     </div>
                                     <div class="flex-1 min-w-0">
                                         <p class="text-sm font-semibold text-slate-900 truncate">{{ $waliKelasUser->name }}</p>
                                         <p class="text-sm text-slate-500 truncate">Wali Kelas {{ $siswa->kelas }}</p>
                                     </div>
                                 </div>
                                 @if ($waliKelasUser->phone_number)
                                    @php
                                        $nomorWhatsapp = preg_replace('/^0/', '62', $waliKelasUser->phone_number);
                                        $pesan = urlencode("Selamat pagi/siang Bapak/Ibu " . $waliKelasUser->name . ", saya orang tua/wali dari ananda " . $siswa->nama . " kelas " . $siswa->kelas . ".");
                                    @endphp
                                    <a href="https://wa.me/{{ $nomorWhatsapp }}?text={{ $pesan }}" target="_blank" class="mt-4 w-full flex items-center justify-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.886-.001 2.269.654 4.512 1.907 6.346l-.315 1.149 1.182-.307zm4.913 5.422c-.078-.048-.272-.132-.39-.187-.118-.055-1.104-.543-1.275-.605-.171-.062-.297-.099-.424.099-.127.198-.483.606-.594.727-.11.123-.22.138-.418.048-.198-.09-.904-.335-1.72-1.062-.637-.577-1.05-1.29-1.175-1.511-.124-.22-.013-.344.088-.443.091-.091.203-.232.304-.345.102-.112.127-.198.19-.33.063-.132.034-.248-.015-.344-.05-.096-.424-1.016-.579-1.383-.153-.368-.307-.315-.424-.32-.112-.005-.246-.005-.368-.005-.122 0-.317.048-.484.247-.167.198-.636.619-.636 1.511 0 .893.652 1.758.742 1.878.09.123 1.273 1.936 3.08 2.735.419.19.742.298 1.002.383.478.152.923.129 1.262.078.384-.058 1.104-.455 1.258-.893.153-.438.153-.811.105-.893-.048-.083-.171-.132-.368-.247z"/></svg>
                                        <span>Hubungi via WhatsApp</span>
                                    </a>
                                 @else
                                    <p class="mt-4 text-xs text-center text-slate-400 italic">Nomor telepon wali kelas tidak tersedia.</p>
                                 @endif
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-2 space-y-6">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                            <div class="p-6">
                                <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-6">Riwayat Bimbingan Konseling</h3>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-slate-200">
                                        <thead class="bg-slate-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Status</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-slate-200">
                                            @forelse ($siswa->jadwalBimbingan as $jadwal)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">
                                                        {{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('D MMM YYYY') }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                        @php
                                                            $statusClass = [
                                                                'selesai' => 'bg-green-100 text-green-800',
                                                            ][$jadwal->status] ?? 'bg-slate-100 text-slate-800';
                                                        @endphp
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                            {{ str_replace('_', ' ', Str::title($jadwal->status)) }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        @if ($jadwal->laporan && $jadwal->status == 'selesai')
                                                            <a href="{{ route('ortu.laporan.show', $jadwal->laporan->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">
                                                                Lihat Laporan
                                                            </a>
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="px-6 py-4 text-center text-slate-500">Belum ada riwayat bimbingan.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                            <div class="p-6">
                                <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-6">Riwayat Pelanggaran Tercatat</h3>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-slate-200">
                                        <thead class="bg-slate-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Jenis Pelanggaran</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Poin</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Catatan</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-slate-200">
                                            @forelse ($siswa->pelanggaran as $pelanggaran)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">
                                                        {{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">
                                                        {{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-800">
                                                        {{ $pelanggaran->jenisPelanggaran->poin }}</td>
                                                    <td class="px-6 py-4 text-sm text-slate-700">{{ $pelanggaran->catatan ?? '-' }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="px-6 py-4 text-center text-slate-500">
                                                        Alhamdulillah, belum ada catatan pelanggaran.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @else
                {{-- TAMPILAN JIKA DATA SISWA TIDAK DITEMUKAN --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-medium text-slate-900">Data Siswa Tidak Terhubung</h3>
                        <p class="mt-2 text-sm text-slate-600">
                            Akun Anda belum terhubung dengan data siswa mana pun. Mohon hubungi pihak sekolah atau administrator untuk menautkan akun Anda dengan data anak Anda.
                        </p>
                    </div>
                </div>
            @endif

            {{-- ================= AKHIR MODIFIKASI ================= --}}
        </div>
    </div>
</x-app-layout>

===== resources\views\pdf\laporan_individu.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kasus Individu - {{ $siswa->nama }}</title>
    <style>
        @page { margin: 2.5cm 2cm; }
        body { font-family: 'DejaVu Sans', sans-serif; font-size: 11pt; color: #1e293b; }
        h2, h3 { color: #111827; margin-bottom: 0.4em; }
        h2 { text-align: center; text-transform: uppercase; font-size: 14pt; letter-spacing: 0.5px; }
        hr { border: 0; border-top: 1px solid #cbd5e1; margin: 0.6em 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 0.5em; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; vertical-align: top; }
        th { background: #f1f5f9; font-weight: 600; text-align: left; color: #0f172a; }
        ul { margin: 0.2em 0 0.5em 1em; padding: 0; }
        .text-muted { color: #64748b; font-style: italic; }
        .section { margin-bottom: 1.2cm; }
        .header { text-align: center; margin-bottom: 1cm; }
        .school-title { font-weight: bold; font-size: 13pt; color: #1e3a8a; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; font-size: 9pt; text-align: center; color: #64748b; }
    </style>
</head>
<body>

    {{-- HEADER SEKOLAH --}}
    <div class="header">
        <div class="school-title">Bimbingan Konseling - SMA Negeri 1 Gorontalo</div>
        <div class="text-muted">Laporan Kasus Individu</div>
        <hr>
    </div>

    {{-- JUDUL --}}
    <h2>Laporan Kasus Individu</h2>

    {{-- DATA SISWA --}}
    <div class="section">
        <table>
            <tr>
                <th width="25%">Nama Siswa</th>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>{{ $siswa->nis }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $siswa->kelas }}</td>
            </tr>
            <tr>
                <th>Total Poin Pelanggaran</th>
                <td><strong style="color:#dc2626;">{{ $siswa->totalPoin() }} poin</strong></td>
            </tr>
        </table>
    </div>

    {{-- RIWAYAT PELANGGARAN --}}
    <div class="section">
        <h3>Riwayat Pelanggaran</h3>
        @if ($siswa->pelanggaran->isEmpty())
            <p class="text-muted">Tidak ada pelanggaran tercatat.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th width="18%">Tanggal</th>
                        <th>Jenis Pelanggaran</th>
                        <th width="12%">Poin</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa->pelanggaran as $pel)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($pel->tanggal_pelanggaran)->format('d/m/Y') }}</td>
                            <td>{{ $pel->jenisPelanggaran->nama_pelanggaran }}</td>
                            <td style="color:#dc2626; font-weight:bold;">{{ $pel->jenisPelanggaran->poin }}</td>
                            <td>{{ $pel->catatan ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    {{-- RIWAYAT BIMBINGAN --}}
    <div class="section">
        <h3>Riwayat Bimbingan Konseling</h3>
        @if ($siswa->laporanBimbingan->isEmpty())
            <p class="text-muted">Belum ada laporan bimbingan.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th width="18%">Tanggal</th>
                        <th>Isi Laporan</th>
                        <th width="28%">Tindak Lanjut</th>
                        <th width="14%">Jenis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa->laporanBimbingan->sortByDesc('created_at') as $lap)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($lap->created_at)->format('d/m/Y') }}</td>
                            <td>{{ $lap->isi_laporan }}</td>
                            <td>{{ $lap->rencana_tindak_lanjut ?? '-' }}</td>
                            <td>{{ $lap->jenis_surat ?? 'Umum' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    {{-- FOOTER --}}
    <div class="footer">
        Dicetak otomatis oleh Sistem BK pada {{ now()->translatedFormat('d F Y, H:i') }}
    </div>

</body>
</html>

===== resources\views\pdf\laporan_intervensi.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Intervensi & Tindak Lanjut</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2 { text-align: center; margin-bottom: 0.4cm; }
        table { width: 100%; border-collapse: collapse; margin-top: 0.3cm; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; text-align: left; }
        .footer { position: fixed; bottom: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2>Laporan Intervensi & Tindak Lanjut</h2>

    <p>
        <strong>Periode:</strong>
        {{ $periodeAwal ? \Carbon\Carbon::parse($periodeAwal)->format('d/m/Y') : '-' }} -
        {{ $periodeAkhir ? \Carbon\Carbon::parse($periodeAkhir)->format('d/m/Y') : '-' }}<br>
        <strong>Status:</strong> {{ $status ? ucfirst($status) : 'Semua' }}
    </p>

    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Siswa</th>
                <th>Guru BK</th>
                <th>Status</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_jadwal)->format('d/m/Y') }}</td>
                    <td>{{ $item->siswa->nama }}</td>
                    <td>{{ $item->guru->name ?? '-' }}</td>
                    <td>{{ $item->laporanBimbingan->isNotEmpty() ? 'Sudah' : 'Belum' }}</td>
                    <td>{{ $item->laporanBimbingan->first()->rencana_tindak_lanjut ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Dicetak otomatis oleh Sistem BK â€” {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>

===== resources\views\pdf\laporan_kelas.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kelas</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2 { text-align: center; margin-bottom: 0.5cm; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; text-align: left; }
        .footer { position: fixed; bottom: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2>Laporan Kelas {{ $kelas ?? 'Semua' }}</h2>

    @if ($data->isEmpty())
        <p>Tidak ada data siswa untuk kelas ini.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jumlah Pelanggaran</th>
                    <th>Total Poin</th>
                    <th>Sesi Bimbingan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row['nama'] }}</td>
                        <td>{{ $row['kelas'] }}</td>
                        <td>{{ $row['pelanggaran'] }}</td>
                        <td>{{ $row['poin'] }}</td>
                        <td>{{ $row['bimbingan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="footer">
        Dicetak otomatis oleh Sistem BK â€” {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>

===== resources\views\pdf\laporan_kinerja.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kinerja Guru BK</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2 { text-align: center; margin-bottom: 0.4cm; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; text-align: left; }
        .footer { position: fixed; bottom: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2>Laporan Kinerja Guru BK</h2>

    <p>
        <strong>Periode:</strong>
        {{ $periodeAwal ? \Carbon\Carbon::parse($periodeAwal)->format('d/m/Y') : '-' }} -
        {{ $periodeAkhir ? \Carbon\Carbon::parse($periodeAkhir)->format('d/m/Y') : '-' }}
    </p>

    <table>
        <thead>
            <tr>
                <th>Nama Guru BK</th>
                <th>Jumlah Jadwal Konseling</th>
                <th>Jumlah Laporan Konseling</th>
                <th>Jenis Kasus Ditangani</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guruBk as $row)
                <tr>
                    <td>{{ $row['nama'] }}</td>
                    <td>{{ $row['total_jadwal'] }}</td>
                    <td>{{ $row['total_laporan'] }}</td>
                    <td>{{ $row['jenis_kasus'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Dicetak otomatis oleh Sistem BK â€” {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>

===== resources\views\pdf\laporan_kolektif.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kasus Kolektif</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2, h3 { color: #111827; margin-bottom: 0.4em; }
        table { width: 100%; border-collapse: collapse; margin-top: 0.3cm; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; font-weight: 600; text-align: left; }
        .section { margin-bottom: 1.2cm; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Laporan Kasus Kolektif</h2>
    <p><strong>Jenis Kasus:</strong> {{ $jenisKasus ?? 'Semua' }}<br>
       <strong>Kelas:</strong> {{ $kelas ?? 'Semua' }}<br>
       <strong>Periode:</strong> 
       {{ $periodeAwal ? \Carbon\Carbon::parse($periodeAwal)->format('d/m/Y') : '-' }} - 
       {{ $periodeAkhir ? \Carbon\Carbon::parse($periodeAkhir)->format('d/m/Y') : '-' }}
    </p>

    <hr>

    @forelse ($data as $jenis => $list)
        <h3>{{ $jenis }}</h3>
        <table>
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->siswa->nama }}</td>
                        <td>{{ $item->siswa->kelas }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->format('d/m/Y') }}</td>
                        <td>{{ $item->catatan ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    @empty
        <p>Tidak ada data pelanggaran.</p>
    @endforelse

    <div class="footer">
        Dicetak otomatis oleh Sistem BK â€” {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>

===== resources\views\pdf\laporan_statistik.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Tren & Statistik Sekolah</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2 { text-align: center; margin-bottom: 0.5cm; }
        table { width: 100%; border-collapse: collapse; margin-top: 0.3cm; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; text-align: left; }
        .footer { position: fixed; bottom: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2>Laporan Tren & Statistik Sekolah {{ $tahun }}</h2>

    <p><strong>Efektivitas Penanganan:</strong> {{ $efektivitas }}%</p>

    <h4>Jenis Pelanggaran Terbanyak:</h4>
    <table>
        <thead>
            <tr>
                <th>Jenis Pelanggaran</th>
                <th>Jumlah Kasus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisKasus as $jk)
                <tr>
                    <td>{{ $jk->nama_pelanggaran }}</td>
                    <td>{{ $jk->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Dicetak otomatis oleh Sistem BK â€” {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>

===== resources\views\profile\partials\delete-user-form.blade.php =====
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

===== resources\views\profile\partials\update-password-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\partials\update-profile-information-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <div>
            <x-input-label for="phone_number" :value="__('Nomor Telepon (WhatsApp)')" />
            <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full" :value="old('phone_number', $user->phone_number)" autocomplete="tel" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\walikelas\laporan\kelas.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Kelas') }}
            </h2>
            <a href="{{ route('walikelas.laporan.kelas.pdf', request()->all()) }}" 
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
               Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter Kelas --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <form method="GET" action="{{ route('walikelas.laporan.kelas') }}" class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-slate-600 mb-1">Kelas</label>
                        <input type="text" name="kelas" value="{{ request('kelas') }}" class="w-full rounded-md border-slate-300 text-sm" placeholder="Misal: XI IPA 1">
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Data Laporan --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                @if ($data->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada data siswa untuk kelas ini.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-slate-200 text-sm">
                            <thead class="bg-slate-50 text-slate-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">Nama Siswa</th>
                                    <th class="px-4 py-2 text-left">Kelas</th>
                                    <th class="px-4 py-2 text-left">Jumlah Pelanggaran</th>
                                    <th class="px-4 py-2 text-left">Total Poin</th>
                                    <th class="px-4 py-2 text-left">Sesi Bimbingan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($data as $row)
                                    <tr class="hover:bg-slate-50">
                                        <td class="px-4 py-2">{{ $row['nama'] }}</td>
                                        <td class="px-4 py-2">{{ $row['kelas'] }}</td>
                                        <td class="px-4 py-2">{{ $row['pelanggaran'] }}</td>
                                        <td class="px-4 py-2 text-red-600 font-semibold">{{ $row['poin'] }}</td>
                                        <td class="px-4 py-2">{{ $row['bimbingan'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\walikelas\laporan\show.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-2xl overflow-hidden">
                <div class="p-8 space-y-10">

                    {{-- ================= AWAL MODIFIKASI ================= --}}
                    {{-- HEADER (Mengikuti layout guru.laporan.show) --}}
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 pb-6 border-b border-slate-200">
                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">
                                Laporan untuk {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}
                            </h3>
                            <p class="text-sm text-slate-500 mt-1">
                                Dibuat oleh
                                <span class="font-medium text-slate-700">{{ $laporanBimbingan->pembuat->name }}</span>
                                â€¢ {{ $laporanBimbingan->created_at->isoFormat('dddd, D MMMM YYYY') }}
                            </p>
                        </div>
                        {{-- Sesuaikan rute kembali ke dashboard Wali Kelas --}}
                        <a href="{{ route('walikelas.dashboard') }}"
                           class="inline-flex items-center gap-1 text-sm font-medium text-teal-600 hover:text-teal-800 transition">
                            â† Kembali ke Dasbor
                        </a>
                    </div>

                    {{-- HIGHLIGHT: DOKUMEN (Mengikuti layout guru.laporan.show) --}}
                    <div class="bg-gradient-to-r from-teal-500 to-sky-500 text-white rounded-xl shadow-lg p-6">
                        <h4 class="text-base font-semibold uppercase tracking-wide mb-4">Dokumen Dihasilkan</h4>

                        @if ($laporanBimbingan->dokumen->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach($laporanBimbingan->dokumen as $dokumen)
                                    <li class="flex items-center justify-between bg-white/20 rounded-lg px-4 py-2">
                                        <span class="text-sm font-medium">{{ str_replace('_', ' ', Str::title($dokumen->jenis_surat)) }}</span>
                                        <a href="{{ Storage::url($dokumen->file_path) }}"
                                           class="inline-flex items-center px-3 py-1 bg-white text-teal-700 rounded-md text-xs font-semibold hover:bg-slate-100 transition"
                                           download>
                                            Unduh (.docx)
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-white/80 italic">Tidak ada dokumen terkait laporan ini.</p>
                        @endif
                    </div>

                    {{-- GRID DETAIL (Mengikuti layout guru.laporan.show) --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        {{-- Kiri: Tindak Lanjut --}}
                        <div class="md:col-span-1 space-y-6">
                            <div class="bg-slate-50 rounded-lg p-5 border border-slate-200">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">
                                    Rencana Tindak Lanjut
                                </h4>
                                <p class="text-sm text-slate-800 leading-relaxed">
                                    {!! nl2br(e($laporanBimbingan->rencana_tindak_lanjut ?: '-')) !!}
                                </p>
                            </div>
                        </div>

                        {{-- Kanan: Isi Laporan --}}
                        <div class="md:col-span-2">
                            <div class="bg-slate-50 rounded-lg p-6 border border-slate-200 h-full">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-3">
                                    Isi Laporan Tambahan
                                </h4>
                                <div class="text-slate-800 leading-relaxed prose prose-sm max-w-none">
                                    {!! nl2br(e($laporanBimbingan->isi_laporan ?: '-')) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                     {{-- ================= AKHIR MODIFIKASI ================= --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\walikelas\siswa\show.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Detail Siswa: ') . $siswa->nama }}
            </h2>
            <a href="{{ route('walikelas.dashboard') }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali ke Dasbor</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                {{-- KOLOM KIRI --}}
                <div class="lg:col-span-1 space-y-6">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4">Profil Siswa</h3>
                            <div class="mt-4 space-y-2 text-sm">
                                <p><strong class="text-slate-500">Nama:</strong><br>{{ $siswa->nama }}</p>
                                <p><strong class="text-slate-500">NIS:</strong><br>{{ $siswa->nis }}</p>
                                <p><strong class="text-slate-500">Kelas:</strong><br>{{ $siswa->kelas }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4">Aksi Cepat</h3>
                            <div class="mt-4 space-y-2">
                                @if($siswa->waliMurid && $siswa->waliMurid->nomor_telepon)
                                    @php
                                        // Menggunakan 'nomor_telepon' sesuai digest
                                        $nomorWhatsapp = preg_replace('/^0/', '62', $siswa->waliMurid->nomor_telepon);
                                        $pesan = urlencode("Selamat pagi/siang Bapak/Ibu " . $siswa->waliMurid->nama . ", saya selaku wali kelas ananda " . $siswa->nama . " ingin berdiskusi.");
                                    @endphp
                                    <a href="https://wa.me/{{ $nomorWhatsapp }}?text={{ $pesan }}" target="_blank" class="block w-full text-center px-4 py-2 bg-green-50 text-green-700 rounded-lg text-sm font-semibold hover:bg-green-100">Hubungi Ortu (WA)</a>
                                @else
                                    <p class="text-xs text-center text-slate-400 italic">Nomor telepon orang tua tidak tersedia.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6 text-center">
                            <p class="text-sm font-medium text-slate-500">Total Poin Pelanggaran</p>
                            <p class="text-5xl font-bold mt-2 {{ $siswa->totalPoin() > 50 ? 'text-red-500' : 'text-teal-600' }}">
                                {{ $siswa->totalPoin() }}
                            </p>
                        </div>
                    </div>

                </div>

                {{-- KOLOM KANAN --}}
                <div class="lg:col-span-2 space-y-6">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                             <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-4">Riwayat Pelanggaran</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="bg-slate-50">
                                        <tr>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Pelanggaran</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Poin</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200">
                                        @forelse ($siswa->pelanggaran as $pelanggaran)
                                            <tr>
                                                <td class="px-4 py-3 text-sm text-slate-800">{{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                                <td class="px-4 py-3 text-sm font-bold text-slate-800">{{ $pelanggaran->jenisPelanggaran->poin }}</td>
                                                <td class="px-4 py-3 text-sm text-slate-500">{{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}</td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="3" class="px-4 py-3 text-center text-sm text-slate-500">Tidak ada riwayat pelanggaran.</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-4">Riwayat Bimbingan</h3>
                             <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="bg-slate-50">
                                        <tr>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Tanggal Jadwal</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Konselor</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200">
                                        @forelse ($siswa->jadwalBimbingan as $jadwal)
                                            <tr>
                                                <td class="px-4 py-3 text-sm text-slate-800">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('D MMM YYYY') }}</td>
                                                <td class="px-4 py-3 text-sm text-slate-500">{{ $jadwal->konselor->name }}</td>
                                                <td class="px-4 py-3 text-sm">
                                                    @if($jadwal->laporan)
                                                        <a href="{{ route('walikelas.laporan.show', $jadwal->laporan->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">
                                                            Lihat Laporan
                                                        </a>
                                                    @else
                                                        <span class="text-xs text-slate-400 italic">Belum ada laporan</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="3" class="px-4 py-3 text-center text-sm text-slate-500">Tidak ada riwayat bimbingan.</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\walikelas\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Wali Kelas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="border-b border-slate-200 pb-4 mb-6">
                        <h3 class="text-lg font-medium text-slate-900">
                            Daftar Siswa Perwalian
                        </h3>
                        <p class="mt-1 text-sm text-slate-500">
                            Berikut adalah daftar siswa yang berada di bawah perwalian Anda beserta rekapitulasi poin pelanggarannya.
                        </p>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama Siswa</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">NIS</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Total Poin</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($siswaDiampu as $siswa)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $siswa->nis }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold {{ $siswa->totalPoin() > 50 ? 'text-red-600' : 'text-slate-800' }}">
                                            {{ $siswa->totalPoin() }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('walikelas.siswa.show', $siswa->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Lihat Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-slate-500">
                                            Tidak ada siswa yang terdaftar di bawah perwalian Anda.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\welcome.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BK SMANSA Gorontalo</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Subtle Glassmorphism Header */
        header {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.97), rgba(255, 255, 255, 0.85));
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        /* Minimalist Nav Hover Effect */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -4px;
            left: 0;
            background: #0d9488;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #0d9488;
        }

        /* Hero Section */
        #home {
            position: relative;
            background: linear-gradient(180deg, #f8fafc, #f1f5f9);
            overflow: hidden;
        }

        #home::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1920x1080?abstract') no-repeat center center/cover;
            opacity: 0.03;
            transform: translateY(0);
            transition: transform 0.8s ease;
        }

        #home::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 30%, rgba(20, 184, 166, 0.1) 0%, transparent 50%);
            opacity: 0.5;
            z-index: 0;
        }

        .hero-heading {
            position: relative;
            background: linear-gradient(to right, #0d9488, #1e293b);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-heading::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #0d9488, #14b8a6);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.5s ease;
        }

        .hero-heading:hover::after {
            width: 100px;
        }

        /* Scroll Down Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translate(-50%, 0);
            }

            40% {
                transform: translate(-50%, -10px);
            }

            60% {
                transform: translate(-50%, -5px);
            }
        }

        /* Feature Card */
        .feature-card {
            transition: transform 0.6s ease, box-shadow 0.6s ease;
            transform-style: preserve-3d;
            position: relative;
            border: 1px solid transparent;
            background-clip: padding-box;
            border-radius: 1.5rem;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            border-radius: 1.5rem;
            background: linear-gradient(45deg, transparent, #14b8a6, transparent);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: -1;
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-card:hover {
            transform: translateY(-10px) rotateX(3deg) rotateY(3deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .feature-card .icon-wrapper {
            transition: transform 0.3s ease;
        }

        .feature-card:hover .icon-wrapper {
            transform: scale(1.1);
        }

        /* Tentang Section Gradient */
        #tentang {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }

        /* Button Minimalist Glow */
        .btn-primary {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 0.75rem;
        }

        .btn-primary:hover {
            transform: scale(1.03);
            box-shadow: 0 0 15px rgba(20, 184, 166, 0.2);
        }

        .btn-secondary {
            position: relative;
            transition: transform 0.3s ease, background-color 0.3s ease;
            border-radius: 0.75rem;
        }

        .btn-secondary:hover {
            transform: scale(1.03);
            background-color: #f1f5f9;
        }

        /* Add scroll margin to sections */
        section {
            scroll-margin-top: 80px;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased" x-data="{
    scrollTo(selector) {
        const element = document.querySelector(selector);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        } else {
            console.error('Element not found:', selector);
        }
    }
}">

    <header class="fixed top-0 left-0 right-0 z-20 shadow-sm transition-all duration-500">
        <nav class="max-w-7xl mx-auto flex justify-between items-center p-5">
            <a href="#" @click.prevent="scrollTo('#home')" class="flex items-center gap-3">
                <svg class="w-8 h-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zm0-2a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0l-2-2m2 2l2-2" />
                </svg>
                <span class="font-semibold text-xl text-slate-900 tracking-tight">BK SMANSA</span>
            </a>
            <div class="hidden md:flex items-center gap-6">
                <a href="#" @click.prevent="scrollTo('#home')"
                    class="nav-link text-sm font-medium text-slate-700 px-3 py-2">Home</a>
                <a href="#" @click.prevent="scrollTo('#fitur')"
                    class="nav-link text-sm font-medium text-slate-700 px-3 py-2">Fitur</a>
                <a href="#" @click.prevent="scrollTo('#tentang')"
                    class="nav-link text-sm font-medium text-slate-700 px-3 py-2">Tentang</a>
            </div>
            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="btn-primary rounded-lg bg-teal-600 px-5 py-2 text-sm font-medium text-white shadow-sm transition-all duration-300">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="nav-link text-sm font-medium text-slate-700 transition-colors duration-300">
                            Log in
                        </a>
                    @endif
                    @endif
                </div>
            </nav>
        </header>

        <main x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 50)">

            <section id="home" class="min-h-screen flex items-center justify-center text-center px-6 pt-20 relative">
                <div x-show="loaded" x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                    class="z-10">
                    <h1 class="hero-heading text-5xl md:text-7xl font-bold tracking-tight leading-snug pb-4">
                        Bimbingan Konseling Digital
                    </h1>
                    <p class="mt-6 max-w-2xl mx-auto text-lg text-slate-600 leading-relaxed">
                        Solusi modern untuk pencatatan, penjadwalan, dan pelaporan pembinaan siswa SMANSA Gorontalo.
                    </p>
                    <div class="mt-10 flex gap-4 justify-center">
                        <a href="#" @click.prevent="scrollTo('#fitur')"
                            class="btn-primary bg-teal-600 px-6 py-3 text-base font-medium text-white shadow-sm transition-all duration-300">
                            Jelajahi Fitur
                        </a>
                        <a href="#" @click.prevent="scrollTo('#tentang')"
                            class="btn-secondary border border-slate-300 px-6 py-3 text-base font-medium text-slate-700 transition-all duration-300"
                            x-show="loaded" x-transition:enter="transition ease-out duration-1000 delay-200"
                            x-transition:enter-start="opacity-0 translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <a href="#" @click.prevent="scrollTo('#fitur')" class="scroll-indicator">
                    <svg class="w-6 h-6 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                    </svg>
                </a>
            </section>

            <section id="fitur" class="min-h-screen flex items-center bg-white py-28 px-6">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Solusi untuk BK Modern</h2>
                        <p class="mt-4 text-lg text-slate-600 leading-relaxed">Efisien, transparan, dan terstruktur untuk
                            pembinaan siswa.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{ loaded: false }"
                        x-init="setTimeout(() => loaded = true, 100)">
                        <div class="feature-card rounded-2xl bg-white p-8" x-show="loaded"
                            x-transition:enter="transition ease-out duration-600 delay-100"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="icon-wrapper mb-6 bg-teal-50 rounded-xl w-14 h-14 flex items-center justify-center">
                                <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M3 12h18" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900">Pencatatan Pelanggaran</h3>
                            <p class="mt-3 text-slate-600 leading-relaxed">Catat pelanggaran siswa dengan sistem poin
                                otomatis untuk pemantauan efisien.</p>
                        </div>
                        <div class="feature-card rounded-2xl bg-white p-8" x-show="loaded"
                            x-transition:enter="transition ease-out duration-600 delay-200"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <div
                                class="icon-wrapper mb-6 bg-teal-50 rounded-xl w-14 h-14 flex items-center justify-center">
                                <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0h18" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900">Penjadwalan Terstruktur</h3>
                            <p class="mt-3 text-slate-600 leading-relaxed">Atur sesi konseling dengan sistem terverifikasi
                                untuk alur kerja jelas.</p>
                        </div>
                        <div class="feature-card rounded-2xl bg-white p-8" x-show="loaded"
                            x-transition:enter="transition ease-out duration-600 delay-300"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <div
                                class="icon-wrapper mb-6 bg-teal-50 rounded-xl w-14 h-14 flex items-center justify-center">
                                <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h16.5M3.75 3H12v11.25M12 16.5h6A2.25 2.25 0 0 0 20.25 14.25V3" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900">Laporan Terpusat</h3>
                            <p class="mt-3 text-slate-600 leading-relaxed">Akses rekapitulasi data bimbingan dan
                                pelanggaran sesuai peran.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tentang" class="min-h-screen flex items-center justify-center text-white px-6">
                <div class="text-center">
                    <a href="#" @click.prevent="scrollTo('#home')"
                        class="flex items-center justify-center gap-3 mb-8">
                        <svg class="w-10 h-10 text-teal-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zm0-2a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0l-2-2m2 2l2-2" />
                        </svg>
                        <span class="font-semibold text-2xl tracking-tight">BK SMANSA</span>
                    </a>
                    <p class="max-w-xl mx-auto text-lg text-slate-300 leading-relaxed">
                        Sistem untuk mendukung program Bimbingan Konseling SMAN 1 Gorontalo dalam membina karakter dan
                        prestasi siswa.
                    </p>
                    <div class="mt-10">
                        <p class="text-sm text-slate-400">Â© {{ date('Y') }} Tim Bimbingan Konseling SMAN 1 Gorontalo.
                        </p>
                    </div>
                </div>
            </section>

        </main>

    </body>

    </html>

```


## Entry Points & Main Configs Content
```
===== public\index.php =====
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

===== artisan =====
#!/usr/bin/env php
<?php

use Illuminate\Foundation\Application;
use Symfony\Component\Console\Input\ArgvInput;

define('LARAVEL_START', microtime(true));

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the command...
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

$status = $app->handleCommand(new ArgvInput);

exit($status);

===== resources\js\app.js =====
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

===== vite.config.js =====
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

===== config\app.php =====
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'id'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'id'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'id_ID'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];

===== config\database.php =====
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-database-'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

```

== Selesai ==
