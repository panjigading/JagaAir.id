@extends('layouts.dashboard')

@section('title', 'Dashboard | JagaAir.id')

@section('content')
<!-- Dashboard Content -->
<h2 class="text-2xl font-bold mb-6">Dashboard</h2>

<!-- Stat Cards -->
<div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-6">
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Total Laporan</p>
        <p class="text-2xl font-bold text-blue-600">990</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Menunggu Verifikasi</p>
        <p class="text-2xl font-bold text-blue-600">30</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Diproses</p>
        <p class="text-2xl font-bold text-blue-600">15</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Dikembalikan</p>
        <p class="text-2xl font-bold text-blue-600">25</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Selesai</p>
        <p class="text-2xl font-bold text-blue-600">920</p>
    </div>
</div>

<!-- Recent Reports -->
<div class="bg-white p-6 rounded-lg shadow mb-6">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">Laporan Terbaru</h3>
        <a href="{{ route('admin.daftar_laporan') }}" class="text-blue-600 hover:underline">Lihat Semua</a>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kecamatan, Kelurahan</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500 underline"><a href="{{ route('admin.detail_laporan') }}">00001</a></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">ANONIM</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Lowokwaru, Jatimulyo</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">04 Sep 2025</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Pencemaran Air</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-lg">Selesai</span>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500 underline"><a href="{{ route('admin.detail_laporan') }}">00002</a></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">ANONIM</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Blimbing, Purwantoro</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">28 Mei 2025</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Infrastruktur Air</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-lg">Menunggu Verifikasi</span>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500 underline"><a href="{{ route('admin.detail_laporan') }}">00003</a></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">Ahmad Fauzi</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Lowokwaru, Dinoyo</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">23 Nov 2025</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Sanitasi</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <span class="px-3 py-1 bg-red-100 text-red-600 text-xs font-medium rounded-lg">Ditolak</span>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500 underline"><a href="{{ route('admin.detail_laporan') }}">00004</a></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">ANONIM</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Sukun, Karangbesuki</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">29 Jul 2025</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Bencana Terkait Air</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-medium rounded-lg">Diproses</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Recent Suggestions -->
<div class="bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">Saran Terbaru</h3>
        <a href="{{ route('admin.kotak_saran') }}" class="text-blue-600 hover:underline">Lihat Semua</a>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">00001</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">ANONIM</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">20 Mar 2025</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">Infrastruktur Air</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <a href="{{ route('admin.detail_saran', ['id' => '00001']) }}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                            Detail
                        </button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection