@extends('layouts.public')

@section('content')
<!-- Header Section -->
<header class="bg-white shadow-sm py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-600">JagaAir.id</h1>
        <nav class="flex space-x-6">
            <a href="/" class="hover:text-blue-600">Beranda</a>
            <a href="/dashboard" class="hover:text-blue-600">Buat Laporan</a>
            <a href="/kotak_saran" class="hover:text-blue-600">Cari Laporan</a>
            <a href="/saran" class="font-semibold text-blue-600 hover:text-blue-800">Saran</a> <!-- Aktif -->
        </nav>
        <div class="flex items-center space-x-4">
            <a href="/sign_up" class="bg-blue-500 text-white px-4 py-2 rounded font-medium hover:bg-blue-600">Sign Up</a>
            <a href="/sign_in" class="bg-gray-200 text-gray-800 px-4 py-2 rounded font-medium hover:bg-gray-300">Login</a>
        </div>
    </div>
</header>

<!-- Main Content Section with Background Image -->
<div class="relative min-h-screen bg-gradient-to-br from-blue-500 to-blue-600 overflow-hidden">
    <!-- Background Abstract Shapes -->
    <div class="absolute inset-0 opacity-20">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="wave" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M0,50 Q25,25 50,50 T100,50 M0,50 Q25,75 50,50 T100,50" fill="none" stroke="#fff" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#wave)" />
        </svg>
    </div>

    <!-- Form Container -->
    <div class="container mx-auto px-4 pt-12 pb-24 relative z-10">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden flex">
            <!-- Left Side - Logo and Description -->
            <div class="w-1/2 p-8 flex flex-col justify-center items-center bg-blue-50">
                <img src="https://via.placeholder.com/150/0091AA/FFFFFF?text=JagaAir.id" alt="Logo JagaAir.id" class="mb-4">
                <p class="text-center text-gray-600 mt-2">Platform pelaporan masalah air bersih dan sanitasi untuk Kota Malang.</p>
            </div>

            <!-- Right Side - Form -->
            <div class="w-1/2 p-8">
                <h2 class="text-xl font-bold mb-6">Form Saran</h2>
                <form>
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama :</label>
                        <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Ahmad Fauzi">
                    </div>
                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select id="kategori" name="kategori" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Pilih Kategori</option>
                            <option value="infrastruktur">Infrastruktur Air</option>
                            <option value="sanitasi">Sanitasi</option>
                            <option value="pelayanan">Pelayanan & Respons Petugas</option>
                            <option value="edukasi">Edukasi & Sosialisasi</option>
                            <option value="inovasi">Inovasi & Ide Baru</option>
                            <option value="sistem">Sistem & Aplikasi</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="isi_saran" class="block text-sm font-medium text-gray-700">Isi Saran :</label>
                        <textarea id="isi_saran" name="isi_saran" rows="5" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Deskripsi Saran"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        KIRIM
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="bg-cover bg-center bg-no-repeat py-12" style="background-image: url('https://cdn.discordapp.com/attachments/1300000000000000000/1300000000000000000/water-globe.jpg')">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div>
                <h3 class="text-xl font-bold text-white mb-4">JagaAir.id</h3>
                <p class="text-gray-300 mb-4">
                    Platform pelaporan masalah air bersih dan sanitasi untuk Kota Malang. Bersama kita wujudkan lingkungan yang bersih dan bebas dari banjir.
                </p>
                <p class="text-gray-400 text-sm">© 2025 All Rights Reserved</p>
            </div>

            <!-- Middle Column -->
            <div class="text-center">
                <h4 class="text-white font-semibold mb-4">Follow us</h4>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-white hover:text-blue-300"><i class="bi bi-whatsapp text-xl"></i></a>
                    <a href="#" class="text-white hover:text-blue-300"><i class="bi bi-twitter-x text-xl"></i></a>
                    <a href="#" class="text-white hover:text-blue-300"><i class="bi bi-instagram text-xl"></i></a>
                    <a href="#" class="text-white hover:text-blue-300"><i class="bi bi-facebook text-xl"></i></a>
                </div>
                <h4 class="text-white font-semibold mt-6 mb-2">Call us</h4>
                <p class="text-gray-300">+1 800 854-36-80</p>
            </div>

            <!-- Right Column -->
            <div>
                <h4 class="text-white font-semibold mb-4">Sitemap</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="text-gray-300 hover:text-white">Beranda</a></li>
                    <li><a href="/dashboard" class="text-gray-300 hover:text-white">Buat Laporan</a></li>
                    <li><a href="/kotak_saran" class="text-gray-300 hover:text-white">Cari Laporan</a></li>
                    <li><a href="/saran" class="text-gray-300 hover:text-white">Saran</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection