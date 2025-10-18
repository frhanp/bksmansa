<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanBimbingan extends Model
{
    use HasFactory;

    protected $table = 'laporan_bimbingan';

    protected $fillable = [
        'jadwal_id',
        'jenis_surat',
        'file_pendukung',
        'isi_laporan',
        'rencana_tindak_lanjut',
        'dibuat_oleh',
    ];

    public function jadwalBimbingan(): BelongsTo
    {
        return $this->belongsTo(JadwalBimbingan::class, 'jadwal_id');
    }

    public function dibuatOleh(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function pembuat()
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function dokumen()
    {
        return $this->hasMany(LaporanDokumen::class);
    }
}
