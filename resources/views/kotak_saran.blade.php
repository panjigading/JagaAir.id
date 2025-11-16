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
                @foreach($daftar_saran as $saran)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $saran->id_saran }}</td>
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
</div>
@endsection