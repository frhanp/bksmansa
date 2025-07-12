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
        Schema::create('jadwal_bimbingan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade');
            $table->foreignId('konselor_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('tanggal_jadwal');
            $table->enum('status', ['menunggu_verifikasi', 'terverifikasi', 'selesai', 'dibatalkan'])->default('menunggu_verifikasi');
            $table->foreignId('diverifikasi_oleh')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_bimbingan');
    }
};
