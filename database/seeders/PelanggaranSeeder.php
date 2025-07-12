<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Siswa;
use App\Models\JenisPelanggaran;
use App\Models\PelanggaranSiswa;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil data user admin dan siswa untuk relasi
        $adminBk = User::where('email', 'admin.bk@smansa.go.id')->first();
        $guruBk1 = User::where('email', 'gurubk1@smansa.go.id')->first();
        $siswa1 = Siswa::where('nis', '12345')->first();
        $siswa2 = Siswa::where('nis', '12347')->first();

        // =================================================================
        // 1. BUAT DATA MASTER JENIS PELANGGARAN
        // =================================================================
        $p1 = JenisPelanggaran::create(['nama_pelanggaran' => 'Terlambat masuk sekolah', 'poin' => 5, 'dibuat_oleh' => $adminBk->id]);
        $p2 = JenisPelanggaran::create(['nama_pelanggaran' => 'Tidak memakai atribut lengkap', 'poin' => 10, 'dibuat_oleh' => $adminBk->id]);
        $p3 = JenisPelanggaran::create(['nama_pelanggaran' => 'Merokok di area sekolah', 'poin' => 50, 'dibuat_oleh' => $adminBk->id]);
        $p4 = JenisPelanggaran::create(['nama_pelanggaran' => 'Berkelahi', 'poin' => 75, 'dibuat_oleh' => $adminBk->id]);

        // =================================================================
        // 2. BUAT CONTOH PELANGGARAN YANG DILAKUKAN SISWA
        // =================================================================
        PelanggaranSiswa::create([
            'siswa_id' => $siswa1->id,
            'jenis_pelanggaran_id' => $p1->id,
            'catatan' => 'Terlambat 15 menit.',
            'dilaporkan_oleh' => $guruBk1->id,
        ]);
        
        PelanggaranSiswa::create([
            'siswa_id' => $siswa1->id,
            'jenis_pelanggaran_id' => $p2->id,
            'catatan' => 'Tidak memakai dasi saat upacara.',
            'dilaporkan_oleh' => $guruBk1->id,
        ]);

        PelanggaranSiswa::create([
            'siswa_id' => $siswa2->id,
            'jenis_pelanggaran_id' => $p3->id,
            'catatan' => 'Ditemukan merokok di kantin belakang.',
            'dilaporkan_oleh' => $guruBk1->id,
        ]);
    }
}
