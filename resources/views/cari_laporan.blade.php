<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Laporan - JagaAir.ID</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Gaya Navbar */
        .navbar {
            @apply bg-white shadow-md fixed top-0 left-0 w-full z-50;
        }
        .navbar-container {
            @apply flex items-center justify-between container mx-auto px-6 py-3;
        }
        .navbar-brand {
            @apply flex items-center space-x-2;
        }
        .brand-logo {
            @apply h-10 w-10;
        }
        .brand-name {
            @apply text-xl font-bold text-blue-600;
        }
        .navbar-menu {
            @apply hidden md:flex space-x-8;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 font-medium;
        }
        .btn-login {
            @apply bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50 pt-16"> <!-- Tambahkan pt-16 agar konten tidak tertutup navbar -->

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-brand">
                <img src="{{ asset('images/icon.svg') }}" alt="JagaAir.ID" class="brand-logo">
                <span class="brand-name">JagaAir.ID</span>
            </div>
            <ul class="navbar-menu">
                <li><a href="/" class="nav-link">Beranda</a></li>
                <li><a href="/buat-laporan" class="nav-link">Buat Laporan</a></li>
                <li><a href="#laporan" class="nav-link">Cari Laporan</a></li>
                <li><a href="#hubungi" class="nav-link">Saran</a></li>
            </ul>
            <button class="btn-login">Masuk</button>
        </div>
    </nav>

    <!-- Header Banner -->
    <header class="relative h-96 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1504235777517-95f6b4d09e20?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative z-10 container mx-auto px-6 py-16 text-white text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Lihat Kondisi Air di Sekitar Anda</h1>
            <p class="text-lg md:text-xl mb-8">Gunakan fitur pencarian dan filter untuk memantau laporan masalah air dari masyarakat Kota Malang.</p>

            <!-- Search Bar -->
            <form method="GET" action="" class="max-w-4xl mx-auto">
                <div class="flex items-center rounded-full bg-white p-2 shadow-lg">
                    <input
                        type="text"
                        name="q"
                        placeholder="Cari laporan berdasarkan alamat atau kata kunci"
                        value="{{ request('q') }}"
                        class="flex-grow px-4 py-2 text-gray-800 focus:outline-none"
                    >
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </header>

    <!-- Filters Section -->
    <section class="container mx-auto px-6 py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <!-- Kecamatan -->
            <div class="bg-white rounded-lg shadow p-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Kecamatan</label>
                <select name="kecamatan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Occupation</option>
                    <option value="lowokwaru">Lowokwaru</option>
                    <option value="klojen">Klojen</option>
                    <option value="blimbing">Blimbing</option>
                    <option value="sukun">Sukun</option>
                </select>
                <div class="mt-4 space-y-2">
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                </div>
            </div>

            <!-- Kelurahan -->
            <div class="bg-white rounded-lg shadow p-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Kelurahan</label>
                <select name="kelurahan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Occupation</option>
                    <option value="jatimulyo">Jatimulyo</option>
                    <option value="tlogomas">Tlogomas</option>
                    <option value="kotalama">Kotalama</option>
                    <option value="buring">Buring</option>
                </select>
                <div class="mt-4 space-y-2">
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                </div>
            </div>

            <!-- Kategori -->
            <div class="bg-white rounded-lg shadow p-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                <select name="kategori" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Occupation</option>
                    <option value="sanitasi">Sanitasi</option>
                    <option value="infrastruktur">Infrastruktur Air</option>
                    <option value="kualitas_air">Kualitas Air</option>
                    <option value="banjir">Banjir</option>
                </select>
                <div class="mt-4 space-y-2">
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                </div>
            </div>

            <!-- Status -->
            <div class="bg-white rounded-lg shadow p-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select name="status" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Occupation</option>
                    <option value="menunggu">Menunggu Verifikasi</option>
                    <option value="terverifikasi">Terverifikasi</option>
                    <option value="diproses">Sedang Diproses</option>
                    <option value="selesai">Selesai</option>
                    <option value="ditolak">Ditolak</option>
                </select>
                <div class="mt-4 space-y-2">
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                    <div class="px-3 py-2 border border-gray-200 rounded cursor-pointer hover:bg-gray-50">Item</div>
                </div>
            </div>
        </div>

        <!-- Results Counter -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700">“Menampilkan 6 laporan ditemukan”</h2>
        </div>

        <!-- Results Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Sample Report Card 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex">
                    <img src="https://images.unsplash.com/photo-1504235777517-95f6b4d09e20?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Laporan" class="w-1/3 object-cover">
                    <div class="p-4 flex-1">
                        <h3 class="font-bold text-gray-800 mb-2">Sanitasi buruk daerah jembatan suhat</h3>
                        <div class="space-y-1 text-sm text-gray-600">
                            <div class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-xs"></i> Lowokwaru, Jatimulyo</div>
                            <div class="flex items-center"><i class="far fa-calendar mr-2 text-xs"></i> 20 Maret 2025</div>
                            <div class="flex items-center"><i class="far fa-user mr-2 text-xs"></i> (ANONIM)</div>
                            <div class="flex items-center"><i class="fas fa-tags mr-2 text-xs"></i> Infrastruktur Air</div>
                            <div class="flex items-center"><i class="far fa-file-alt mr-2 text-xs"></i> ooo</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-gray-200 text-gray-800 rounded">MENUNGGU VERIFIKASI</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded">DETAIL</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sample Report Card 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex">
                    <img src="https://images.unsplash.com/photo-1504235777517-95f6b4d09e20?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Laporan" class="w-1/3 object-cover">
                    <div class="p-4 flex-1">
                        <h3 class="font-bold text-gray-800 mb-2">Sanitasi buruk daerah jembatan suhat</h3>
                        <div class="space-y-1 text-sm text-gray-600">
                            <div class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-xs"></i> Lowokwaru, Jatimulyo</div>
                            <div class="flex items-center"><i class="far fa-calendar mr-2 text-xs"></i> 20 Maret 2025</div>
                            <div class="flex items-center"><i class="far fa-user mr-2 text-xs"></i> (ANONIM)</div>
                            <div class="flex items-center"><i class="fas fa-tags mr-2 text-xs"></i> Infrastruktur Air</div>
                            <div class="flex items-center"><i class="far fa-file-alt mr-2 text-xs"></i> ooo</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-blue-500 text-white rounded">TERVERIFIKASI</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded">DETAIL</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sample Report Card 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex">
                    <img src="https://images.unsplash.com/photo-1504235777517-95f6b4d09e20?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Laporan" class="w-1/3 object-cover">
                    <div class="p-4 flex-1">
                        <h3 class="font-bold text-gray-800 mb-2">Sanitasi buruk daerah jembatan suhat</h3>
                        <div class="space-y-1 text-sm text-gray-600">
                            <div class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-xs"></i> Lowokwaru, Jatimulyo</div>
                            <div class="flex items-center"><i class="far fa-calendar mr-2 text-xs"></i> 20 Maret 2025</div>
                            <div class="flex items-center"><i class="far fa-user mr-2 text-xs"></i> AHMAD FAUZI</div>
                            <div class="flex items-center"><i class="fas fa-tags mr-2 text-xs"></i> Infrastruktur Air</div>
                            <div class="flex items-center"><i class="far fa-file-alt mr-2 text-xs"></i> ooo</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-yellow-500 text-white rounded">SEDANG DIPROSES</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded">DETAIL</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sample Report Card 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex">
                    <img src="https://images.unsplash.com/photo-1504235777517-95f6b4d09e20?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Laporan" class="w-1/3 object-cover">
                    <div class="p-4 flex-1">
                        <h3 class="font-bold text-gray-800 mb-2">Sanitasi buruk daerah jembatan suhat</h3>
                        <div class="space-y-1 text-sm text-gray-600">
                            <div class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-xs"></i> Lowokwaru, Jatimulyo</div>
                            <div class="flex items-center"><i class="far fa-calendar mr-2 text-xs"></i> 20 Maret 2025</div>
                            <div class="flex items-center"><i class="far fa-user mr-2 text-xs"></i> (ANONIM)</div>
                            <div class="flex items-center"><i class="fas fa-tags mr-2 text-xs"></i> Infrastruktur Air</div>
                            <div class="flex items-center"><i class="far fa-file-alt mr-2 text-xs"></i> ooo</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-green-500 text-white rounded">SELESAI</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded">DETAIL</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sample Report Card 5 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex">
                    <img src="https://images.unsplash.com/photo-1504235777517-95f6b4d09e20?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Laporan" class="w-1/3 object-cover">
                    <div class="p-4 flex-1">
                        <h3 class="font-bold text-gray-800 mb-2">Sanitasi buruk daerah jembatan suhat</h3>
                        <div class="space-y-1 text-sm text-gray-600">
                            <div class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-xs"></i> Lowokwaru, Jatimulyo</div>
                            <div class="flex items-center"><i class="far fa-calendar mr-2 text-xs"></i> 20 Maret 2025</div>
                            <div class="flex items-center"><i class="far fa-user mr-2 text-xs"></i> (ANONIM)</div>
                            <div class="flex items-center"><i class="fas fa-tags mr-2 text-xs"></i> Infrastruktur Air</div>
                            <div class="flex items-center"><i class="far fa-file-alt mr-2 text-xs"></i> ooo</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-red-500 text-white rounded">DITOLAK</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded">DETAIL</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sample Report Card 6 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex">
                    <img src="https://images.unsplash.com/photo-1504235777517-95f6b4d09e20?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Laporan" class="w-1/3 object-cover">
                    <div class="p-4 flex-1">
                        <h3 class="font-bold text-gray-800 mb-2">Sanitasi buruk daerah jembatan suhat</h3>
                        <div class="space-y-1 text-sm text-gray-600">
                            <div class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-xs"></i> Lowokwaru, Jatimulyo</div>
                            <div class="flex items-center"><i class="far fa-calendar mr-2 text-xs"></i> 20 Maret 2025</div>
                            <div class="flex items-center"><i class="far fa-user mr-2 text-xs"></i> (ANONIM)</div>
                            <div class="flex items-center"><i class="fas fa-tags mr-2 text-xs"></i> Infrastruktur Air</div>
                            <div class="flex items-center"><i class="far fa-file-alt mr-2 text-xs"></i> ooo</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-blue-500 text-white rounded">TERVERIFIKASI</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded">DETAIL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-xl font-bold">JagaAir.ID</h4>
                    <p class="text-sm mt-2">Platform pelaporan masalah air bersih untuk Kota Malang</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="mt-6 pt-6 border-t border-gray-700 text-center text-sm">
                &copy; 2024 JagaAir.ID. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>