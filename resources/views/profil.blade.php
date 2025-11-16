<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Saran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pontano+Sans&family=Gentium+Plus:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>
    <nav class="navbar">
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
        @auth('web')
        <div class="navbar-auth">
          <a href="{{ route('profil') }}">
            <button class="btn-signin">Akun</button>
          </a>
        </div>
        @endauth
        @guest
        <div class="navbar-auth">
          <a href="{{ route('sign_in') }}">
            <button class="btn-signin">Sign In</button>
          </a>
          <a href="{{ route('sign_up') }}">
            <button class="btn-signup">Sign Up</button>
          </a>
        </div>
        @endguest
      </div>
    </nav>
    <div class="bg-cover bg-center flex justify-center min-h-screen p-4 border-b"
        style="background-image: url('{{ asset('images/hero-bg-1.jpg') }}')"
    >
        <main class="max-w-xl w-full relative bg-white p-8 rounded-xl shadow-2xl border border-gray-200 mt-32 mb-16">
            <form method="POST" action="{{ route('logout') }}" class="m-0">
                @csrf
                <button type="submit" class="flex items-center gap-2 text-sm absolute m-4 top-0 right-0 px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 transition duration-300">
                    Log Out
                    <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                    </svg>
                </button>
            </form>
            <div class="flex flex-col items-center">
                <img class="h-32 w-32 rounded-full object-cover shadow-lg mt-4" src="{{ asset('images/foto-profil.png') }}" alt="Foto Profil Pengguna">
                <p class="text-center text-lg text-bold mt-4">
                    Profil Pengguna
                </p>
                <p class="text-center text-sm text-gray-500 mt-1">
                    Informasi data pribadi Anda
                </p>
                <form class="w-full space-y-4 pt-4">
                    <div class="space-y-2">
                        <label for="profile_picture" class="block text-sm font-medium text-gray-700">
                            Ubah Foto Profil
                        </label>
                        
                        <input 
                            type="file" 
                            id="profile_picture" 
                            name="profile_picture" 
                            accept="image/png, image/jpeg, image/webp" 
                            class="block w-full text-sm text-gray-900 
                                border border-gray-300 rounded-lg cursor-pointer 
                                bg-gray-50 p-2 
                                focus:outline-none focus:border-indigo-500 focus:ring-indigo-500"
                        >
                    </div>
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ $user->name }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="nik" class="block text-sm font-medium text-gray-700">NIK (Nomor Induk Kependudukan)</label>
                        <input type="text" id="nik" name="nik" value="{{ $user->nik }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-md text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                            Edit Profil
                        </button>
                    </div>
                </form>
            </main>
        </div>
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
</body>
</html>