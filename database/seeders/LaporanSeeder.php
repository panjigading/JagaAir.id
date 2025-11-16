<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;  
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data dummy laporan
        $laporans = [
            [
                'alamat_lengkap' => 'Jl. Suhartono No. 15, RT 03 RW 02, Kelurahan Jatimulyo, Kecamatan Lowokwaru, Kota Malang',
                'kecamatan' => 'Lowokwaru',
                'kelurahan' => 'Jatimulyo',
                'kategori' => 'Infrastruktur Air',
                'detail' => 'Di sekitar kawasan jembatan Suhartono, Kecamatan Lowokwaru, Kota Malang, kondisi sanitasi terlihat memprihatinkan. Saluran air di area tersebut mengalami penyumbatan akibat penumpukan sampah rumah tangga dan lumpur, sehingga menimbulkan genangan air yang berbau tidak sedap. Situasi ini berpotensi menimbulkan gangguan kesehatan bagi warga sekitar serta menghambat aliran air ke saluran utama. Diharapkan pihak terkait dapat segera melakukan pembersihan dan perbaikan sistem drainase agar aliran air kembali lancar dan lingkungan tetap bersih.',
                'url_bukti' => 'images/bukti-laporan.png',
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(25),
                'updated_at' => Carbon::now()->subDays(25),
            ],
            [
                'alamat_lengkap' => 'Jl. Veteran No. 25, RT 02 RW 01, Kelurahan Purwantoro, Kecamatan Blimbing, Kota Malang',
                'kecamatan' => 'Blimbing',
                'kelurahan' => 'Purwantoro',
                'kategori' => 'Sanitasi',
                'detail' => 'Sistem penyaluran air limbah di wilayah Kelurahan Purwantoro mengalami kerusakan. Terdapat rembesan air kotor dari pipa utama yang meresap ke tanah di sekitar pemukiman warga. Hal ini dapat mengkontaminasi air tanah dan membahayakan kesehatan masyarakat sekitar. Perlu segera dilakukan perbaikan dan pengecekan saluran air limbah untuk mencegah permasalahan kesehatan yang lebih serius.',
                'url_bukti' => 'images/bukti-laporan-2.jpg',
                'user_id' => 2,
                'created_at' => Carbon::now()->subDays(17),
                'updated_at' => Carbon::now()->subDays(17),
            ],
            [
                'alamat_lengkap' => 'Jl. Gajayana No. 50, RT 01 RW 03, Kelurahan Karangbesuki, Kecamatan Sukun, Kota Malang',
                'kecamatan' => 'Sukun',
                'kelurahan' => 'Karangbesuki',
                'kategori' => 'Kualitas Air',
                'detail' => 'Kualitas air bersih yang dialirkan ke rumah-rumah warga di Jalan Gajayana terasa keruh dan berwarna kecokelatan. Diduga ada kontaminasi tanah ke dalam pipa distribusi air bersih. Warga mengeluhkan air tidak layak untuk konsumsi sehari-hari dan takut akan dampak kesehatan jangka panjang. Perlu dilakukan pengujian kualitas air dan perbaikan sistem distribusi segera.',
                'url_bukti' => 'images/bukti-laporan-3.jpg',
                'user_id' => 3,
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(10),
            ],
            [
                'alamat_lengkap' => 'Jl. Mawar No. 12, RT 04 RW 05, Kelurahan Dinoyo, Kecamatan Lowokwaru, Kota Malang',
                'kecamatan' => 'Lowokwaru',
                'kelurahan' => 'Dinoyo',
                'kategori' => 'Infrastruktur Air',
                'detail' => 'Pipa air bersih di kelurahan Dinoyo sering bocor dan menyebabkan pemborosan air. Kebocoran terjadi di beberapa titik strategis yang memerlukan perbaikan mendesak. Selain membuang air, kebocoran ini juga menjadi sumber genangan air yang dapat menjadi sarang nyamuk dan penyebaran penyakit. Harap segera dilakukan inspeksi dan perbaikan infrastruktur air.',
                'url_bukti' => 'images/bukti-laporan-4.jpeg',
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(8),
                'updated_at' => Carbon::now()->subDays(8),
            ],
            [
                'alamat_lengkap' => 'Jl. Arjuno No. 88, RT 06 RW 02, Kelurahan Rampal Celaket, Kecamatan Klojen, Kota Malang',
                'kecamatan' => 'Klojen',
                'kelurahan' => 'Rampal Celaket',
                'kategori' => 'Sistem Distribusi',
                'detail' => 'Sistem distribusi air di daerah Klojen mengalami tekanan rendah pada jam-jam tertentu. Warga sering mengalami kesulitan mendapatkan air pada pagi hari. Diduga ada masalah pada pompa distribusi atau pipa utama yang perlu diperiksa. Mohon tindakan cepat untuk memastikan pasokan air yang merata ke seluruh wilayah.',
                'url_bukti' => 'images/bukti-laporan-5.jpg',
                'user_id' => 2,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'alamat_lengkap' => 'Jl. Soetomo No. 35, RT 02 RW 04, Kelurahan Kesatrian, Kecamatan Blimbing, Kota Malang',
                'kecamatan' => 'Blimbing',
                'kelurahan' => 'Kesatrian',
                'kategori' => 'Hygiene & Kesehatan',
                'detail' => 'Genangan air di sekitar area MCK umum menjadi tempat berkumpulnya sampah dan menjadi kotor. Kondisi ini tidak hygienis dan dapat menjadi sumber penyakit. Perlu dilakukan pembersihan rutin dan perbaikan sistem drainase di sekitar area MCK untuk menjaga kebersihan dan kesehatan masyarakat.',
                'url_bukti' => 'images/bukti-laporan-6.jpg',
                'user_id' => 3,
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'alamat_lengkap' => 'Jl. Ahmad Yani No. 77, RT 05 RW 01, Kelurahan Sukun, Kecamatan Sukun, Kabupaten Malang',
                'kecamatan' => 'Sukun',
                'kelurahan' => 'Sukun',
                'kategori' => 'Infrastruktur Air',
                'detail' => 'Sumber air bersih di daerah Sukun terganggu akibat musim kemarau panjang. Debit air yang tersedia tidak mencukupi kebutuhan warga. Hal ini menyebabkan warga sulit mendapatkan air bersih untuk kebutuhan sehari-hari termasuk MCK dan pertanian. Perlu dilakukan pengeboran sumur alternatif atau perbaikan sistem penampungan air hujan.',
                'url_bukti' => 'images/bukti-laporan-7.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'alamat_lengkap' => 'Jl. Hayam Wuruk No. 25, RT 03 RW 02, Kelurahan Mojolangu, Kecamatan Lowokwaru, Kota Malang',
                'kecamatan' => 'Lowokwaru',
                'kelurahan' => 'Mojolangu',
                'kategori' => 'Penyumbatan Saluran',
                'detail' => 'Saluran drainase di Kelurahan Mojolangu mengalami penyumbatan total akibat sampah plastik dan endapan lumpur. Air tidak dapat mengalir dengan lancar dan menyebabkan banjir genangan di area jalan. Perlu dilakukan pembersihan saluran secara berkala dan edukasi kepada masyarakat tentang pentingnya menjaga kebersihan lingkungan.',
                'url_bukti' => 'images/bukti-laporan-8.jpeg',
                'user_id' => 2,
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1),
            ],
        ];

        DB::table('laporan')->insert($laporans);
    }
}
