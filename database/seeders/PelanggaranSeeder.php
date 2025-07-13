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
        $adminBk = User::where('role', 'admin_bk')->first();
        $guruBk = User::where('role', 'guru_bk')->first();
        $semuaSiswa = Siswa::all();

        // Data Master Jenis Pelanggaran
        $jenisPelanggaranData = [
            ['nama_pelanggaran' => 'Terlambat masuk sekolah', 'poin' => 5],
            ['nama_pelanggaran' => 'Tidak memakai atribut lengkap', 'poin' => 10],
            ['nama_pelanggaran' => 'Baju tidak dimasukkan', 'poin' => 5],
            ['nama_pelanggaran' => 'Rambut gondrong (pria)', 'poin' => 15],
            ['nama_pelanggaran' => 'Membuang sampah sembarangan', 'poin' => 10],
            ['nama_pelanggaran' => 'Merokok di area sekolah', 'poin' => 50],
            ['nama_pelanggaran' => 'Berkelahi', 'poin' => 75],
            ['nama_pelanggaran' => 'Membawa senjata tajam', 'poin' => 100],
        ];

        $jenisPelanggaran = collect($jenisPelanggaranData)->map(fn($jp) => 
            JenisPelanggaran::create(array_merge($jp, ['dibuat_oleh' => $adminBk->id]))
        );

        // Catat Pelanggaran ke Siswa secara acak
        foreach ($semuaSiswa as $siswa) {
            // Setiap siswa punya 1 sampai 3 pelanggaran acak
            for ($i = 0; $i < rand(1, 3); $i++) {
                PelanggaranSiswa::create([
                    'siswa_id' => $siswa->id,
                    'jenis_pelanggaran_id' => $jenisPelanggaran->random()->id,
                    'catatan' => 'Kejadian tercatat saat sidak rutin.',
                    'dilaporkan_oleh' => $guruBk->id,
                    'tanggal_pelanggaran' => now()->subDays(rand(1, 30)),
                ]);
            }
        }
    }
}
