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
        $usersData = [
            [
                'nama' => 'Kepala Sekolah',
                'nip' => '196508171990031007',
                'role' => 'kepala_sekolah',
                'email' => 'kepsek@gmail.com'
            ],
            [
                'nama' => 'Admin BK',
                'nip' => '198801012010011001',
                'role' => 'admin_bk',
                'email' => 'admin.bk@gmail.com'
            ],
            [
                'nama' => 'Guru BK 1',
                'nip' => '199005102015032001',
                'role' => 'guru_bk',
                'email' => 'guru.bk1@gmail.com'
            ],
            [
                'nama' => 'Guru BK 2',
                'nip' => '199203152016041002',
                'role' => 'guru_bk',
                'email' => 'guru.bk2@gmail.com'
            ],
            [
                'nama' => 'Wali Kelas 1',
                'nip' => '198907202014022003',
                'role' => 'wali_kelas',
                'email' => 'walas1@gmail.com'
            ],
            [
                'nama' => 'Wali Kelas 2',
                'nip' => '198711112013011004',
                'role' => 'wali_kelas',
                'email' => 'walas2@gmail.com'
            ],
        ];

        foreach ($usersData as $data) {
            // 1. Buat data guru terlebih dahulu
            $guru = Guru::create([
                'nama' => $data['nama'],
                'nip' => $data['nip'],
            ]);

            // 2. Buat user dan hubungkan dengan guru yang baru dibuat
            User::create([
                'name' => $guru->nama,
                'email' => $data['email'],
                'password' => Hash::make('password'),
                'role' => $data['role'],
                'guru_id' => $guru->id,
            ]);
        }
    }
}
