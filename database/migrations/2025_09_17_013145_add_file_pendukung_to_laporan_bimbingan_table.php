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
        Schema::table('laporan_bimbingan', function (Blueprint $table) {
            // Menambahkan kolom untuk menyimpan path file Word
            $table->string('file_pendukung')->nullable()->after('rencana_tindak_lanjut');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laporan_bimbingan', function (Blueprint $table) {
            $table->dropColumn('file_pendukung');
        });
    }
};
