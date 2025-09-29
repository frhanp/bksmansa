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
            Schema::table('laporan_bimbingan', function (Blueprint $table) {
                // Mengubah kolom agar bisa menerima nilai null
                $table->text('isi_laporan')->nullable()->change();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laporan_bimbingan', function (Blueprint $table) {
            // Mengembalikan ke kondisi semula jika diperlukan
            $table->text('isi_laporan')->nullable(false)->change();
        });
    }
};
