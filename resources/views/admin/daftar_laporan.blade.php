@extends('layouts.dashboard')

@section('title', 'Daftar Laporan | JagaAir.id')

@section('content')
<h2 class="text-2xl font-bold mb-6">Daftar Laporan</h2>

<!-- Filter -->
<form class="flex items-center justify-between gap-4 mb-6">
  <div class="flex gap-4 items-center">
    <span class="text-gray-500">Filter:</span>
    <select class="bg-white border border-gray-300 rounded py-2 px-4 leading-tight focus:outline-none focus:border-blue-500">
        <option>Tanggal</option>
        <option>Minggu lalu</option>
        <option>Bulan lalu</option>
    </select>
    <select id="kecamatanDropdown" class="bg-white border border-gray-300 rounded py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
        <option value="">Kecamatan</option>
    </select>
    <select id="kelurahanDropdown" class="bg-white border border-gray-300 rounded py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
        <option value="">Kelurahan</option>
    </select>
    <select id="jenis-masalah" class="bg-white border border-gray-300 rounded py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
      <option value="">Kategori</option>
      <option value="infrastruktur-air">Infrastruktur Air</option>
      <option value="sanitasi">Sanitasi</option>
      <option value="pencemaran-air">Pencemaran Air</option>
      <option value="bencana-terkait-air">Bencana Terkait Air</option>
    </select>
    <select class="bg-white border border-gray-300 rounded py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
      <option>Status</option>
      <option value="Diproses">Diproses</option>
      <option value="Ditangani">Ditangani</option>
      <option value="Selesai">Selesai</option>
      <option value="Dikembalikan">Dikembalikan</option>
    </select>
  </div>
  <div>
    <button type="reset" class="bg-white text-red-700 px-4 py-2 rounded hover:bg-red-200 focus:outline-none">
        Reset
    </button>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
        Terapkan
    </button>
  </div>
</form> 

<!-- Table -->
<div class="bg-white shadow-md rounded-lg overflow-hidden">
  <table class="w-full text-left text-sm">
    <thead class="bg-gray-50">
      <tr class="text-gray-700 border-b">
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NAME</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">KECAMATAN, KELURAHAN</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DATE</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CATEGORY</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr class="border-b hover:bg-gray-50">
        <td class="px-6 py-4 text-blue-500 underline"><a href="{{ route('admin.detail_laporan') }}">00001</a></td>
        <td>ANONIM</td>
        <td>Lowokwaru, Jatimulyo</td>
        <td>4 Sep 2025</td>
        <td>Pencemaran Air</td>
        <td><span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-lg">Selesai</span></td>
      </tr>
      <tr class="border-b hover:bg-gray-50">
        <td class="px-6 py-4 text-blue-500 underline"><a href="{{ route('admin.detail_laporan') }}">00002</a></td>
        <td>ANONIM</td>
        <td>Blimbing, Purwantoro</td>
        <td>28 Mei 2025</td>
        <td>Infrastruktur Air</td>
        <td><span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-lg">Menunggu Verifikasi</span></td>
      </tr>
      <tr class="border-b hover:bg-gray-50">
        <td class="px-6 py-4 text-blue-500 underline"><a href="{{ route('admin.detail_laporan') }}">00003</a></td>
        <td>Ahmad Fauzi</td>
        <td>Lowokwaru, Dinoyo</td>
        <td>23 Nov 2025</td>
        <td>Sanitasi</td>
        <td><span class="px-3 py-1 bg-red-100 text-red-600 text-xs font-medium rounded-lg">Ditolak</span></td>
      </tr>
      <tr class="border-b hover:bg-gray-50">
        <td class="px-6 py-4 text-blue-500 underline"><a href="{{ route('admin.detail_laporan') }}">00004</a></td>
        <td>ANONIM</td>
        <td>Sukun, Karangbesuki</td>
        <td>29 Jul 2025</td>
        <td>Bencana Terkait Air</td>
        <td><span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-medium rounded-lg">Diproses</span></td>
      </tr>
    </tbody>
  </table>
</div>
</section>
<script src="{{ asset('js/kelurahan_kecamatan.js') }}"></script>
@endsection