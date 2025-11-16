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
            @forelse($laporans as $laporan)
            @php
                $latest = $laporan->latestRiwayat ?? null;
                $status = strtolower($latest->status ?? $laporan->status ?? 'menunggu');

                // Map status to label and badge classes to match RiwayatLaporanSeeder
                $statusMap = [
                    'menunggu' => ['label' => 'Menunggu', 'class' => 'bg-blue-100 text-blue-700'],
                    'terverifikasi' => ['label' => 'Terverifikasi', 'class' => 'bg-indigo-100 text-indigo-700'],
                    'diproses' => ['label' => 'Diproses', 'class' => 'bg-yellow-100 text-yellow-700'],
                    'selesai' => ['label' => 'Selesai', 'class' => 'bg-green-100 text-green-700'],
                    'dikembalikan' => ['label' => 'Dikembalikan', 'class' => 'bg-red-100 text-red-600'],
                ];

                $statusLabel = $statusMap[$status]['label'] ?? ucfirst($status);
                $badgeClass = $statusMap[$status]['class'] ?? 'bg-blue-100 text-blue-700';
            @endphp
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500 underline"><a href="{{ route('admin.detail_laporan', ['id' => $laporan->id]) }}">{{ sprintf('%05d', $laporan->id) }}</a></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ $laporan->user->name ?? $laporan->display_name ?? 'ANONIM' }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->location_display ?? ($laporan->kelurahan . ', ' . $laporan->kecamatan) }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->created_at->format('d M Y') }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->kategori }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <span class="px-3 py-1 {{ $badgeClass }} text-xs font-medium rounded-lg">{{ $statusLabel }}</span>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-4 text-center text-gray-500">Tidak ada laporan terbaru.</td>
            </tr>
            @endforelse
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
            @forelse($saran as $item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ sprintf('%05d', $item->id_saran) }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ $item->user->name ?? 'ANONIM' }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $item->tanggal->format('d M Y') }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $item->kategori }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <a href="{{ route('admin.kotak_saran') }}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                            Detail
                        </button>
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada saran terbaru.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection