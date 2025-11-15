<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RiwayatLaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data riwayat untuk setiap laporan
        $riwayats = [
            // Laporan 1: Lengkap sampai selesai
            [
                'id_laporan' => 1,
                'status' => 'menunggu',
                'tanggapan' => 'Laporan Anda telah kami terima dan sedang menunggu verifikasi dari tim kami.',
                'tanggal' => Carbon::now()->subDays(25),
            ],
            [
                'id_laporan' => 1,
                'status' => 'terverifikasi',
                'tanggapan' => 'Laporan telah diverifikasi dan akan segera ditindaklanjuti oleh tim lapangan.',
                'tanggal' => Carbon::now()->subDays(24),
            ],
            [
                'id_laporan' => 1,
                'status' => 'diproses',
                'tanggapan' => 'Tim lapangan sedang melakukan perbaikan di lokasi yang dilaporkan.',
                'tanggal' => Carbon::now()->subDays(23),
            ],
            [
                'id_laporan' => 1,
                'status' => 'selesai',
                'tanggapan' => 'Perbaikan telah selesai dilakukan. Terima kasih atas laporannya.',
                'tanggal' => Carbon::now()->subDays(20),
            ],

            // Laporan 2: Baru verifikasi
            [
                'id_laporan' => 2,
                'status' => 'menunggu',
                'tanggapan' => 'Laporan Anda sedang dalam antrian verifikasi.',
                'tanggal' => Carbon::now()->subDays(17),
            ],
            [
                'id_laporan' => 2,
                'status' => 'terverifikasi',
                'tanggapan' => 'Telah diverifikasi. Tim akan melakukan survei lapangan lebih lanjut.',
                'tanggal' => Carbon::now()->subDays(16),
            ],

            // Laporan 3: Sedang diproses
            [
                'id_laporan' => 3,
                'status' => 'menunggu',
                'tanggapan' => 'Terima kasih telah melaporkan masalah ini. Tim kami akan segera memeriksanya.',
                'tanggal' => Carbon::now()->subDays(10),
            ],
            [
                'id_laporan' => 3,
                'status' => 'terverifikasi',
                'tanggapan' => 'Masalah kualitas air telah dikonfirmasi. Kami akan melakukan pengujian laboratorium.',
                'tanggal' => Carbon::now()->subDays(9),
            ],
            [
                'id_laporan' => 3,
                'status' => 'diproses',
                'tanggapan' => 'Hasil pengujian menunjukkan adanya kontaminasi. Perbaikan sistem sedang dilakukan.',
                'tanggal' => Carbon::now()->subDays(7),
            ],

            // Laporan 4: Menunggu verifikasi
            [
                'id_laporan' => 4,
                'status' => 'menunggu',
                'tanggapan' => 'Laporan diterima. Akan dilakukan inspeksi dalam 3 hari kerja.',
                'tanggal' => Carbon::now()->subDays(8),
            ],

            // Laporan 5: Baru diterima
            [
                'id_laporan' => 5,
                'status' => 'menunggu',
                'tanggapan' => 'Laporan masalah tekanan air telah kami catat. Akan segera diperiksa.',
                'tanggal' => Carbon::now()->subDays(5),
            ],

            // Laporan 6: Dikembalikan
            [
                'id_laporan' => 6,
                'status' => 'menunggu',
                'tanggapan' => 'Laporan diterima dan sedang dalam proses verifikasi.',
                'tanggal' => Carbon::now()->subDays(3),
            ],
            [
                'id_laporan' => 6,
                'status' => 'dikembalikan',
                'tanggapan' => 'Data laporan tidak lengkap. Mohon cantumkan dokumentasi foto yang lebih jelas. Silakan ajukan kembali laporan ini.',
                'tanggal' => Carbon::now()->subDays(2),
            ],

            // Laporan 7: Baru
            [
                'id_laporan' => 7,
                'status' => 'menunggu',
                'tanggapan' => 'Laporan debit air rendah telah diterima. Akan kami investigasi lebih lanjut.',
                'tanggal' => Carbon::now()->subDays(2),
            ],

            // Laporan 8: Paling terbaru
            [
                'id_laporan' => 8,
                'status' => 'menunggu',
                'tanggapan' => 'Laporan penyumbatan saluran telah kami terima. Prioritas untuk dibersihkan minggu ini.',
                'tanggal' => Carbon::now()->subDays(1),
            ],
        ];

        DB::table('riwayat_laporan')->insert($riwayats);
    }
}
