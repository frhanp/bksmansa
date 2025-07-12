<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $fillable = ['nama', 'nip'];

    // Relasi: Satu guru bisa menjadi wali kelas dari banyak siswa
    public function siswaWalian(): HasMany
    {
        return $this->hasMany(Siswa::class, 'wali_kelas_id');
    }
}
