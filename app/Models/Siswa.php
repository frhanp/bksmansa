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
