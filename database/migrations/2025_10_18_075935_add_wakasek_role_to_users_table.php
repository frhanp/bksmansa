<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $roles = ['kepala_sekolah', 'admin_bk', 'guru_bk', 'wali_kelas', 'orang_tua', 'wakasek'];
        $enumString = "'" . implode("','", $roles) . "'";
        DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM({$enumString}) NOT NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $roles = ['kepala_sekolah', 'admin_bk', 'guru_bk', 'wali_kelas', 'orang_tua'];
        $enumString = "'" . implode("','", $roles) . "'";
        DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM({$enumString}) NOT NULL");
    }
};
