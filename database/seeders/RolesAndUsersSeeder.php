<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;

class RolesAndUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Guru Tetap
        $kepalaSekolah = Guru::create(['nama' => 'Dr. H. Budi Santoso, M.Pd.', 'nip' => '196508171990031007']);
        $adminBk = Guru::create(['nama' => 'Andi Wijaya, S.Pd., Kons.', 'nip' => '198801012010011001']);
        $guruBk1 = Guru::create(['nama' => 'Siti Aminah, S.Pd.', 'nip' => '199005102015032001']);
        $guruBk2 = Guru::create(['nama' => 'Rahmat Hidayat, S.Pd.', 'nip' => '199203152016041002']);

        // Tambah lebih banyak guru untuk wali kelas
        $waliKelasData = [
            ['nama' => 'Dewi Lestari, S.Si.', 'nip' => '198907202014022003'],
            ['nama' => 'Eko Prasetyo, S.S.', 'nip' => '198711112013011004'],
            ['nama' => 'Indah Permata, S.Kom.', 'nip' => '199102142015052005'],
            ['nama' => 'Agus Salim, M.T.', 'nip' => '198504012010111006'],
        ];

        $guruList = collect($waliKelasData)->map(fn($guru) => Guru::create($guru));
        $guruList->prepend($guruBk2);
        $guruList->prepend($guruBk1);
        $guruList->prepend($adminBk);
        $guruList->prepend($kepalaSekolah);

        // Buat Akun Pengguna
        $roles = ['kepala_sekolah', 'admin_bk', 'guru_bk', 'guru_bk', 'wali_kelas', 'wali_kelas', 'wali_kelas', 'wali_kelas'];

        foreach ($guruList as $index => $guru) {
            // Logika baru untuk membuat email yang aman
            $namaSimple = preg_replace('/[.,]/', '', $guru->nama); // Hapus titik dan koma
            $namaDepan = strtolower(explode(' ', $namaSimple)[0]); // Ambil nama depan
            $email = $namaDepan . '@gmail.com';

            // Cek jika email sudah ada, tambahkan angka
            if (User::where('email', $email)->exists()) {
                $email = $namaDepan . rand(1, 99) . '@gmail.com';
            }

            User::create([
                'name' => $guru->nama,
                'email' => $email,
                'password' => Hash::make('password'),
                'role' => $roles[$index],
                'guru_id' => $guru->id,
            ]);
        }
    }
}
