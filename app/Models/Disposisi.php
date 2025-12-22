<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Disposisi extends Model
{
    protected $table = 'disposisi';
    protected $fillable = ['siswa_id', 'dari_id', 'pesan', 'status_selesai'];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function pemberi(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dari_id');
    }
}
