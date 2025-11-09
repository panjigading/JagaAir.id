<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Laporan - JagaAir.ID</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pontano+Sans&family=Gentium+Plus:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Import dari homepage.css yang relevan */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #76d6ff;
            --primary-dark: #253a5a;
            --accent-color: #4a90e2;
            --text-light: #ffffff;
            --text-dark: #253a5a;
            --bg-light: #fbfcff;
            --border-color: #e5e7eb;
            --shadow-sm: 0px 2px 4px rgba(0, 0, 0, 0.1);
            --shadow-md: 0px 3px 5px rgba(0, 0, 0, 0.25);
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

        /* Navbar sama seperti homepage */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), transparent);
            padding: 20px 0;
            transition: background 0.3s ease;
        }

        .navbar.scrolled {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), transparent);
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 24px;
            font-weight: bold;
            color: var(--text-light);
            opacity: 0;
            animation: fadeInDown 0.8s ease forwards;
        }

        .brand-logo-png {
            height: 40px;
            width: auto;
            object-fit: contain;
        }

        .navbar-menu {
            display: flex;
            list-style: none;
            gap: 40px;
            opacity: 0;
            animation: fadeInDown 0.8s ease 0.1s forwards;
        }

        .nav-link {
            color: var(--text-light);
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            position: relative;
            transition: var(--transition);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .navbar-auth {
            display: flex;
            gap: 12px;
            align-items: center;
            opacity: 0;
            animation: fadeInDown 0.8s ease 0.2s forwards;
        }

        .btn-signin {
            padding: 10px 24px;
            background-color: transparent;
            color: var(--text-light);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }

        .btn-signin:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .btn-signup {
            padding: 10px 24px;
            background-color: var(--primary-color);
            color: var(--text-dark);
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-signup:hover {
            background-color: #5bc9ff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(118, 214, 255, 0.4);
        }

        /* Footer sama seperti homepage */
        .footer-section {
            background: linear-gradient(180deg, var(--primary-dark) 0%, #1a2a42 100%);
            color: var(--text-light);
            padding: 60px 40px 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto 40px;
        }

        .footer-column {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }

        .footer-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .footer-subtitle {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer-text {
            font-size: 14px;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 20px;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .social-link {
            display: inline-flex;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.1);
            color: whitesmoke;
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-link:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-link {
            color: var(--text-light);
            text-decoration: none;
            font-size: 14px;
            transition: var(--transition);
            opacity: 0.9;
        }

        .footer-link:hover {
            opacity: 1;
            padding-left: 8px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            text-align: center;
        }

        .footer-copyright {
            font-size: 13px;
            opacity: 0.8;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Main content padding */
        .main-content {
            padding-top: 0;
        }

        /* Status badges */
        .status-badge {
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-menunggu {
            background-color: #e5e7eb;
            color: #374151;
        }

        .status-terverifikasi {
            background-color: #3b82f6;
            color: white;
        }

        .status-diproses {
            background-color: #f59e0b;
            color: white;
        }

        .status-selesai {
            background-color: #10b981;
            color: white;
        }

        .status-ditolak {
            background-color: #ef4444;
            color: white;
        }

        /* Card hover effect */
        .report-card {
            transition: all 0.3s ease;
        }

        .report-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-container {
                flex-wrap: wrap;
                padding: 0 20px;
            }

            .navbar-menu {
                gap: 20px;
                order: 3;
                width: 100%;
                margin-top: 20px;
                justify-content: center;
            }

            .navbar-auth {
                order: 2;
                gap: 8px;
            }

            .btn-signin, .btn-signup {
                padding: 8px 16px;
                font-size: 13px;
            }

            .brand-logo-png {
                height: 32px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 480px) {
            .navbar-auth {
                gap: 6px;
            }

            .btn-signin, .btn-signup {
                padding: 7px 14px;
                font-size: 12px;
            }

            .brand-logo-png {
                height: 28px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <!-- Header Banner (Hero Section) -->
        <header class="hero-section relative h-96 bg-cover bg-center overflow-hidden" style="background-image: url('../images/hero-bg-1.jpg');">
            <!-- Hero Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>

            <!-- Navbar (SAMA DENGAN HOMEPAGE) -->
            <nav class="navbar absolute top-0 left-0 w-full z-20">
                <div class="navbar-container">
                    <div class="navbar-brand">
                        <img src="{{ asset('images/logo-jagaair-bright.png') }}" alt="JagaAir.ID" class="brand-logo-png">
                    </div>
                    <ul class="navbar-menu">
                        <li><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
                        <li><a href="{{ route('home') }}#buat-laporan" class="nav-link">Buat Laporan</a></li>
                        <li><a href="{{ route('cari_laporan') }}" class="nav-link">Cari Laporan</a></li>
                        <li><a href="{{ route('form_saran') }}" class="nav-link">Saran</a></li>
                    </ul>
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
            <div class="relative z-10 container mx-auto px-6 pt-24 pb-16 text-white text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Lihat Kondisi Air di Sekitar Anda</h1>
                <p class="text-lg md:text-xl mb-8">Gunakan fitur pencarian dan filter untuk memantau laporan masalah air dari masyarakat Kota Malang.</p>

                <!-- Search Bar -->
                <form method="GET" action="" class="max-w-4xl mx-auto">
                    <div class="flex items-center rounded-full bg-white p-2 shadow-lg">
                        <input type="text" name="q" placeholder="Cari laporan berdasarkan alamat atau kata kunci" class="flex-grow px-4 py-2 text-gray-800 focus:outline-none rounded-l-full">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full transition">
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
                    <select name="kecamatan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Pilih Kecamatan</option>
                        <option value="lowokwaru">Lowokwaru</option>
                        <option value="klojen">Klojen</option>
                        <option value="blimbing">Blimbing</option>
                        <option value="sukun">Sukun</option>
                    </select>
                </div>
                <!-- Kelurahan -->
                <div class="bg-white rounded-lg shadow p-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kelurahan</label>
                    <select name="kelurahan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Pilih Kelurahan</option>
                        <option value="jatimulyo">Jatimulyo</option>
                        <option value="tlogomas">Tlogomas</option>
                        <option value="kotalama">Kotalama</option>
                        <option value="buring">Buring</option>
                    </select>
                </div>
                <!-- Kategori -->
                <div class="bg-white rounded-lg shadow p-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select name="kategori" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Pilih Kategori</option>
                        <option value="sanitasi">Sanitasi</option>
                        <option value="infrastruktur">Infrastruktur Air</option>
                        <option value="kualitas_air">Kualitas Air</option>
                        <option value="banjir">Banjir</option>
                    </select>
                </div>
                <!-- Status -->
                <div class="bg-white rounded-lg shadow p-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select name="status" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Pilih Status</option>
                        <option value="menunggu">Menunggu Verifikasi</option>
                        <option value="diproses">Diproses</option>
                        <option value="selesai">Selesai</option>
                        <option value="ditolak">Dikembalikan</option>
                    </select>
                </div>
            </div>

            <!-- Results Counter -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Menampilkan 6 laporan ditemukan</h2>
            </div>

            <!-- Results Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @for ($i = 1; $i <= 6; $i++)
                <div class="report-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="flex flex-col sm:flex-row">
                        <img src="https://images.unsplash.com/photo-1504235777517-95f6b4d09e20?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Laporan" class="w-full sm:w-1/3 h-48 sm:h-auto object-cover">
                        <div class="p-4 flex-1">
                            <h3 class="font-bold text-gray-800 mb-2">Judul Laporan {{ $i }}</h3>
                            <div class="space-y-1 text-sm text-gray-600 mb-3">
                                <div class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-xs text-blue-500"></i> Lowokwaru, Jatimulyo</div>
                                <div class="flex items-center"><i class="far fa-calendar mr-2 text-xs text-blue-500"></i> {{ \Carbon\Carbon::now()->subDays(7 - $i)->format('d F Y') }}</div>
                                <div class="flex items-center"><i class="far fa-user mr-2 text-xs text-blue-500"></i> (ANONIM)</div>
                                <div class="flex items-center"><i class="fas fa-tags mr-2 text-xs text-blue-500"></i> Infrastruktur Air</div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="status-badge status-menunggu">MENUNGGU VERIFIKASI</span>
                                <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-4 py-2 rounded transition">DETAIL</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="flex space-x-2">
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-50 transition">Previous</button>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded">1</button>
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-50 transition">2</button>
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-50 transition">3</button>
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-50 transition">Next</button>
                </nav>
            </div>
        </section>
    </div>

    <!-- Footer (SAMA DENGAN HOMEPAGE) -->
    <footer class="footer-section" 
        id="hubungi"  
        style="background-size: cover; background-image: url('../images/hero-bg-1.jpg');">
        
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
                    <li><a href="{{ route('home') }}#buat-laporan" class="footer-link">Buat Laporan</a></li>
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

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

        document.addEventListener('DOMContentLoaded', function () {
            initNavbar();
            initFooter();
            initCards();
        });

        function initNavbar() {
            const navbar = document.querySelector('.navbar');
            const navLinks = document.querySelectorAll('.nav-link');
            const btnSignin = document.querySelector('.btn-signin');
            const btnSignup = document.querySelector('.btn-signup');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            navLinks.forEach(link => {
                link.addEventListener('mouseenter', function () {
                    gsap.to(this, { color: '#76d6ff', duration: 0.3, ease: 'power2.out' });
                });
                link.addEventListener('mouseleave', function () {
                    gsap.to(this, { color: '#ffffff', duration: 0.3, ease: 'power2.out' });
                });
            });

            [btnSignin, btnSignup].forEach(btn => {
                if (btn) {
                    btn.addEventListener('mouseenter', function () {
                        gsap.to(this, { scale: 1.05, duration: 0.3, ease: 'back.out(1.7)' });
                    });
                    btn.addEventListener('mouseleave', function () {
                        gsap.to(this, { scale: 1, duration: 0.3, ease: 'back.out(1.7)' });
                    });
                }
            });
        }

        function initFooter() {
            const socialLinks = document.querySelectorAll('.social-link');
            const footerLinks = document.querySelectorAll('.footer-link');

            socialLinks.forEach(link => {
                link.addEventListener('mouseenter', function () {
                    gsap.to(this, { y: -5, scale: 1.1, duration: 0.3, ease: 'back.out(1.7)' });
                });
                link.addEventListener('mouseleave', function () {
                    gsap.to(this, { y: 0, scale: 1, duration: 0.3, ease: 'back.out(1.7)' });
                });
            });

            footerLinks.forEach(link => {
                link.addEventListener('mouseenter', function () {
                    gsap.to(this, { paddingLeft: '8px', color: '#76d6ff', duration: 0.3, ease: 'power2.out' });
                });
                link.addEventListener('mouseleave', function () {
                    gsap.to(this, { paddingLeft: '0px', color: '#ffffff', duration: 0.3, ease: 'power2.out' });
                });
            });

            gsap.utils.toArray('.footer-column').forEach((column, index) => {
                gsap.from(column, {
                    scrollTrigger: {
                        trigger: '.footer-section',
                        start: 'top 80%',
                        toggleActions: 'play none none reverse'
                    },
                    opacity: 0,
                    y: 30,
                    duration: 0.6,
                    delay: index * 0.1,
                    ease: 'power2.out'
                });
            });
        }

        function initCards() {
            const cards = document.querySelectorAll('.report-card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', function () {
                    gsap.to(this, { y: -8, duration: 0.3, ease: 'power2.out' });
                });
                card.addEventListener('mouseleave', function () {
                    gsap.to(this, { y: 0, duration: 0.3, ease: 'power2.out' });
                });
            });

            gsap.utils.toArray('.report-card').forEach((card, index) => {
                gsap.from(card, {
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 90%',
                        toggleActions: 'play none none reverse'
                    },
                    opacity: 0,
                    y: 40,
                    duration: 0.6,
                    delay: (index % 2) * 0.1,
                    ease: 'power2.out'
                });
            });
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    gsap.to(window, {
                        duration: 0.8,
                        scrollTo: {
                            y: target,
                            offsetY: 80
                        },
                        ease: 'power2.inOut'
                    });
                }
            });
        });
    </script>
</body>
</html>