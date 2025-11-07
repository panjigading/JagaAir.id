<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name', 'JagaAir.id') }} — Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
</head>
<body class="bg-slate-50 text-slate-800">
    <div class="min-h-screen flex">
        <aside id="sidebar" class="hidden md:block w-64 bg-white border-r">
            <div class="h-full p-4 flex flex-col">
                <div class="text-center">
                    <a href="/" class="mb-6 text-2xl font-bold">
                        Jaga<span class="text-blue-700">Air.id</span>
                    </a>
                </div>
                <nav class="flex-1 mt-4">
                    <ul class="space-y-1">
                        <li><a href="/dashboard" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/></svg>Dashboard</a></li>
                        <li><a href="/reports" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"/></svg>Daftar Laporan</a></li>
                        <li><a href="/kotak-saran" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/></svg>Kotak Saran</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="w-full text-left px-3 py-2 rounded text-red-600 hover:bg-red-50 flex items-center"><svg class="w-6 h-6 mr-4 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/></svg>Log Out</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div id="mobileSidebar" class="fixed inset-y-0 left-0 z-40 w-64 transform -translate-x-full md:hidden" aria-hidden="true">
            <div class="bg-white h-full p-4 border-r">
                <div class="flex items-center justify-between mb-6">
                    <br/>
                    <a href="/" class="text-lg font-bold">
                        Jaga<span class="text-blue-700">Air.id</span>
                    </a>
                    <button id="closeMobileNav" class="text-slate-600">✕</button>
                </div>
                <nav>
                    <ul class="space-y-1">
                        <li><a href="/dashboard" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/></svg>Dashboard</a></li>
                        <li><a href="/reports" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"/></svg>Daftar Laporan</a></li>
                        <li><a href="/kotak-saran" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/></svg>Kotak Saran</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="w-full text-left px-3 py-2 rounded text-red-600 hover:bg-red-50 flex items-center"><svg class="w-6 h-6 mr-4 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/></svg>Keluar</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="flex-1">
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
                            <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM4 20c0-4 4-6 8-6s8 2 8 6"/></svg>
                        </div>
                        <div class="text-sm flex flex-col gap-1">
                            <div class="font-medium">JagaAir.id</div>
                            <div class="text-slate-500 text-xs">Admin</div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="p-8 max-w-7xl mx-auto">
                <section>
                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-2xl font-bold mb-4">Detail Laporan</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <div>
                                    <div class="text-sm text-slate-500">Status</div>
                                    <div class="inline-block mt-1 px-3 py-1 rounded-full text-sm font-medium text-white bg-amber-500">Diproses</div>
                                </div>

                                <div class="mt-3 text-sm text-slate-500">Nama Pelapor</div>
                                <div class="font-medium">Budi Santoso</div>

                                <div class="mt-3 text-sm text-slate-500">Kecamatan</div>
                                <div class="font-medium">Klojen</div>

                                <div class="mt-3 text-sm text-slate-500">Kelurahan</div>
                                <div class="font-medium">Kauman</div>

                                <div class="mt-3 text-sm text-slate-500">Tanggal Pelaporan</div>
                                <div class="font-medium">2 November 2025</div>

                                <div class="mt-3 text-sm text-slate-500">Kategori</div>
                                <div class="font-medium">Penyumbatan Saluran</div>

                                <div class="mt-4">
                                    <div class="text-sm text-slate-500">Deskripsi</div>
                                    <div class="mt-1 text-sm text-slate-700">Saluran tersumbat di depan rumah, membutuhkan pembersihan segera.</div>
                                </div>
                            </div>

                            <div>
                                <div class="text-sm text-slate-500">Bukti</div>
                                <div class="mt-2">
                                    @php
                                        // Normalize bukti data into an array of URLs/paths
                                        $buktiList = [];
                                        if(!empty($r->bukti)){
                                            if(is_array($r->bukti)){
                                                $buktiList = $r->bukti;
                                            } elseif(is_string($r->bukti)){
                                                // try JSON decode first
                                                $decoded = json_decode($r->bukti, true);
                                                if(json_last_error() === JSON_ERROR_NONE && is_array($decoded)){
                                                    $buktiList = $decoded;
                                                } else {
                                                    // maybe pipe-separated or comma
                                                    if(strpos($r->bukti, '|') !== false){
                                                        $buktiList = explode('|', $r->bukti);
                                                    } elseif(strpos($r->bukti, ',') !== false){
                                                        $buktiList = explode(',', $r->bukti);
                                                    } else {
                                                        $buktiList = [$r->bukti];
                                                    }
                                                }
                                            }
                                        }
                                    @endphp

                                    @if(count($buktiList))
                                        <div class="space-y-2">
                                            @foreach($buktiList as $bukti)
                                                @php $b = trim($bukti); @endphp
                                                @if(preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $b))
                                                    <img src="{{ asset($b) }}" alt="Bukti" class="w-full h-36 md:h-44 object-cover rounded" />
                                                @else
                                                    <a href="{{ asset($b) }}" target="_blank" class="block text-sm text-sky-600 underline">{{ basename($b) }}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="flex items-center justify-center text-slate-500 border rounded p-4" style="min-height:66vh;">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 3v4M8 3v4M3 11h18"/></svg>
                                                <div class="mt-3 font-medium">Tidak ada bukti terlampir</div>
                                                <div class="mt-1 text-sm text-slate-500">Tambahkan foto atau file untuk bukti.</div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="my-6 border-slate-200" />

                        <form id="updateForm" method="POST" action="" class="space-y-4">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm text-slate-600">Ubah Status</label>
                                    <div class="relative mt-1">
                                        <select name="status" class="appearance-none bg-white block w-full rounded border border-gray-200 px-3 py-2 pr-10 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-200">
                                        <option value="Diproses" selected>Diproses</option>
                                        <option value="Ditangani">Ditangani</option>
                                        <option value="Selesai">Selesai</option>
                                        <option value="Dikembalikan">Dikembalikan</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                            <svg class="h-4 w-4 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.06z"/></svg>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm text-slate-600">Tanggapan</label>
                                    <textarea name="tanggapan" rows="4" class="mt-1 block w-full rounded px-3 py-2 ring-1 ring-slate-200 focus:outline-none focus:ring-2 focus:ring-sky-300 min-h-[33vh]" placeholder="Tulis tanggapan...">{{ old('tanggapan', $r->tanggapan ?? '') }}</textarea>
                                </div>
                            </div>
                        </form>

                        <div class="flex items-center justify-between mt-4">
                                <form method="POST" action="" onsubmit="return confirm('Hapus laporan ini?');">
                                    @csrf
                                    <button type="submit" class="inline-flex items-center text-sm px-4 py-2 bg-white text-red-600 rounded ring-2 ring-red-600 hover:bg-red-600 hover:text-white">Hapus Laporan</button>
                                </form>
                            <button form="updateForm" type="submit" class="inline-flex items-center text-sm px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded shadow">Simpan Perubahan</button>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="max-w-7xl mx-auto p-4 text-center text-sm text-slate-500">
                &copy; 2025 {{ config('app.name', 'JagaAir.id') }}
            </footer>
        </div>
    </div>

    <script>
        // Mobile nav toggle
        const openBtn = document.getElementById('openMobileNav');
        const closeBtn = document.getElementById('closeMobileNav');
        const mobile = document.getElementById('mobileSidebar');

        function showMobile() { mobile.style.transform = 'translateX(0)'; mobile.classList.remove('-translate-x-full'); }
        function hideMobile() { mobile.style.transform = 'translateX(-100%)'; mobile.classList.add('-translate-x-full'); }

        if (openBtn) openBtn.addEventListener('click', (e) => { e.preventDefault(); showMobile(); });
        if (closeBtn) closeBtn.addEventListener('click', (e) => { e.preventDefault(); hideMobile(); });

        hideMobile();

        const breadcrumbToggle = document.getElementById('breadcrumbToggle');
        const desktopSidebar = document.getElementById('sidebar');
        if (breadcrumbToggle && desktopSidebar) {
            breadcrumbToggle.addEventListener('click', (e) => {
                e.preventDefault();
                desktopSidebar.classList.toggle('sidebar-collapsed');
            });
        }
    </script>
</body>
</html>
