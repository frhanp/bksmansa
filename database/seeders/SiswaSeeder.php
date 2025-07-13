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
        $waliKelas = Guru::whereNotIn('nip', ['196508171990031007', '198801012010011001', '199005102015032001', '199203152016041002'])->get();

        $kelasData = [
            'XII IPA 1' => [['nama' => 'Ahmad Fathoni', 'nis' => '12345'], ['nama' => 'Bunga Citra', 'nis' => '12346'], ['nama' => 'Chandra Darmawan', 'nis' => '12349']],
            'XII IPS 2' => [['nama' => 'Putri Ayu', 'nis' => '12347'], ['nama' => 'Rian Ardiansyah', 'nis' => '12348'], ['nama' => 'Sarah Larasati', 'nis' => '12350']],
            'XI IPA 3' => [['nama' => 'Kevin Sanjaya', 'nis' => '12351'], ['nama' => 'Lia Amelia', 'nis' => '12352']],
            'X-A' => [['nama' => 'Muhammad Zidan', 'nis' => '12353'], ['nama' => 'Nabila Putri', 'nis' => '12354']],
        ];

        $waliIndex = 0;
        foreach ($kelasData as $kelas => $siswaList) {
            foreach ($siswaList as $dataSiswa) {
                $siswa = Siswa::create([
                    'nama' => $dataSiswa['nama'],
                    'nis' => $dataSiswa['nis'],
                    'kelas' => $kelas,
                    'wali_kelas_id' => $waliKelas[$waliIndex]->id,
                ]);

                $wali = WaliMurid::create([
                    'siswa_id' => $siswa->id,
                    'nama' => (rand(0, 1) ? 'Bapak ' : 'Ibu ') . explode(' ', $dataSiswa['nama'])[0],
                    'nomor_telepon' => '0812' . rand(10000000, 99999999),
                ]);

                User::create([
                    'name' => $wali->nama,
                    'email' => strtolower(str_replace(' ', '.', $wali->nama)) . '@email.com',
                    'password' => Hash::make('password'),
                    'role' => 'orang_tua',
                    'wali_id' => $wali->id,
                ]);
            }
            $waliIndex = ($waliIndex + 1) % count($waliKelas);
        }
    }
}
