<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}
