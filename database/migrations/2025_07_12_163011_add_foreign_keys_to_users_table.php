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
            // Tambahkan foreign key di sini, setelah semua tabel lain pasti sudah dibuat
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('set null');
            $table->foreign('wali_id')->references('id')->on('wali_murid')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['guru_id']);
            $table->dropForeign(['wali_id']);
        });
    }
};
