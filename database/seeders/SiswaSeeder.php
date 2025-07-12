<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\WaliMurid;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil data Wali Kelas yang sudah dibuat sebelumnya
        $waliKelas1 = Guru::where('nip', '198907202014022003')->first();
        $waliKelas2 = Guru::where('nip', '198711112013011004')->first();

        // Data siswa untuk kelas XII IPA 1
        $siswaIpa = [
            ['nama' => 'Ahmad Fathoni', 'nis' => '12345'],
            ['nama' => 'Bunga Citra', 'nis' => '12346'],
        ];

        foreach ($siswaIpa as $s) {
            $siswa = Siswa::create([
                'nama' => $s['nama'],
                'nis' => $s['nis'],
                'kelas' => 'XII IPA 1',
                'wali_kelas_id' => $waliKelas1->id,
            ]);

            // Buat data Wali Murid untuk setiap siswa
            $wali = WaliMurid::create([
                'siswa_id' => $siswa->id,
                'nama' => 'Bapak ' . explode(' ', $s['nama'])[0],
                'nomor_telepon' => '081234567890',
            ]);

            // Buat akun User untuk Wali Murid
            User::create([
                'name' => $wali->nama,
                'email' => Str::slug($wali->nama, '.') . '@email.com',
                'password' => Hash::make('password'),
                'role' => 'orang_tua',
                'wali_id' => $wali->id,
            ]);
        }

        // Data siswa untuk kelas XII IPS 2
        $siswaIps = [
            ['nama' => 'Putri Ayu', 'nis' => '12347'],
            ['nama' => 'Rian Ardiansyah', 'nis' => '12348'],
        ];

        foreach ($siswaIps as $s) {
            $siswa = Siswa::create([
                'nama' => $s['nama'],
                'nis' => $s['nis'],
                'kelas' => 'XII IPS 2',
                'wali_kelas_id' => $waliKelas2->id,
            ]);

            // Buat data Wali Murid untuk setiap siswa
            $wali = WaliMurid::create([
                'siswa_id' => $siswa->id,
                'nama' => 'Ibu ' . explode(' ', $s['nama'])[0],
                'nomor_telepon' => '081209876543',
            ]);

            // Buat akun User untuk Wali Murid
            User::create([
                'name' => $wali->nama,
                'email' => Str::slug($wali->nama, '.') . '@email.com',
                'password' => Hash::make('password'),
                'role' => 'orang_tua',
                'wali_id' => $wali->id,
            ]);
        }
    }
}
