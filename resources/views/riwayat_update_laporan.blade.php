<x-app>
    <section class="hero-section">
        <h1>Lihat Kondisi Air di Sekitar Anda</h1>
        <p>Gunakan fitur pencarian dan filter untuk memantau laporan masalah air dari masyarakat Kota Malang.</p>
    </section>

    <!-- Main Content -->
    <div class="container mt-4 mb-5">
        <!-- Back Button -->
        <a href="#" class="text-decoration-none mb-3 d-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left me-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.964-3.964A.5.5 0 0 0 6 3a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5c.178 0 .336-.073.447-.184l3.964-3.964A.5.5 0 0 0 11 10.5h1.5a.5.5 0 0 0 .5-.5z"/>
            </svg>
            Detail Laporan
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
                                            class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach($report['photos'] as $index => $photo)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ asset($photo) }}" class="d-block w-100" alt="Foto Laporan {{ $index + 1 }}">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p>{{ date('m/d/Y H:i', strtotime('2024-09-24 15:01')) }}</p>
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
                <h4 class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-left-text me-2" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a1 1 0 0 1-1-1V10.5a3.5 3.5 0 1 0-7 0v2.5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 5a1 1 0 1 1 2 0 1 1 0 0 1-2 0m0 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0m1.5 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                </svg> Riwayat Update Laporan</h4>

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
</x-app>