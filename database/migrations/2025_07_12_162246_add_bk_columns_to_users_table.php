<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', [
                'kepala_sekolah',
                'admin_bk',
                'guru_bk',
                'wali_kelas',
                'orang_tua'
            ])->after('password');

            $table->unsignedBigInteger('guru_id')->nullable()->after('role');
            $table->unsignedBigInteger('wali_id')->nullable()->after('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Karena foreign key tidak jadi dibuat di sini, kita hanya perlu drop kolom
            $table->dropColumn(['role', 'guru_id', 'wali_id']);
        });
    }
};
