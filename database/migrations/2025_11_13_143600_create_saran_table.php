<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('saran', function (Blueprint $table) {
            $table->id('id_saran'); // Primary Key
            $table->date('tanggal');
            $table->string('kategori', 100);
            $table->text('isi_saran');
            $table->timestamps();

            // Relasi ke tabel pengguna
            $table->foreignId('id_pengguna')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Balikkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('saran');
    }
};
