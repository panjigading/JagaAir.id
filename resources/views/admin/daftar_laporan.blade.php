<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Laporan | JagaAir.id</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Layout Container -->
  <div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md p-6 flex flex-col justify-between">
      <div>
        <h1 class="text-2xl font-bold text-blue-700 mb-10">JagaAir.id</h1>
        <nav class="space-y-4">
          <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-blue-600">
            <span>🏠</span> Dashboard
          </a>
          <a href="#" class="flex items-center gap-3 text-blue-600 font-semibold">
            <span>📋</span> Daftar Laporan
          </a>
          <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-blue-600">
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
        <h2 class="text-2xl font-bold mb-6">Daftar Laporan</h2>

        <!-- Filter -->
        <div class="flex gap-3 mb-6 items-center">
          <button class="flex items-center gap-2 border border-gray-300 px-4 py-2 rounded-lg bg-white hover:bg-gray-50">
            <span>🔍</span> Daerah
          </button>
          <button class="flex items-center gap-2 border border-gray-300 px-4 py-2 rounded-lg bg-white hover:bg-gray-50">
            📅 Date
          </button>
          <button class="flex items-center gap-2 border border-gray-300 px-4 py-2 rounded-lg bg-white hover:bg-gray-50">
            🗂️ Category
          </button>
          <button class="flex items-center gap-2 border border-gray-300 px-4 py-2 rounded-lg bg-white hover:bg-gray-50">
            ⚙️ Status
          </button>
          <button class="text-red-500 hover:underline ml-auto">Reset Filter</button>
        </div>

        <!-- Table -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <table class="w-full text-left text-sm">
            <thead class="bg-gray-50">
              <tr class="text-gray-700 border-b">
                <th class="px-6 py-3">ID</th>
                <th class="px-6 py-3">NAME</th>
                <th class="px-6 py-3">KECAMATAN, KELURAHAN</th>
                <th class="px-6 py-3">DATE</th>
                <th class="px-6 py-3">CATEGORY</th>
                <th class="px-6 py-3">STATUS</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-6 py-4">00001</td>
                <td>ANONIM</td>
                <td>Lowokwaru, Jatimulyo</td>
                <td>20 Mar 2025</td>
                <td>Infrastruktur Air</td>
                <td><span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-lg">Selesai</span></td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-6 py-4">00002</td>
                <td>Anonim</td>
                <td>Blimbing, Purwantoro</td>
                <td>28 May 2025</td>
                <td>Infrastruktur Air</td>
                <td><span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-lg">Terverifikasi</span></td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-6 py-4">00003</td>
                <td>Ahmad Fauzi</td>
                <td>Lowokwaru, Dinoyo</td>
                <td>23 Nov 2025</td>
                <td>Sanitasi</td>
                <td><span class="px-3 py-1 bg-red-100 text-red-600 text-xs font-medium rounded-lg">Ditolak</span></td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-6 py-4">00004</td>
                <td>Anonim</td>
                <td>Sukun, Karangbesuki</td>
                <td>29 Jul 2025</td>
                <td>Bencana Terkait Air</td>
                <td><span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-medium rounded-lg">Diproses</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
