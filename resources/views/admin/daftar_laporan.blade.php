@extends('layouts.dashboard')

@section('title', 'Daftar Laporan | JagaAir.id')

@section('content')
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
@endsection