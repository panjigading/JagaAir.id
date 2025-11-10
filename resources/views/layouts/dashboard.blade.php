<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard | JagaAir.id')</title>
    <style>
        :root { --app-font: 'Nunito Sans', ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }
        html, body { font-family: var(--app-font); }
        .sidebar-enter { transform: translateX(-100%); }
        .sidebar-enter-active { transform: translateX(0); transition: transform 200ms ease-out; }
        .sidebar-leave { transform: translateX(0); }
        .sidebar-leave-active { transform: translateX(-100%); transition: transform 150ms ease-in; }
        @media (min-width: 768px) {
            .sidebar-collapsed { display: none !important; }
        }
    </style>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0091AA',
                    }
                }
            }
        }
    </script>

    @yield('styles')
</head>
<body class="bg-gray-100 font-sans">

    <!-- Layout Container -->
    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside id="sidebar" class="hidden md:block w-64 bg-white border-r">
            <div class="h-full p-4 flex flex-col">
                <div class="flex items-center justify-center my-4">
                    <a href="/" class="">
                        <img src="{{ asset('images/logo-jagaair-dark.png') }}" alt="JagaAir.id" class="w-32">
                    </a>
                </div>
                <nav class="mt-4">
                    <ul class="flex-1 space-y-1">
                        <li><a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/></svg>Dashboard</a></li>
                        <li><a href="{{ route('admin.daftar_laporan') }}" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"/></svg>Daftar Laporan</a></li>
                        <li><a href="{{ route('admin.kotak_saran') }}" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/></svg>Kotak Saran</a></li>
                        <li class="mt-auto">
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="w-full text-left px-3 py-2 rounded text-red-600 hover:bg-red-50 flex items-center"><svg class="w-6 h-6 mr-4 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/></svg>Log Out</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Main Section -->
        <main class="flex-1 overflow-y-auto">
            <!-- Header -->
            <header class="bg-white">
                <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button id="openMobileNav" class="md:hidden text-slate-600">☰</button>
                        <button id="breadcrumbToggle" class="hidden md:inline-flex items-center text-sm text-slate-500 hover:text-slate-700 px-2 py-1 rounded">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                            </svg>
                        </button>
                        <h1 class="text-lg font-semibold">Dashboard</h1>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-slate-200 rounded-full flex items-center justify-center">
                        <img src="{{ asset('images/foto-profil.png') }}" class="w-8 h-8 rounded-full">
                        </div>
                        <div class="text-sm flex flex-col gap-1">
                            <div class="font-medium">JagaAir.id</div>
                            <div class="text-slate-500 text-xs">Admin</div>
                        </div>
                    </div>
                </div>
            </header>


            <!-- Content -->
            <section class="p-8 max-w-7xl mx-auto">
                @yield('content')
            </section>
        </main>
    </div>

    <script>
        const breadcrumbToggle = document.getElementById('breadcrumbToggle');
        const desktopSidebar = document.getElementById('sidebar');
        if (breadcrumbToggle && desktopSidebar) {
            breadcrumbToggle.addEventListener('click', (e) => {
                e.preventDefault();
                desktopSidebar.classList.toggle('sidebar-collapsed');
            });
        }
    </script>

    @yield('scripts')
</body>
</html>