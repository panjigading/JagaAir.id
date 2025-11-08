<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard | JagaAir.id')</title>

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
        <aside class="w-64 bg-white shadow-md p-6 flex flex-col justify-between">
            <div>
                <h1 class="text-2xl font-bold text-blue-700 mb-10">JagaAir.id</h1>
                <nav class="space-y-4">
                    <a href="/dashboard" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 {{ request()->is('dashboard') ? 'font-semibold' : '' }}">
                        <span>🏠</span> Dashboard
                    </a>
                    <a href="/admin/daftar-laporan" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 {{ request()->is('admin/daftar-laporan') ? 'font-semibold' : '' }}">
                        <span>📋</span> Daftar Laporan
                    </a>
                    <a href="/kotak_saran" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 {{ request()->is('kotak_saran') ? 'font-semibold' : '' }}">
                        <span>💬</span> Kotak Saran
                    </a>
                </nav>
            </div>
            <a href="#" class="flex items-center gap-3 text-red-500 font-semibold hover:text-red-600">
                <span>🚪</span> Sign Out
            </a>
        </aside>

        <!-- Main Section -->
        <main class="flex-1 overflow-y-auto">
            <!-- Header -->
            <header class="bg-white shadow-sm p-4 flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="Search" class="px-3 py-2 rounded-lg border border-gray-300 w-64 focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>
                <div class="flex items-center gap-4">
                    <!-- Language -->
                    <div class="flex items-center gap-2">
                        <img src="https://flagcdn.com/w20/gb.png" alt="English" class="w-6 h-4">
                        <img src="https://flagcdn.com/w20/id.png" alt="Indonesia" class="w-6 h-4">
                    </div>
                    <!-- Profile -->
                    <div class="flex items-center gap-2">
                        <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full">
                        <div>
                            <p class="font-semibold text-sm">JagaAir.id</p>
                            <p class="text-xs text-gray-500">Admin</p>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <section class="p-8">
                @yield('content')
            </section>
        </main>
    </div>

    @yield('scripts')
</body>
</html>