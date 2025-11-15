<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat beberapa test users (lengkap dengan NIK dan foto profil dummy)
        User::factory()->create([
            'name' => 'Ahmad Fauzi',
            'email' => 'ahmad@example.com',
            'password' => bcrypt('password'),
            'nik' => '1234567890123456',
            'profile_picture' => 'images/users/ahmad.png',
        ]);

        User::factory()->create([
            'name' => 'Siti Nurhaliza',
            'email' => 'siti@example.com',
            'password' => bcrypt('password'),
            'nik' => '2345678901234567',
            'profile_picture' => 'images/users/siti.png',
        ]);

        User::factory()->create([
            'name' => 'Anonim',
            'email' => 'anonim@example.com',
            'password' => bcrypt('password'),
            'nik' => '0000000000000000',
            'profile_picture' => null,
        ]);

        // Jalankan seeders berurutan: laporan, riwayat laporan, saran
        $this->call([ 
            LaporanSeeder::class,
            RiwayatLaporanSeeder::class,
            SaranSeeder::class,
        ]);
    }
}
