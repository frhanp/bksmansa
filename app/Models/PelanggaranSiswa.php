<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PelanggaranSiswa extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran_siswa';
    
    // Karena kita memakai nama kolom 'tanggal_pelanggaran' bukan 'created_at'
    const CREATED_AT = 'tanggal_pelanggaran';
    const UPDATED_AT = null; // Tidak ada updated_at di tabel ini

    protected $fillable = [
        'siswa_id',
        'jenis_pelanggaran_id',
        'catatan',
        'dilaporkan_oleh',
    ];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function jenisPelanggaran(): BelongsTo
    {
        return $this->belongsTo(JenisPelanggaran::class);
    }

    public function pelapor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dilaporkan_oleh');
    }
}
