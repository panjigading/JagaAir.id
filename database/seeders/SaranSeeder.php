<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $saran = [
            [
                'tanggal' => Carbon::now()->subDays(20),
                'kategori' => 'Edukasi & Sosialisasi',
                'isi_saran' => 'Perlu dilakukan sosialisasi kepada warga tentang cara membuang sampah agar tidak menyumbat saluran air.',
                'id_pengguna' => 1,
                'created_at' => Carbon::now()->subDays(20),
                'updated_at' => Carbon::now()->subDays(20),
            ],
            [
                'tanggal' => Carbon::now()->subDays(15),
                'kategori' => 'Pelayanan & Respons Petugas',
                'isi_saran' => 'Tingkatkan respons tim lapangan saat menerima laporan, termasuk update progres secara berkala.',
                'id_pengguna' => 2,
                'created_at' => Carbon::now()->subDays(15),
                'updated_at' => Carbon::now()->subDays(15),
            ],
            [
                'tanggal' => Carbon::now()->subDays(5),
                'kategori' => 'Inovasi & Ide Baru',
                'isi_saran' => 'Sediakan fitur pelaporan dengan kategori lebih spesifik untuk memudahkan penanganan.',
                'id_pengguna' => 3,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
        ];

        DB::table('saran')->insert($saran);
    }
}
