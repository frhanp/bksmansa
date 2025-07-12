<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisPelanggaran extends Model
{
    use HasFactory;

    protected $table = 'jenis_pelanggaran';

    protected $fillable = [
        'nama_pelanggaran',
        'poin',
        'dibuat_oleh',
    ];
}
