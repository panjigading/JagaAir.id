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
        /* apply Nunito Sans globally */
        :root { --app-font: 'Nunito Sans', ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }
        html, body { font-family: var(--app-font); }
        /* small helper to animate the sidebar toggle */
        .sidebar-enter { transform: translateX(-100%); }
        .sidebar-enter-active { transform: translateX(0); transition: transform 200ms ease-out; }
        .sidebar-leave { transform: translateX(0); }
        .sidebar-leave-active { transform: translateX(-100%); transition: transform 150ms ease-in; }
        /* custom class to hide the desktop sidebar reliably (avoids Tailwind utility order issues) */
        @media (min-width: 768px) {
            .sidebar-collapsed { display: none !important; }
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="hidden md:block w-64 bg-white">
            <div class="h-full p-4 flex flex-col">
                <div class="text-center">
                    <a href="/" class="mb-6 text-2xl font-semibold">
                        Jaga<span class="text-blue-700">Air.id</span>
                    </a>
                </div>
                <nav class="flex-1 mt-4">
                    <ul class="space-y-1">
                        <li><a href="/dashboard" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><span class="inline-block w-3.5 h-3.5 bg-slate-300 rounded-full mr-3"></span>Dashboard</a></li>
                        <li><a href="/reports" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><span class="inline-block w-3.5 h-3.5 bg-slate-300 rounded-full mr-3"></span>Daftar Laporan</a></li>
                        <li><a href="/kotak-saran" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><span class="inline-block w-3.5 h-3.5 bg-slate-300 rounded-full mr-3"></span>Kotak Saran</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="w-full text-left px-3 py-2 rounded text-red-600 hover:bg-red-50 flex items-center"><span class="inline-block w-3.5 h-3.5 bg-slate-300 rounded-full mr-3"></span>Log Out</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Mobile sidebar (toggle) -->
        <div id="mobileSidebar" class="fixed inset-y-0 left-0 z-40 w-64 transform -translate-x-full md:hidden" aria-hidden="true">
            <div class="bg-white h-full p-4 border-r">
                <div class="flex items-center justify-between mb-6">
                    <a href="/" class="text-lg font-semibold text-sky-600">{{ config('app.name', 'JagaAir.id') }}</a>
                    <button id="closeMobileNav" class="text-slate-600">✕</button>
                </div>
                <nav>
                    <ul class="space-y-1">
                        <li><a href="/dashboard" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><span class="inline-block w-3.5 h-3.5 bg-slate-300 rounded-full mr-3"></span>Dashboard</a></li>
                        <li><a href="/reports" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><span class="inline-block w-3.5 h-3.5 bg-slate-300 rounded-full mr-3"></span>Daftar Laporan</a></li>
                        <li><a href="/kotak-saran" class="flex items-center px-3 py-2 rounded hover:bg-slate-100"><span class="inline-block w-3.5 h-3.5 bg-slate-300 rounded-full mr-3"></span>Kotak Saran</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="w-full text-left px-3 py-2 rounded text-red-600 hover:bg-red-50 flex items-center"><span class="inline-block w-3.5 h-3.5 bg-slate-300 rounded-full mr-3"></span>Keluar</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex-1">
            <header class="bg-white">
                <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button id="openMobileNav" class="md:hidden text-slate-600">☰</button>
                        <!-- Breadcrumb toggle to hide/show sidebar on desktop -->
                        <button id="breadcrumbToggle" class="hidden md:inline-flex items-center text-sm text-slate-500 hover:text-slate-700 px-2 py-1 rounded">▸</button>
                        <h1 class="text-lg font-semibold">Dashboard</h1>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-slate-200 rounded-full flex items-center justify-center">
                            <!-- profile placeholder -->
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
                        <h3 class="text-lg font-medium mb-4">Detail Laporan</h3>

                        @php
                            // sample fallback data
                            $sample = (object) [
                                'nama_pelapor' => 'Budi Santoso',
                                'kecamatan' => 'Klojen',
                                'kelurahan' => 'Kauman',
                                'tanggal' => date('Y-m-d'),
                                'kategori' => 'Penyumbatan Saluran',
                                'status' => 'Diproses',
                                'deskripsi' => 'Saluran tersumbat di depan rumah, membutuhkan pembersihan segera.'
                            ];
                            $r = $report ?? $sample;
                        @endphp

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <div>
                                    <div class="text-sm text-slate-500">Status</div>
                                    @php $__st = strtolower($r->status ?? ''); @endphp
                                    <div class="inline-block mt-1 px-3 py-1 rounded-full text-sm font-medium text-white {{ $__st === 'diproses' ? 'bg-amber-500' : ($__st === 'ditangani' ? 'bg-sky-600' : ($__st === 'selesai' ? 'bg-green-600' : ($__st === 'dikembalikan' ? 'bg-red-600' : 'bg-slate-400'))) }}">{{ $r->status ?? ($r->state ?? '-') }}</div>
                                </div>

                                <div class="mt-3 text-sm text-slate-500">Nama Pelapor</div>
                                <div class="font-medium">{{ $r->nama_pelapor ?? ($r->name ?? '-') }}</div>

                                <div class="mt-3 text-sm text-slate-500">Kecamatan</div>
                                <div class="font-medium">{{ $r->kecamatan ?? ($r->district ?? '-') }}</div>

                                <div class="mt-3 text-sm text-slate-500">Kelurahan</div>
                                <div class="font-medium">{{ $r->kelurahan ?? ($r->subdistrict ?? '-') }}</div>

                                <div class="mt-3 text-sm text-slate-500">Tanggal Pelaporan</div>
                                <div class="font-medium">{{ $r->tanggal ?? ($r->created_at ?? '-') }}</div>

                                <div class="mt-3 text-sm text-slate-500">Kategori</div>
                                <div class="font-medium">{{ $r->kategori ?? ($r->category ?? '-') }}</div>

                                <div class="mt-4">
                                    <div class="text-sm text-slate-500">Deskripsi</div>
                                    <div class="mt-1 text-sm text-slate-700">{{ $r->deskripsi ?? ($r->description ?? '-') }}</div>
                                </div>
                            </div>

                            <!-- Right column: Bukti only -->
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

                        <!-- actions: status change, tanggapan, delete/save -->
                        <hr class="my-6 border-slate-200" />

                        @php
                            $updateAction = isset($r->id) ? url('/reports/'.$r->id) : '#';
                            $deleteAction = isset($r->id) ? url('/reports/'.$r->id) : '#';
                        @endphp

                        <!-- Update form (fields only) -->
                        <form id="updateForm" method="POST" action="{{ $updateAction }}" class="space-y-4">
                            @csrf
                            @if(isset($r->id))
                                @method('PUT')
                            @endif

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm text-slate-600">Ubah Status</label>
                                    @php $current = strtolower($r->status ?? ''); @endphp
                                    <div class="relative mt-1">
                                        <select name="status" class="appearance-none bg-white block w-full rounded border border-gray-200 px-3 py-2 pr-10 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-200">
                                        <option value="Diproses" {{ $current === 'diproses' ? 'selected' : '' }}>Diproses</option>
                                        <option value="Ditangani" {{ $current === 'ditangani' ? 'selected' : '' }}>Ditangani</option>
                                        <option value="Selesai" {{ $current === 'selesai' ? 'selected' : '' }}>Selesai</option>
                                        <option value="Dikembalikan" {{ $current === 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                                        </select>
                                        <!-- custom arrow slightly left from right edge -->
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
                                <!-- Delete form (separate) -->
                                <form method="POST" action="{{ $deleteAction }}" onsubmit="return confirm('Hapus laporan ini?');">
                                    @csrf
                                    @if(isset($r->id)) @method('DELETE') @endif
                                    <!-- Red outline matching text color; remove outline on hover, change bg/text on hover -->
                                    <button type="submit" class="inline-flex items-center text-sm px-4 py-2 bg-white text-red-600 rounded ring-2 ring-red-600 hover:bg-red-600 hover:text-white">Hapus Laporan</button>
                                </form>

                            <!-- Save button that submits updateForm -->
                            <button form="updateForm" type="submit" class="inline-flex items-center text-sm px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded shadow">Simpan Perubahan</button>
                        </div>

                        <!-- Deskripsi moved to the right column -->
                    </div>
                </section>
            </main>

            <footer class="max-w-7xl mx-auto p-4 text-center text-sm text-slate-500">
                &copy; {{ date('Y') }} {{ config('app.name', 'JagaAir.id') }}
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

        // start hidden
        hideMobile();

        // Breadcrumb toggle (hide/show desktop sidebar)
        const breadcrumbToggle = document.getElementById('breadcrumbToggle');
        const desktopSidebar = document.getElementById('sidebar');
        if (breadcrumbToggle && desktopSidebar) {
            breadcrumbToggle.addEventListener('click', (e) => {
                e.preventDefault();
                // Toggle a dedicated class that hides the sidebar on desktop via CSS
                desktopSidebar.classList.toggle('sidebar-collapsed');
                // optional: rotate the breadcrumb arrow for feedback (Tailwind rotate class)
                breadcrumbToggle.classList.toggle('rotate-90');
            });
        }
    </script>
</body>
</html>
