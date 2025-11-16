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
            $table->id('id_saran');
            $table->date('tanggal');
            $table->string('kategori', 100);
            $table->text('isi_saran');
            $table->timestamps();

            $table->foreignId('id_pengguna')->nullable()
                ->constrained('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saran');
    }
};
