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
        Schema::create('riwayat_laporan', function (Blueprint $table) {
            $table->id('id_riwayat');
            
            // Foreign key ke tabel laporan
            $table->foreignId('id_laporan')
                  ->constrained('laporan')
                  ->onDelete('cascade'); // Jika laporan dihapus, riwayatnya juga terhapus
            
            // Data riwayat (sesuai ERD)
            $table->text('tanggapan')->nullable(); // Feedback dari admin
            
            $table->string('status', 50); // Status laporan
            
            // Timestamp perubahan status
            $table->timestamp('tanggal')->useCurrent();
            $table->timestamps();
            
            // Indexes untuk optimasi query
            $table->index('id_laporan');
            $table->index('status');
            $table->index('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_laporan');
    }
};