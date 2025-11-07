<x-app>
<div class="homepage-wrapper">

  <div class="hero-section">
    <div class="hero-background-slider">
      <div class="hero-background hero-bg-1 active"></div>
      <div class="hero-background hero-bg-2"></div>
      <div class="hero-background hero-bg-3"></div>
      <div class="hero-overlay"></div>
    </div>

    <nav class="navbar">
      <div class="navbar-container">
        <div class="navbar-brand">
          <img src="{{ asset('images/icon.svg') }}" alt="JagaAir.ID" class="brand-logo">
          <span class="brand-name">JagaAir.ID</span>
        </div>
        <ul class="navbar-menu">
          <li><a href="#alur" class="nav-link">Beranda</a></li>
          <li><a href="#laporan" class="nav-link">Buat Laporan</a></li>
          <li><a href="#laporan" class="nav-link">Cari Laporan</a></li>
          <li><a href="#hubungi" class="nav-link">Saran</a></li>
        </ul>
        <button class="btn-login">Masuk</button>
      </div>
    </nav>

    <div class="hero-content">
      <!-- Animated Background untuk Title -->
      <div class="title-background-animated">
        <div class="bg-wave wave-1"></div>
        <div class="bg-wave wave-2"></div>
        <div class="bg-wave wave-3"></div>
      </div>
      
      <!-- Title dengan wrapper untuk animasi -->
      <div class="hero-title-wrapper">
        <h1 class="hero-title">
          <span class="title-letter">J</span>
          <span class="title-letter">a</span>
          <span class="title-letter">g</span>
          <span class="title-letter">a</span>
          <span class="title-letter">A</span>
          <span class="title-letter">i</span>
          <span class="title-letter">r</span>
          <span class="title-letter">.</span>
          <span class="title-letter">I</span>
          <span class="title-letter">D</span>
        </h1>
      </div>
      
      <p class="hero-subtitle">Platform untuk melaporkan dan memantau penanganan masalah air bersih di Kota Malang</p>
      
      <!-- CTA Button dengan animasi -->
      <div class="hero-cta">
        <a href="#laporan" class="btn-cta-primary">
          <span class="btn-text">Buat Laporan</span>
          <span class="btn-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
        <a href="#alur" class="btn-cta-secondary">
          <span class="btn-text">Pelajari Lebih Lanjut</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Section Statistik -->
  <section class="stats-section">
    <div class="stats-container">
        <div class="stat-card">
        <div class="stat-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
        </div>
        <div class="stat-number" data-target="150">0</div>
        <div class="stat-label">Pengguna Aktif</div>
        </div>

        <div class="stat-card">
        <div class="stat-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="16" y1="13" x2="8" y2="13"></line>
            <line x1="16" y1="17" x2="8" y2="17"></line>
            <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
        </div>
        <div class="stat-number" data-target="20">0</div>
        <div class="stat-label">Laporan Dibuat</div>
        </div>

        <div class="stat-card">
        <div class="stat-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
        </div>
        <div class="stat-number" data-target="30">0</div>
        <div class="stat-label">Laporan Ditangani</div>
        </div>

        <div class="stat-card">
        <div class="stat-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="12" y1="1" x2="12" y2="23"></line>
            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
        </div>
        <div class="stat-number" data-target="50">0</div>
        <div class="stat-label">Total Laporan</div>
        </div>
    </div>
  </section>

  <!-- Section Alur Pelaporan -->
  <section id="alur" class="alur-section">
    <h2 class="section-title">Alur Pelaporan</h2>
    <div class="alur-container-new">
      
      <!-- Card 1: Lapor Masalah -->
      <div class="alur-card-interactive" data-step="1">
        <div class="alur-card-front">
          <div class="step-number">1</div>
          <div class="step-icon">
            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
              <polyline points="14 2 14 8 20 8"></polyline>
              <line x1="16" y1="13" x2="8" y2="13"></line>
              <line x1="16" y1="17" x2="8" y2="17"></line>
              <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
          </div>
          <h3 class="step-title">Lapor Masalah</h3>
        </div>
        <div class="alur-card-back">
          <div class="step-number-back">1</div>
          <p class="step-description">Isi formulir dengan detail lengkap tentang keluhan atau aspirasi Anda</p>
        </div>
      </div>

      <!-- Arrow Separator -->
      <div class="alur-arrow-new">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </div>

      <!-- Card 2: Verifikasi -->
      <div class="alur-card-interactive" data-step="2">
        <div class="alur-card-front">
          <div class="step-number">2</div>
          <div class="step-icon">
            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
              <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
          </div>
          <h3 class="step-title">Verifikasi</h3>
        </div>
        <div class="alur-card-back">
          <div class="step-number-back">2</div>
          <p class="step-description">Tim kami akan memverifikasi dan memproses laporan Anda</p>
        </div>
      </div>

      <!-- Arrow Separator -->
      <div class="alur-arrow-new">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </div>

      <!-- Card 3: Penanganan -->
      <div class="alur-card-interactive" data-step="3">
        <div class="alur-card-front">
          <div class="step-number">3</div>
          <div class="step-icon">
            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
          </div>
          <h3 class="step-title">Penanganan</h3>
        </div>
        <div class="alur-card-back">
          <div class="step-number-back">3</div>
          <p class="step-description">Instansi terkait akan menindaklanjuti laporan Anda</p>
        </div>
      </div>

      <!-- Arrow Separator -->
      <div class="alur-arrow-new">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </div>

      <!-- Card 4: Selesai -->
      <div class="alur-card-interactive" data-step="4">
        <div class="alur-card-front">
          <div class="step-number">4</div>
          <div class="step-icon">
            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
              <polyline points="22 4 12 14.01 9 11.01"></polyline>
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
          <h3 class="step-title">Selesai</h3>
        </div>
        <div class="alur-card-back">
          <div class="step-number-back">4</div>
          <p class="step-description">Laporan ditandai selesai dan Anda akan menerima notifikasi</p>
        </div>
      </div>

    </div>
  </section>

  <section id="keunggulan" class="keunggulan-section">
    <h2 class="section-title">Kenapa Memilih JagaAir.id?</h2>
    <div class="keunggulan-grid-new">
        <!-- Row 1 -->
        <div class="keunggulan-row">
            <!-- Card 1: Pelapor Anonim -->
            <div class="keunggulan-card-new" data-card="1">
                <div class="card-content-wrapper">
                    <div class="card-icon-new">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            <path d="M19.4 15a1.65 1.65 0 0 0.33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0.33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                    </div>
                    <div class="card-text-wrapper">
                        <h3 class="card-title-new">Pelapor Anonim</h3>
                        <p class="card-description-new">Laporkan masalah tanpa harus mendaftar. Privasi anda terjaga dengan baik</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Resmi dan Terpercaya -->
            <div class="keunggulan-card-new" data-card="2">
                <div class="card-content-wrapper">
                    <div class="card-icon-new">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="card-text-wrapper">
                        <h3 class="card-title-new">Resmi dan Terpercaya</h3>
                        <p class="card-description-new">Platform Resmi Kota Malang yang dapat diandalkan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="keunggulan-row">
            <!-- Card 3: Notifikasi Real-Time -->
            <div class="keunggulan-card-new" data-card="3">
                <div class="card-content-wrapper">
                    <div class="card-icon-new">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2.9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="card-text-wrapper">
                        <h3 class="card-title-new">Notifikasi Real-Time</h3>
                        <p class="card-description-new">Dapatkan update status penanganan laporan anda secara langsung</p>
                    </div>
                </div>
            </div>

            <!-- Card 4: Transparansi Penuh -->
            <div class="keunggulan-card-new" data-card="4">
                <div class="card-content-wrapper">
                    <div class="card-icon-new">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div class="card-text-wrapper">
                        <h3 class="card-title-new">Transparansi Penuh</h3>
                        <p class="card-description-new">Lihat Timeline lengkap penanganan dari awal hingga selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section id="laporan" class="laporan-section">
    <h2 class="section-title">Buat Laporan Baru</h2>
    <div class="laporan-container">
      <div class="laporan-form-wrapper">
        <form class="laporan-form">
          <div class="form-group">
            <label for="jenis-masalah" class="form-label">Jenis Masalah</label>
            <select id="jenis-masalah" class="form-select">
              <option value="">Pilih jenis masalah</option>
              <option value="air-keruh">Infrastruktur Air</option>
              <option value="air-berbau">Sanitasi</option>
              <option value="tidak-ada-air">Pencemaran Air</option>
              <option value="air-tercemar">Bencana Terkait Air</option>
            </select>
          </div>

          <div class="form-group">
            <label for="lokasi" class="form-label">Lokasi Masalah</label>
            <input type="text" id="lokasi" class="form-input" placeholder="Masukkan Link Google Maps atau Alamat Lengkap">
          </div>

          <div class="form-group">
            <label for="deskripsi" class="form-label">Deskripsi Masalah</label>
            <textarea id="deskripsi" class="form-textarea" placeholder="Jelaskan masalah yang Anda alami" rows="4"></textarea>
          </div>

          <div class="form-group">
            <label for="foto" class="form-label">Lampirkan Foto</label>
            <input type="file" id="foto" class="form-input" accept="image/*">
          </div>

          <button type="submit" class="btn-submit">Kirim Laporan</button>
        </form>
      </div>
    </div>
  </section>

  <footer class="footer-section" 
  id="hubungi"  
  style="background-size: cover; background-image: url('../images/hero-bg-1.jpg');">
    
    <div class="footer-content">
      <div class="footer-column">
        <h4 class="footer-title">JagaAir.ID</h4>
        <p class="footer-text">Platform pelaporan masalah air bersih untuk Kota Malang</p>
        <div class="footer-social">
          <a href="#" class="social-link">
            <img src="{{ asset('images/social.svg') }}" alt="Social">
          </a>
          <a href="#" class="social-link">
            <img src="{{ asset('images/instagram.svg') }}" alt="Instagram">
          </a>
          <a href="#" class="social-link">
            <img src="{{ asset('images/social-1.svg') }}" alt="Social">
          </a>
        </div>
      </div>
      <div class="footer-column">
        <h5 class="footer-subtitle">Menu</h5>
        <ul class="footer-links">
          <li><a href="#alur" class="footer-link">Alur Pelaporan</a></li>
          <li><a href="#keunggulan" class="footer-link">Keunggulan</a></li>
          <li><a href="#laporan" class="footer-link">Buat Laporan</a></li>
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
  <p class="footer-copyright">&copy; 2024 JagaAir.ID. All rights reserved.</p>
</div>
</footer>
</div> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</x-app>