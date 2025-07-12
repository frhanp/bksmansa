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
}
