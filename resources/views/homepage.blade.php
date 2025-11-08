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
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                        <path d="M 25 2 C 15.058594 2 7 4.6875 7 8 L 7 25 C 7 30.082031 12.417969 44.082031 25 47 C 37.582031 44.082031 43 30.082031 43 25 L 43 8 C 43 4.6875 34.941406 2 25 2 Z M 25 4 C 35.5 4 41 6.972656 41 8 L 41 25 C 41 29.136719 36.667969 40.523438 27 44.296875 L 27 38 L 23 38 L 23 44.296875 C 13.332031 40.523438 9 29.136719 9 25 L 9 8 C 9 6.972656 14.5 4 25 4 Z M 17 11 C 15.003906 11 12.855469 11.878906 11 15 C 12.953125 13.640625 14.613281 13 16 13 C 18.6875 13 20.027344 16.148438 20.4375 16.5625 C 21.023438 17.148438 21.972656 17.148438 22.5625 16.5625 C 23.148438 15.976563 23.148438 15.027344 22.5625 14.4375 C 22.195313 14.074219 20.4375 11 17 11 Z M 33 11 C 29.5625 11 27.804688 14.074219 27.4375 14.4375 C 26.851563 15.027344 26.851563 15.976563 27.4375 16.5625 C 28.027344 17.148438 28.976563 17.148438 29.5625 16.5625 C 29.972656 16.148438 31.3125 13 34 13 C 35.386719 13 37.046875 13.640625 39 15 C 37.144531 11.878906 34.996094 11 33 11 Z M 16 17 C 14.359375 17 12.917969 17.59375 12 18.5 C 12.917969 19.40625 14.359375 20 16 20 C 17.640625 20 19.082031 19.40625 20 18.5 C 19.082031 17.59375 17.640625 17 16 17 Z M 34 17 C 32.359375 17 30.917969 17.59375 30 18.5 C 30.917969 19.40625 32.359375 20 34 20 C 35.640625 20 37.082031 19.40625 38 18.5 C 37.082031 17.59375 35.640625 17 34 17 Z M 11 26 L 16 34 L 23 34 L 25 32 L 27 34 L 34 34 L 39 26 L 33 31 L 29 31 L 26 28 L 24 28 L 21 31 L 17 31 Z"></path>
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
                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
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
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"/>
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
                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
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
  <p class="footer-copyright">&copy; 2025 JagaAir.ID. All rights reserved.</p>
</div>
</footer>
</div> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</x-app>