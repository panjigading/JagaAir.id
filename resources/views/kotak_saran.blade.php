@extends('layouts.dashboard')

@section('title', 'Kotak Saran | JagaAir.id')

@section('content')
<!-- Daftar Saran Content -->
<h2 class="text-2xl font-bold mb-6">Daftar Saran</h2>

<!-- Filter Section -->
<form class="flex items-center justify-between mb-6">
    <div class="flex gap-4 items-center">
        <span class="text-gray-500"><i class="bi bi-funnel"></i> Filter by</span>
        <select class="bg-white border border-gray-300 rounded py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
            <option>Tanggal</option>
            <option>Minggu lalu</option>
            <option>Bulan lalu</option>
        </select>
        <select class="bg-white border border-gray-300 rounded py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
            <option>Kategori</option>
            <option>Infrastruktur Air</option>
            <option>Sanitasi</option>
            <option>Pelayanan & Respons Petugas</option>
            <option>Edukasi & Sosialisasi</option>
            <option>Inovasi & Ide Baru</option>
            <option>Sistem & Aplikasi</option>
        </select>
    </div>
    <div class="flex gap-4">
        <button type="reset" class="bg-white text-red-700 px-4 py-2 rounded hover:bg-red-200 focus:outline-none">
            Reset
        </button>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Terapkan
        </button>
    </div>
</form>

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
                        <a href="{{ route('admin.detail_saran', $suggestion['id']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-xs">
                            Detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection