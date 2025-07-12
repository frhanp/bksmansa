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
        // =================================================================
        // 1. BUAT DATA GURU
        // =================================================================
        $kepalaSekolah = Guru::create([
            'nama' => 'Dr. H. Budi Santoso, M.Pd.',
            'nip' => '196508171990031007',
        ]);

        $adminBk = Guru::create([
            'nama' => 'Andi Wijaya, S.Pd., Kons.',
            'nip' => '198801012010011001',
        ]);

        $guruBk1 = Guru::create([
            'nama' => 'Siti Aminah, S.Pd.',
            'nip' => '199005102015032001',
        ]);

        $guruBk2 = Guru::create([
            'nama' => 'Rahmat Hidayat, S.Pd.',
            'nip' => '199203152016041002',
        ]);

        // Kita buat 2 guru untuk menjadi Wali Kelas
        $waliKelas1 = Guru::create([
            'nama' => 'Dewi Lestari, S.Si.',
            'nip' => '198907202014022003',
        ]);

        $waliKelas2 = Guru::create([
            'nama' => 'Eko Prasetyo, S.S.',
            'nip' => '198711112013011004',
        ]);


        // =================================================================
        // 2. BUAT AKUN PENGGUNA (USERS) SESUAI PERAN
        // =================================================================
        User::create([
            'name' => $kepalaSekolah->nama,
            'email' => 'kepsek@smansa.go.id',
            'password' => Hash::make('password'),
            'role' => 'kepala_sekolah',
            'guru_id' => $kepalaSekolah->id,
        ]);

        User::create([
            'name' => $adminBk->nama,
            'email' => 'admin.bk@smansa.go.id',
            'password' => Hash::make('password'),
            'role' => 'admin_bk',
            'guru_id' => $adminBk->id,
        ]);

        User::create([
            'name' => $guruBk1->nama,
            'email' => 'gurubk1@smansa.go.id',
            'password' => Hash::make('password'),
            'role' => 'guru_bk',
            'guru_id' => $guruBk1->id,
        ]);
        
        User::create([
            'name' => $guruBk2->nama,
            'email' => 'gurubk2@smansa.go.id',
            'password' => Hash::make('password'),
            'role' => 'guru_bk',
            'guru_id' => $guruBk2->id,
        ]);

        User::create([
            'name' => $waliKelas1->nama,
            'email' => 'walikelas1@smansa.go.id',
            'password' => Hash::make('password'),
            'role' => 'wali_kelas',
            'guru_id' => $waliKelas1->id,
        ]);
        
        User::create([
            'name' => $waliKelas2->nama,
            'email' => 'walikelas2@smansa.go.id',
            'password' => Hash::make('password'),
            'role' => 'wali_kelas',
            'guru_id' => $waliKelas2->id,
        ]);
    }
}
