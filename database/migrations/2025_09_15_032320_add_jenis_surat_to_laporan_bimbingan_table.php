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
            $table->string('jenis_surat')->nullable()->after('jadwal_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laporan_bimbingan', function (Blueprint $table) {
            $table->dropColumn('jenis_surat');
        });
    }
};
