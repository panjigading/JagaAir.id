<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan - JagaAir.ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pontano+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Pontano Sans', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: url('{{ asset('images/hero-bg-1.jpg') }}') no-repeat center center;
            background-size: cover;
            padding: 80px 20px;
            color: white;
            text-align: center;
        }
        .detail-card {
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-radius: 12px;
            margin-bottom: 20px;
        }
        .info-label {
            font-weight: bold;
            color: #555;
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
            z-index: -1;
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
            font-size: 0.75rem;
            padding: 4px 8px;
            border-radius: 12px;
            font-weight: bold;
        }
        .carousel-inner img {
            border-radius: 12px;
            height: 300px;
            object-fit: cover;
        }
        .feedback-box {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 10px;
        }
        .photo-carousel {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Lihat Kondisi Air di Sekitar Anda</h1>
        <p>Gunakan fitur pencarian dan filter untuk memantau laporan masalah air dari masyarakat Kota Malang.</p>
    </section>

    <!-- Main Content -->
    <div class="container mt-4 mb-5">
        <!-- Back Button -->
        <a href="{{ route('cari_laporan') }}" class="text-decoration-none mb-3 d-inline-block">
            <i class="fas fa-arrow-left me-1"></i>
            Kembali ke Cari Laporan
        </a>

        <!-- Detail Laporan Section -->
        <div class="row mt-4">
            <!-- Left Column: Info Laporan -->
            <div class="col-md-4">
                <div class="card detail-card">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="info-label">Kelurahan & Kecamatan:</span><br>
                            {{ $report['location'] }}
                        </div>
                        <div class="mb-3">
                            <span class="info-label">Nama Pelapor:</span><br>
                            {{ $report['name'] }}
                        </div>
                        <div class="mb-3">
                            <span class="info-label">Tanggal Pelaporan:</span><br>
                            {{ $report['date'] }}
                        </div>
                        <div class="mb-3">
                            <span class="info-label">Kategori:</span><br>
                            {{ $report['category'] }}
                        </div>
                        <div class="mb-3">
                            <span class="info-label">Alamat Lengkap:</span><br>
                            {{ $report['full_address'] }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Deskripsi & Gambar -->
            <div class="col-md-8">
                <div class="card detail-card">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi Laporan</h5>
                        <p class="card-text">
                            Di sekitar kawasan jembatan Suhartono, Kecamatan Lowokwaru, Kota Malang, kondisi sanitasi terlihat memprihatinkan. Saluran air di area tersebut mengalami penyumbatan akibat penumpukan sampah rumah tangga dan lumpur, sehingga menimbulkan genangan air yang berbau tidak sedap. Situasi ini berpotensi menimbulkan gangguan kesehatan bagi warga sekitar serta menghambat aliran air ke saluran utama. Diharapkan pihak terkait dapat segera melakukan pembersihan dan perbaikan sistem drainase agar aliran air kembali lancar dan lingkungan tetap bersih.
                        </p>

                        <!-- Photo Carousel -->
                        <div class="photo-carousel">
                            <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach($report['photos'] as $index => $photo)
                                        <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="{{ $index }}" 
                                            class="{{ $index == 0 ? 'active' : '' }}" 
                                            aria-current="{{ $index == 0 ? 'true' : 'false' }}" 
                                            aria-label="Slide {{ $index + 1 }}"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach($report['photos'] as $index => $photo)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ asset($photo) }}" class="d-block w-100" alt="Foto Laporan {{ $index + 1 }}">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p>{{ $report['date'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Riwayat Update Laporan Section -->
        <div class="card mt-4 detail-card">
            <div class="card-body">
                <h4 class="mb-3">
                    <i class="fas fa-history me-2"></i>
                    Riwayat Update Laporan
                </h4>

                <!-- Timeline -->
                <div class="timeline">
                    @foreach($report['updates'] as $update)
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="status-badge 
                                    @if($update['status'] == 'MENUNGGU VERIFIKASI') bg-secondary text-white
                                    @elseif($update['status'] == 'TERVERIFIKASI') bg-primary text-white
                                    @elseif($update['status'] == 'SEDANG DIPROSES') bg-warning text-dark
                                    @elseif($update['status'] == 'SELESAI') bg-success text-white
                                    @endif">
                                    {{ $update['status'] }}
                                </span>
                                <small>{{ $update['timestamp'] }}</small>
                            </div>
                            <div class="feedback-box">
                                <strong>Feedback dari Admin:</strong><br>
                                {{ $update['feedback'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>