<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Daftar Laporan — {{ config('app.name', 'JagaAir.id') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">
    <div class="min-h-screen flex">
        <main class="flex-1 max-w-4xl mx-auto p-6">
            <h1 class="text-2xl font-semibold text-center mb-6">Daftar Laporan</h1>

            <div class="space-y-3">
                <!-- Placeholder list; replace with loop over reports -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="font-medium">Laporan #1</h2>
                    <p class="text-sm text-slate-500">Lokasi: Jalan Contoh — Status: Terbuka</p>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="font-medium">Laporan #2</h2>
                    <p class="text-sm text-slate-500">Lokasi: Gang Contoh — Status: Ditangani</p>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="font-medium">Laporan #3</h2>
                    <p class="text-sm text-slate-500">Lokasi: Jl. Mawar — Status: Selesai</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
