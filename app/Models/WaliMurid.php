<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class WaliMurid extends Model
{
    use HasFactory;

    protected $table = 'wali_murid';

    protected $fillable = [
        'siswa_id',
        'nama',
        'nomor_telepon',
    ];

    // Relasi: Satu wali murid dimiliki oleh satu siswa
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'wali_id');
    }
}
