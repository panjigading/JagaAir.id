<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan - JagaAir.ID</title>
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

        body {
            font-family: 'Pontano Sans', sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-light);
            line-height: 1.6;
        }

        .hero-section {
            height: 300px;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .detail-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 24px;
            margin-bottom: 20px;
        }

        .info-label {
            font-weight: bold;
            color: #555;
        }

        .timeline {
            position: relative;
            padding: 20px 0;
        }

        .timeline-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 20px;
        }

        .timeline-item:before {
            content: '';
            position: absolute;
            left: 10px;
            top: 10px;
            width: 4px;
            height: calc(100% + 20px);
            background-color: #ddd;
        }

        .timeline-dot {
            position: absolute;
            left: 7px;
            top: 10px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #6c757d;
        }

        .status-badge {
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 12px;
            font-weight: bold;
        }

        .feedback-box {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 10px;
        }

        .report-photo {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
            border-radius: 12px;
            margin: 20px 0;
        }

        /* Footer */
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
    </style>
</head>
<body>
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

    <!-- Header -->
    <header class="hero-section" style="background-image: url('../images/hero-bg-1.jpg'); background-position: center top;">
        <div class="hero-content relative z-10">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Detail Laporan</h1>
            <p class="text-lg">Informasi lengkap mengenai laporan masalah air</p>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-8">
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Detail Laporan Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Left Column: Info Laporan -->
            <div class="md:col-span-1">
                <div class="detail-card">
                    <div class="mb-4">
                        <span class="info-label">Kelurahan & Kecamatan:</span><br>
                        <span>{{ $report['location'] }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="info-label">Nama Pelapor:</span><br>
                        <span>{{ $report['name'] }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="info-label">Tanggal Pelaporan:</span><br>
                        <span>{{ $report['date'] }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="info-label">Kategori:</span><br>
                        <span>{{ $report['category'] }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="info-label">Status:</span><br>
                        <span class="status-badge px-3 py-1 rounded-full text-xs font-semibold
                            @if($report['status'] == 'MENUNGGU') bg-gray-500 text-white
                            @elseif($report['status'] == 'TERVERIFIKASI') bg-blue-500 text-white
                            @elseif($report['status'] == 'DIPROSES') bg-yellow-500 text-white
                            @elseif($report['status'] == 'SELESAI') bg-green-500 text-white
                            @elseif($report['status'] == 'DIKEMBALIKAN') bg-red-500 text-white
                            @endif">
                            {{ $report['status'] }}
                        </span>
                    </div>
                    <div>
                        <span class="info-label">Alamat Lengkap:</span><br>
                        <span>{{ $report['full_address'] }}</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Deskripsi & Gambar -->
            <div class="md:col-span-2">
                <div class="detail-card">
                    <h5 class="text-xl font-bold mb-4">Deskripsi Laporan</h5>
                    <p class="text-gray-700 mb-4">
                        {{ $report['detail'] }}
                    </p>

                    <!-- Single Photo Display -->
                    <div class="mb-4">
                        <h6 class="font-semibold mb-2">Dokumentasi Foto:</h6>
                        @if(!empty($report['url_bukti']))
                            @if(in_array(pathinfo($report['url_bukti'], PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                            <img src="{{  asset('storage/' . $report['url_bukti']) }}" alt="Foto Laporan" class="report-photo">
                            @else
                            <video controls class="w-full max-w-sm">
                                <source src="{{ asset('storage/' . $report['url_bukti']) }}" type="video/{{ pathinfo($filePath, PATHINFO_EXTENSION) }}">
                                Browser Anda tidak mendukung tag video.
                            </video>
                            @endif
                        @else
                            <p class="text-gray-500">Tidak ada foto dokumentasi</p>
                        @endif
                        <p class="text-sm text-gray-500 text-center">Difoto pada: {{ $report['date'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Riwayat Update Laporan Section -->
        <div class="detail-card mt-6">
            <h4 class="text-2xl font-bold mb-4">
                <i class="fas fa-history mr-2"></i>
                Riwayat Update Laporan
            </h4>

            <!-- Timeline -->
            <div class="timeline">
                @if(!empty($report['updates']))
                    @foreach($report['updates'] as $update)
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="status-badge px-3 py-1 rounded-full text-xs font-semibold
                                    @if(strtolower($update['status']) == 'menunggu') bg-gray-500 text-white
                                    @elseif(strtolower($update['status']) == 'terverifikasi') bg-blue-500 text-white
                                    @elseif(strtolower($update['status']) == 'diproses') bg-yellow-500 text-white
                                    @elseif(strtolower($update['status']) == 'selesai') bg-green-500 text-white
                                    @elseif(strtolower($update['status']) == 'dikembalikan') bg-red-500 text-white
                                    @endif">
                                    {{ ucfirst($update['status']) }}
                                </span>
                                <small class="text-gray-600">{{ $update['timestamp'] }}</small>
                            </div>
                            <div class="feedback-box">
                                <strong>Feedback dari Admin:</strong><br>
                                {{ $update['feedback'] }}
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-gray-500">Belum ada riwayat update untuk laporan ini.</p>
                @endif
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('cari_laporan') }}" class="inline-flex items-center px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Daftar Laporan
            </a>
        </div>
    </div>

        <!-- Footer (match homepage layout and add background image) -->
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
