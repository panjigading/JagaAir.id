<x-app>
<div class="homepage-wrapper">

  <div class="hero-section">
    <div class="hero-background"></div>

    <nav class="navbar">
      <div class="navbar-container">
        <div class="navbar-brand">
          <img src="{{ asset('images/icon.svg') }}" alt="JagaAir.ID" class="brand-logo">
          <span class="brand-name">JagaAir.ID</span>
        </div>
        <ul class="navbar-menu">
          <li><a href="#alur" class="nav-link">Beranda</a></li>
          <li><a href="#keunggulan" class="nav-link">Buat Laporan</a></li>
          <li><a href="#laporan" class="nav-link">Cari Laporan</a></li>
          <li><a href="#hubungi" class="nav-link">Saran</a></li>
        </ul>
        <button class="btn-login">Masuk</button>
      </div>
    </nav>

    <div class="hero-content">
      <h1 class="hero-title">JagaAir.ID</h1>
      <p class="hero-subtitle">Platform untuk melaporkan dan memantau penanganan masalah air bersih di Kota Malang</p>
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

  <section id="alur" class="alur-section">
    <h2 class="section-title">Alur Pelaporan</h2>
    <div class="alur-container">
      <div class="alur-item">
        <div class="alur-icon">1</div>
        <h3 class="alur-heading">Lapor Masalah</h3>
        <p class="alur-text">Laporkan masalah air bersih di sekitar Anda melalui aplikasi kami</p>
      </div>
      <div class="alur-arrow">→</div>
      <div class="alur-item">
        <div class="alur-icon">2</div>
        <h3 class="alur-heading">Verifikasi</h3>
        <p class="alur-text">Tim kami akan memverifikasi laporan Anda dalam waktu 24 jam</p>
      </div>
      <div class="alur-arrow">→</div>
      <div class="alur-item">
        <div class="alur-icon">3</div>
        <h3 class="alur-heading">Penanganan</h3>
        <p class="alur-text">Pemerintah akan menangani dan memberikan solusi</p>
      </div>
      <div class="alur-arrow">→</div>
      <div class="alur-item">
        <div class="alur-icon">4</div>
        <h3 class="alur-heading">Selesai</h3>
        <p class="alur-text">Laporan ditandai selesai dan Anda akan menerima notifikasi</p>
      </div>
    </div>
  </section>

  <section id="keunggulan" class="keunggulan-section">
    <h2 class="section-title">Kenapa Memilih JagaAir.id ?</h2>
    <div class="keunggulan-grid">
      <div class="keunggulan-card">
        <div class="card-icon">
          <img src="{{ asset('images/file-text.svg') }}" alt="Cepat">
        </div>
        <h3 class="card-title">Cepat & Responsif</h3>
        <p class="card-description">Sistem kami dirancang untuk memberikan respons tercepat terhadap laporan Anda</p>
      </div>
      <div class="keunggulan-card">
        <div class="card-icon">
          <img src="{{ asset('images/verified-account.png') }}" alt="Terpercaya">
        </div>
        <h3 class="card-title">Terpercaya</h3>
        <p class="card-description">Dipercaya oleh ribuan pengguna di Kota Malang untuk melaporkan masalah</p>
      </div>
      <div class="keunggulan-card">
        <div class="card-icon">
          <img src="{{ asset('images/people.png') }}" alt="Komunitas">
        </div>
        <h3 class="card-title">Komunitas Aktif</h3>
        <p class="card-description">Bergabunglah dengan komunitas untuk membantu menjaga kualitas air bersih</p>
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
              <option value="air-keruh">Air Keruh</option>
              <option value="air-berbau">Air Berbau</option>
              <option value="tidak-ada-air">Tidak Ada Air</option>
              <option value="air-tercemar">Air Tercemar</option>
            </select>
          </div>

          <div class="form-group">
            <label for="lokasi" class="form-label">Lokasi Masalah</label>
            <input type="text" id="lokasi" class="form-input" placeholder="Masukkan lokasi masalah">
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

  <footer class="footer-section" id="hubungi">
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
</div> {{-- Ini penutup .homepage-wrapper --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</x-app>
