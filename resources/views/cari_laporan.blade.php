<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Laporan - JagaAir.ID</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pontano+Sans&family=Gentium+Plus:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #76d6ff;
            --primary-dark: #253a5a;
            --text-light: #ffffff;
            --text-dark: #253a5a;
            --bg-light: #fbfcff;
            --transition: all 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Pontano Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-light);
            line-height: 1.6;
        }

        .hero-section {
            height: 400px;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .status-badge {
            text-transform: uppercase;
        }

        .report-card {
            transition: all 0.3s ease;
        }

        .report-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .footer-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/hero-bg-1.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 50px 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-link:hover {
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <div class="main-content">
        <!-- Header Banner -->
        <header class="hero-section relative bg-cover bg-center overflow-hidden" style="background-image: url('../images/hero-bg-1.jpg'); height: 400px; background-position: center top;">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>

            <!-- Navbar -->
            <nav class="navbar">
                <div class="navbar-container">
                    <div class="navbar-brand">
                        <img src="{{ asset('images/logo-jagaair-bright.png') }}" alt="JagaAir.ID" class="brand-logo-png">
                    </div>
                    <!-- Navigation Menu -->
                    <ul class="navbar-menu">
                        <li><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
                        <li><a href="{{ route('home') }}#buat-laporan" class="nav-link">Buat Laporan</a></li>
                        <li><a href="{{ route('cari_laporan') }}" class="nav-link">Cari Laporan</a></li>
                        <li><a href="{{ route('form_saran') }}" class="nav-link">Saran</a></li>
                    </ul>
                    <!-- Authentication Buttons -->
                    <div class="navbar-auth">
                        <a href="{{ route('sign_in') }}">
                            <button class="btn-signin">Sign In</button>
                        </a>
                        <a href="{{ route('sign_up') }}">
                            <button class="btn-signup">Sign Up</button>
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Hero Content -->
            <div class="relative z-10 text-white text-center flex flex-col justify-center items-center h-full">
                <h1 class="text-4xl font-bold mb-4">Cari Laporan Masalah Air</h1>
                <p class="text-lg mb-8">Gunakan filter dan pencarian untuk menemukan laporan masalah air di Kota Malang</p>

                <!-- Search Form -->
                <form method="GET" action="{{ route('cari_laporan') }}" class="max-w-2xl w-full px-6">
                    <div class="flex gap-2">
                        <input type="text" name="search" placeholder="Cari berdasarkan alamat..." class="flex-grow px-4 py-3 rounded-lg text-gray-800" value="{{ request('search') }}">
                        <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </header>

        <!-- Filters Section -->
        <section class="container mx-auto px-6 py-8">
            <form method="GET" action="{{ route('cari_laporan') }}" class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <!-- Kecamatan -->
                <div class="bg-white rounded-lg shadow p-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kecamatan</label>
                    <select id="kecamatanDropdown" name="kecamatan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Pilih Kecamatan</option>
                    </select>
                </div>

                <!-- Kelurahan -->
                <div class="bg-white rounded-lg shadow p-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kelurahan</label>
                    <select id="kelurahanDropdown" name="kelurahan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Pilih Kelurahan</option>
                    </select>
                </div>

                <!-- Kategori Filter -->
                <div class="bg-white rounded-lg shadow p-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select name="kategori" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Semua Kategori</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ request('kategori') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Status Filter -->
                <div class="bg-white rounded-lg shadow p-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select name="status" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Semua Status</option>
                        @foreach($statuses as $status)
                            <option value="{{ $status }}" {{ request('status') == $status ? 'selected' : '' }}>{{ ucfirst(str_replace('_', ' ', $status)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Search Button -->
                <div class="flex items-end col-span-1 md:col-span-4">
                    <button type="submit" class="w-full px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition font-medium">
                        <i class="fas fa-search"></i> Cari
                    </button>
                </div>
            </form>

            <!-- Results Counter -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Menampilkan {{ $laporans->total() }} laporan</h2>
            </div>

            <!-- Results Grid -->
            @if($laporans->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    @foreach($laporans as $laporan)
                        <div class="report-card bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="flex flex-col sm:flex-row">
                                <img src="{{ asset($laporan->url_bukti) }}" alt="Laporan" class="w-full sm:w-1/3 h-48 sm:h-auto object-cover">
                                <div class="p-4 flex-1">
                                    <div class="space-y-2 text-sm text-gray-600 mb-3">
                                        <div class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-xs text-blue-500"></i> {{ $laporan->kelurahan }}, {{ $laporan->kecamatan }}</div>
                                        <div class="flex items-center"><i class="far fa-calendar mr-2 text-xs text-blue-500"></i> {{ $laporan->created_at->format('d F Y') }}</div>
                                        <div class="flex items-center"><i class="far fa-user mr-2 text-xs text-blue-500"></i> {{ $laporan->user->name ?? 'ANONIM' }}</div>
                                        <div class="flex items-center"><i class="fas fa-tags mr-2 text-xs text-blue-500"></i> {{ $laporan->kategori }}</div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        @php
                                            $currentStatus = $laporan->latestRiwayat ? strtolower($laporan->latestRiwayat->status) : strtolower($laporan->status);
                                        @endphp
                                        <span class="status-badge px-3 py-1 rounded-full text-xs font-semibold
                                            @if($currentStatus == 'menunggu') bg-gray-500 text-white
                                            @elseif($currentStatus == 'terverifikasi') bg-blue-500 text-white
                                            @elseif($currentStatus == 'diproses') bg-yellow-500 text-white
                                            @elseif($currentStatus == 'selesai') bg-green-500 text-white
                                            @elseif($currentStatus == 'dikembalikan') bg-red-500 text-white
                                            @endif
                                        ">{{ ucfirst($currentStatus) }}</span>
                                        <a href="{{ route('detail_laporan', $laporan->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-4 py-2 rounded transition">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mb-8">
                    {{ $laporans->links() }}
                </div>
            @else
                <div class="bg-blue-50 border border-blue-200 text-blue-800 px-6 py-4 rounded-lg text-center">
                    <p class="text-lg">Tidak ada laporan yang sesuai dengan filter Anda.</p>
                </div>
            @endif
        </section>
    </div>

        <!-- Footer (match homepage layout; image/size kept as on this page) -->
        <footer class="footer-section" style="background-size: cover; background-image: url('../images/hero-bg-1.jpg');">
            <div class="footer-content">
                <div class="footer-column">
                    <h4 class="footer-title">JagaAir.ID</h4>
                    <p class="footer-text">Platform pelaporan masalah air bersih untuk Kota Malang</p>
                    <div class="footer-social">
                        <a href="#" class="social-link">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="footer-column">
                    <h5 class="footer-subtitle">Menu</h5>
                    <ul class="footer-links">
                        <li><a href="#buat-laporan" class="footer-link">Buat Laporan</a></li>
                        <li><a href="{{ route('cari_laporan') }}" class="footer-link">Cari Laporan</a></li>
                        <li><a href="{{ route('form_saran') }}" class="footer-link">Saran</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h5 class="footer-subtitle">Kontak</h5>
                    <ul class="footer-links">
                        <li><a href="mailto:info@jagaair.id" class="footer-link">info@jagaair.id</a></li>
                        <li><a href="tel:+6281234567890" class="footer-link">+62 812-3456-7890</a></li>
                        <li><a href="#" class="footer-link">Kota Malang, Jawa Timur</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="footer-copyright">&copy; 2025 JagaAir.ID. All rights reserved.</p>
            </div>
        </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="{{ asset('js/kelurahan_kecamatan.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });
    </script>
</body>
</html>
