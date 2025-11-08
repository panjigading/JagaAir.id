@extends('layouts.dashboard')

@section('title', 'Kotak Saran | JagaAir.id')

@section('content')
<!-- Daftar Saran Content -->
<h2 class="text-2xl font-bold mb-6">Daftar Saran</h2>

<!-- Filter Section -->
<div class="bg-white p-4 rounded-lg shadow mb-6">
    <div class="flex items-center space-x-4">
        <span class="text-gray-500"><i class="bi bi-funnel"></i> Filter by</span>
        <div class="relative">
            <select class="appearance-none bg-white border border-gray-300 rounded py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
                <option>Date</option>
                <option>Last Week</option>
                <option>Last Month</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <i class="bi bi-chevron-down"></i>
            </div>
        </div>
        <div class="relative">
            <select class="appearance-none bg-white border border-gray-300 rounded py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
                <option>Category</option>
                <option>Infrastruktur Air</option>
                <option>Sanitasi</option>
                <option>Pelayanan & Respons Petugas</option>
                <option>Edukasi & Sosialisasi</option>
                <option>Inovasi & Ide Baru</option>
                <option>Sistem & Aplikasi</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <i class="bi bi-chevron-down"></i>
            </div>
        </div>
        <button class="text-red-500 flex items-center space-x-1">
            <i class="bi bi-arrow-counterclockwise"></i> <span>Reset Filter</span>
        </button>
    </div>
</div>

<!-- Table Section -->
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NAME</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DATE</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CATEGORY</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">AKSI</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Contoh Data -->
                @php
                    $suggestions = [
                        ['id' => '00001', 'name' => 'ANONIM', 'date' => '20 MAR 2025', 'category' => 'Infrastruktur Air'],
                        ['id' => '00002', 'name' => 'ANONIM', 'date' => '28 May 2025', 'category' => 'Infrastruktur Air'],
                        ['id' => '00003', 'name' => 'Ahmad Fauzi', 'date' => '23 Nov 2025', 'category' => 'Sanitasi'],
                        ['id' => '00004', 'name' => 'Gilbert Johnston', 'date' => '05 Feb 2025', 'category' => 'Pelayanan & Respons Petugas'],
                        ['id' => '00005', 'name' => 'Anonim', 'date' => '29 Jul 2025', 'category' => 'Edukasi & Sosialisasi'],
                        ['id' => '00006', 'name' => 'Alfred Murray', 'date' => '15 Aug 2025', 'category' => 'Inovasi & Ide Baru'],
                        ['id' => '00007', 'name' => 'Maggie Sullivan', 'date' => '21 Dec 2025', 'category' => 'Sistem & Aplikasi'],
                        ['id' => '00008', 'name' => 'Rosie Todd', 'date' => '30 Apr 2025', 'category' => 'Infrastruktur Air'],
                        ['id' => '00009', 'name' => 'Anonim', 'date' => '09 Jan 2025', 'category' => 'Sistem & Aplikasi'],
                    ];
                @endphp

                @foreach($suggestions as $suggestion)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $suggestion['id'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $suggestion['name'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $suggestion['date'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                            {{ $suggestion['category'] }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <!-- 🔧 Ganti button dengan link ke halaman detail menggunakan named route -->
                        <a href="{{ route('detail.saran', $suggestion['id']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-xs">
                            DETAIL
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection