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
          <img src="{{ asset('images/logo-jagaair-bright.png') }}" alt="JagaAir.ID" class="brand-logo-png">
        </div>
        <!-- Navigation Menu -->
        <ul class="navbar-menu">
          <li><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
          <li><a href="#buat-laporan" class="nav-link">Buat Laporan</a></li>
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
        <a href="#buat-laporan" class="btn-cta-primary">
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
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.5 21C22.5 21 24 21 24 19.5C24 18 22.5 13.5 16.5 13.5C10.5 13.5 9 18 9 19.5C9 21 10.5 21 10.5 21H22.5ZM10.533 19.5C10.5219 19.4985 10.5109 19.4965 10.5 19.494C10.5015 19.098 10.7505 17.949 11.64 16.914C12.468 15.9435 13.923 15 16.5 15C19.0755 15 20.5305 15.945 21.36 16.914C22.2495 17.949 22.497 19.0995 22.5 19.494L22.488 19.497C22.481 19.4982 22.474 19.4992 22.467 19.5H10.533ZM16.5 10.5C17.2956 10.5 18.0587 10.1839 18.6213 9.62132C19.1839 9.05871 19.5 8.29565 19.5 7.5C19.5 6.70435 19.1839 5.94129 18.6213 5.37868C18.0587 4.81607 17.2956 4.5 16.5 4.5C15.7044 4.5 14.9413 4.81607 14.3787 5.37868C13.8161 5.94129 13.5 6.70435 13.5 7.5C13.5 8.29565 13.8161 9.05871 14.3787 9.62132C14.9413 10.1839 15.7044 10.5 16.5 10.5ZM21 7.5C21 8.09095 20.8836 8.67611 20.6575 9.22208C20.4313 9.76804 20.0998 10.2641 19.682 10.682C19.2641 11.0998 18.768 11.4313 18.2221 11.6575C17.6761 11.8836 17.0909 12 16.5 12C15.9091 12 15.3239 11.8836 14.7779 11.6575C14.232 11.4313 13.7359 11.0998 13.318 10.682C12.9002 10.2641 12.5687 9.76804 12.3425 9.22208C12.1164 8.67611 12 8.09095 12 7.5C12 6.30653 12.4741 5.16193 13.318 4.31802C14.1619 3.47411 15.3065 3 16.5 3C17.6935 3 18.8381 3.47411 19.682 4.31802C20.5259 5.16193 21 6.30653 21 7.5ZM10.404 13.92C9.80397 13.7311 9.18545 13.6069 8.559 13.5495C8.207 13.516 7.85359 13.4995 7.5 13.5C1.5 13.5 0 18 0 19.5C0 20.5005 0.4995 21 1.5 21H7.824C7.60163 20.5317 7.49074 20.0183 7.5 19.5C7.5 17.985 8.0655 16.437 9.135 15.144C9.4995 14.703 9.924 14.2905 10.404 13.92ZM7.38 15C6.49223 16.3339 6.01266 17.8977 6 19.5H1.5C1.5 19.11 1.746 17.955 2.64 16.914C3.4575 15.96 4.878 15.03 7.38 15.0015V15ZM2.25 8.25C2.25 7.05653 2.72411 5.91193 3.56802 5.06802C4.41193 4.22411 5.55653 3.75 6.75 3.75C7.94347 3.75 9.08807 4.22411 9.93198 5.06802C10.7759 5.91193 11.25 7.05653 11.25 8.25C11.25 9.44347 10.7759 10.5881 9.93198 11.432C9.08807 12.2759 7.94347 12.75 6.75 12.75C5.55653 12.75 4.41193 12.2759 3.56802 11.432C2.72411 10.5881 2.25 9.44347 2.25 8.25ZM6.75 5.25C5.95435 5.25 5.19129 5.56607 4.62868 6.12868C4.06607 6.69129 3.75 7.45435 3.75 8.25C3.75 9.04565 4.06607 9.80871 4.62868 10.3713C5.19129 10.9339 5.95435 11.25 6.75 11.25C7.54565 11.25 8.30871 10.9339 8.87132 10.3713C9.43393 9.80871 9.75 9.04565 9.75 8.25C9.75 7.45435 9.43393 6.69129 8.87132 6.12868C8.30871 5.56607 7.54565 5.25 6.75 5.25Z" fill="#76D6FF"/>
            </svg>
        </div>
        <div class="stat-number" data-target="150">0</div>
        <div class="stat-label">Pengguna Aktif</div>
        </div>

        <div class="stat-card">
        <div class="stat-icon">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_201_53011)">
              <path d="M24 0H0V24H24V0Z" fill="white" fill-opacity="0.01"/>
              <path d="M2.5 3.5C2.5 2.67158 3.17158 2 4 2H16C16.8285 2 17.5 2.67158 17.5 3.5V22H4C3.17158 22 2.5 21.3285 2.5 20.5V3.5Z" stroke="#76D6FF" stroke-width="2" stroke-linejoin="round"/>
              <path d="M17.5 12C17.5 11.4477 17.9477 11 18.5 11H20.5C21.0523 11 21.5 11.4477 21.5 12V20.5C21.5 21.3285 20.8285 22 20 22H17.5V12Z" stroke="#76D6FF" stroke-width="2" stroke-linejoin="round"/>
              <path d="M5.5 6H9.5" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5.5 9.5H11.5" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_201_53011">
              <rect width="30" height="30" fill="white"/>
              </clipPath>
              </defs>
            </svg>
        </div>
        <div class="stat-number" data-target="20">0</div>
        <div class="stat-label">Laporan Dibuat</div>
        </div>

        <div class="stat-card">
        <div class="stat-icon">
            <svg width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14 0H6C2.691 0 0 2.691 0 6V19C0 19.2652 0.105357 19.5196 0.292893 19.7071C0.48043 19.8946 0.734784 20 1 20H14C17.309 20 20 17.309 20 14V6C20 2.691 17.309 0 14 0ZM11 16H9V14H11V16ZM11 12H9V4H11V12Z" fill="#76D6FF"/>
            </svg>
        </div>
        <div class="stat-number" data-target="30">0</div>
        <div class="stat-label">Laporan Ditangani</div>
        </div>

        <div class="stat-card">
        <div class="stat-icon">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.4347 11.6249L10.125 7.24304V11.3437C10.125 11.4183 10.1546 11.4898 10.2074 11.5425C10.2601 11.5953 10.3317 11.6249 10.4062 11.6249H14.4347Z" fill="#76D6FF"/>
              <path d="M8.625 12.5625V6.75H2.8125C2.66332 6.75 2.52024 6.80926 2.41475 6.91475C2.30926 7.02024 2.25 7.16332 2.25 7.3125V22.6875C2.25 22.8367 2.30926 22.9798 2.41475 23.0852C2.52024 23.1907 2.66332 23.25 2.8125 23.25H14.4375C14.5867 23.25 14.7298 23.1907 14.8352 23.0852C14.9407 22.9798 15 22.8367 15 22.6875V13.125H9.1875C9.03832 13.125 8.89524 13.0657 8.78975 12.9602C8.68426 12.8548 8.625 12.7117 8.625 12.5625Z" fill="#76D6FF"/>
              <path d="M17.1562 5.62504H21.1847L16.875 1.24316V5.34379C16.875 5.41838 16.9046 5.48992 16.9574 5.54266C17.0101 5.59541 17.0817 5.62504 17.1562 5.62504Z" fill="#76D6FF"/>
              <path d="M15.9375 7.125C15.7883 7.125 15.6452 7.06574 15.5398 6.96025C15.4343 6.85476 15.375 6.71168 15.375 6.5625V0.75H8.0625C7.91332 0.75 7.77024 0.809263 7.66475 0.914752C7.55926 1.02024 7.5 1.16332 7.5 1.3125V5.25H9.47437C9.72638 5.25101 9.97571 5.3018 10.208 5.39946C10.4403 5.49711 10.6511 5.63971 10.8281 5.81906L15.945 11.0222C16.302 11.3844 16.5013 11.873 16.4995 12.3816V18.75H21.1875C21.3367 18.75 21.4798 18.6907 21.5852 18.5852C21.6907 18.4798 21.75 18.3367 21.75 18.1875V7.125H15.9375Z" fill="#76D6FF"/>
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
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.16666 5.83337C4.16666 4.45267 5.28595 3.33337 6.66666 3.33337H26.6667C28.0474 3.33337 29.1667 4.45267 29.1667 5.83337V36.6667H6.66666C5.28595 36.6667 4.16666 35.5475 4.16666 34.1667V5.83337Z" stroke="#76D6FF" stroke-width="2" stroke-linejoin="round"/>
              <path d="M29.1667 20C29.1667 19.0795 29.9128 18.3334 30.8333 18.3334H34.1667C35.0872 18.3334 35.8333 19.0795 35.8333 20V34.1667C35.8333 35.5475 34.7141 36.6667 33.3333 36.6667H29.1667V20Z" stroke="#76D6FF" stroke-width="2" stroke-linejoin="round"/>
              <path d="M9.16666 10H15.8333" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.16666 15.8334H19.1667" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
            <svg width="100" height="100" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="verified">
              <path id="Icon" d="M56.25 37.5L41.25 52.5L33.75 45M15 18.75V48.9172C15 58.0077 20.1361 66.318 28.2669 70.3834L45 78.75L61.7331 70.3834C69.8639 66.318 75 58.0077 75 48.9172V18.75L69.534 19.3573C62.1877 20.1736 54.7987 18.249 48.7839 13.9528L45 11.25L41.2161 13.9528C35.2013 18.249 27.8123 20.1736 20.466 19.3573L15 18.75Z" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
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
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M26.6668 13.3334C26.6668 17.0153 23.6821 20 20.0002 20C16.3182 20 13.3335 17.0153 13.3335 13.3334" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20.0002 6.66663C16.3182 6.66663 13.3335 9.65138 13.3335 13.3333H26.6668C26.6668 9.65138 23.6821 6.66663 20.0002 6.66663Z" fill="#76D6FF" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10 13.3334H30" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20 3.33337V6.66671" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20.0002 22.5C12.1762 22.5 5.8335 28.4695 5.8335 35.8333H34.1668C34.1668 28.4695 27.8242 22.5 20.0002 22.5Z" fill="#76D6FF" stroke="#76D6FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15 28.3334V31.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M25 28.3334V31.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M35 19.9999C35 11.7186 28.2812 4.99988 20 4.99988C11.7187 4.99988 5 11.7186 5 19.9999C5 28.2811 11.7187 34.9999 20 34.9999C28.2812 34.9999 35 28.2811 35 19.9999Z" stroke="#76D6FF" stroke-width="0.609939" stroke-miterlimit="10"/>
              <path d="M28.7501 15L20.0103 25L16.2642 21.25" stroke="#76D6FF" stroke-width="0.609939" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M14.9961 24.9999L11.25 21.2499" stroke="#76D6FF" stroke-width="0.609939" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M23.8838 15L19.8564 19.6094" stroke="#76D6FF" stroke-width="0.609939" stroke-linecap="round" stroke-linejoin="round"/>
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

  <section id="buat-laporan" class="laporan-section">
    <h2 class="section-title">Buat Laporan Baru</h2>
    <div class="laporan-container">
      <div class="laporan-form-wrapper">
        <form class="laporan-form" method="POST" action="{{ route('buat_laporan') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="jenis-masalah" class="form-label">Jenis Masalah</label>
            <select id="jenis-masalah" class="form-select" name="kategori">
              <option value="">Pilih jenis masalah</option>
              <option value="Infrastruktur Air">Infrastruktur Air</option>
              <option value="Sanitasi">Sanitasi</option>
              <option value="Pencemaran Air">Pencemaran Air</option>
              <option value="Bencana Terkait Air">Bencana Terkait Air</option>
            </select>
            @error('kategori')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="lokasi" class="form-label">Kecamatan</label>
            <select id="kecamatanDropdown" class="form-select" name="kecamatan">
                <option value="">Pilih Kecamatan</option>
            </select>
            @error('kecamatan')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="lokasi" class="form-label">Kelurahan</label>
            <select id="kelurahanDropdown" class="form-select" name="kelurahan">
                <option value="">Pilih Kelurahan</option>
            </select>
            @error('kategori')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="lokasi" class="form-label">Lokasi Masalah</label>
            <input type="text" id="lokasi" class="form-input" name="alamat_lengkap" placeholder="Masukkan Link Google Maps atau Alamat Lengkap">
            @error('alamat_lengkap')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="deskripsi" class="form-label">Deskripsi Masalah</label>
            <textarea id="deskripsi" class="form-textarea" name="detail" placeholder="Jelaskan masalah yang Anda alami" rows="4"></textarea>
            @error('detail')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="foto" class="form-label">Lampirkan Foto</label>
            <input type="file" id="foto" class="form-input" name="url_bukti" accept="image/*">
            @error('url_bukti')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
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
</div> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
<script src="{{ asset('js/kelurahan_kecamatan.js') }}"></script>
</x-app>