@extends('layouts.dashboard')

@section('title', 'Dashboard | JagaAir.id')

@section('content')
<h2 class="text-2xl font-bold mb-6">Dashboard</h2>
<div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-6">
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Total Laporan</p>
        <p class="text-2xl font-bold text-blue-600">{{ $stat['totalLaporan'] }}</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Menunggu Verifikasi</p>
        <p class="text-2xl font-bold text-blue-600">{{ $stat['menungguVerifikasi'] }}</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Diproses</p>
        <p class="text-2xl font-bold text-blue-600">{{ $stat['diproses'] }}</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Dikembalikan</p>
        <p class="text-2xl font-bold text-blue-600">{{ $stat['dikembalikan'] }}</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500">Selesai</p>
        <p class="text-2xl font-bold text-blue-600">{{ $stat['selesai'] }}</p>
    </div>
</div>

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
            @foreach ($daftar_laporan as $laporan)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500 underline"><a href="{{ route('admin.detail_laporan', $laporan->id) }}">{{ $laporan->id }}</a></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ $laporan->pengguna->name ?? '(Anonim)' }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->kecamatan }}, {{ $laporan->kelurahan }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->created_at->format('d F Y') }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->kategori }}</td>
                <td class="text-center">
                @php
                    $currentStatus = $laporan->latestRiwayat->status;
                @endphp
                <span class="px-3 py-1 text-xs font-medium rounded-lg
                    @if($currentStatus == 'menunggu') bg-gray-500 text-white
                    @elseif($currentStatus == 'diproses') bg-yellow-500 text-white
                    @elseif($currentStatus == 'selesai') bg-green-500 text-white
                    @elseif($currentStatus == 'dikembalikan') bg-red-500 text-white
                    @endif">
                    {{ Str::title($currentStatus) }}
                </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">Saran Terbaru</h3>
        <a href="{{ route('admin.kotak_saran.index') }}" class="text-blue-600 hover:underline">Lihat Semua</a>
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
                @foreach($daftar_saran as $saran)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $saran['id_saran'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    @if ($saran->user)
                        {{ $saran->user->name }}
                    @else
                        ( Anonim )
                    @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $saran['tanggal'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                            {{ $saran['kategori'] }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <a href="{{ route('admin.kotak_saran.show', $saran) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-xs">
                            Detail
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection