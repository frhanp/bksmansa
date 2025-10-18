<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanDokumen extends Model
{
    use HasFactory;

    protected $table = 'laporan_dokumen';

    protected $fillable = [
        'laporan_bimbingan_id',
        'jenis_surat',
        'file_path',
    ];

    public function laporanBimbingan()
    {
        return $this->belongsTo(LaporanBimbingan::class);
    }
}
