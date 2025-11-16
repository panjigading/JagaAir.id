@extends('layouts.dashboard')

@section('title', 'Daftar Laporan | JagaAir.id')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('content')
<h2 class="text-2xl font-bold mb-6">Daftar Laporan</h2>

<!-- Filter Section -->
<form method="GET" action="{{ route('admin.daftar_laporan') }}" class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    
    <!-- Tanggal -->
    <div class="bg-white rounded-lg shadow p-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal</label>
        <input type="text" id="dateRangePicker" name="tanggal_filter" 
               class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none text-sm"
               placeholder="Pilih rentang tanggal"
               value="{{ request('tanggal_filter') }}" />
    </div>

    <!-- Kecamatan -->
    <div class="bg-white rounded-lg shadow p-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Kecamatan</label>
        <select id="kecamatanDropdown" name="kecamatan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option value="">Pilih Kecamatan</option>
        </select>
    </div>

    <!-- Kelurahan -->
    <div class="bg-white rounded-lg shadow p-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Kelurahan</label>
        <select id="kelurahanDropdown" name="kelurahan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option value="">Pilih Kelurahan</option>
        </select>
    </div>

    <!-- Kategori -->
    <div class="bg-white rounded-lg shadow p-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
        <select name="kategori" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option value="">Semua Kategori</option>
            @foreach($kategori as $kat)
                <option value="{{ $kat }}" {{ request('kategori') === $kat ? 'selected' : '' }}>{{ $kat }}</option>
            @endforeach
        </select>
    </div>

    <!-- Status -->
    <div class="bg-white rounded-lg shadow p-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
        <select name="status" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option value="">Semua Status</option>
            @foreach($statuses as $stat)
                <option value="{{ $stat }}" {{ request('status') === $stat ? 'selected' : '' }}>{{ ucfirst(str_replace('_', ' ', $stat)) }}</option>
            @endforeach
        </select>
    </div>

    <!-- Search Button -->
    <div class="flex items-end col-span-1 md:col-span-4 gap-2">
        <a href="{{ route('admin.daftar_laporan') }}" class="flex-1 px-6 py-2 bg-red-100 text-red-700 rounded-md hover:bg-red-200 transition font-medium text-center">
            Reset
        </a>
        <button type="submit" class="flex-1 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition font-medium">
            Terapkan
        </button>
    </div>
</form>

<!-- Results Counter -->
<div class="mb-6">
    <h3 class="text-lg font-semibold text-gray-700">Menampilkan {{ $laporans->count() }} laporan</h3>
</div>

<!-- Table -->
@if($laporans->count() > 0)
<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full text-left text-sm">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Pelapor</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lokasi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($laporans as $laporan)
            @php
                $currentStatus = $laporan->latestRiwayat ? strtolower($laporan->latestRiwayat->status) : strtolower($laporan->status);
            @endphp
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                    {{ str_pad($laporan->id, 5, '0', STR_PAD_LEFT) }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->user->name ?? 'ANONIM' }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->kelurahan }}, {{ $laporan->kecamatan }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->created_at->format('d M Y') }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $laporan->kategori }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <span class="px-3 py-1 rounded-full text-xs font-semibold
                        @if($currentStatus == 'menunggu') bg-gray-500 text-white
                        @elseif($currentStatus == 'terverifikasi') bg-blue-500 text-white
                        @elseif($currentStatus == 'diproses') bg-yellow-500 text-white
                        @elseif($currentStatus == 'selesai') bg-green-500 text-white
                        @elseif($currentStatus == 'dikembalikan') bg-red-500 text-white
                        @endif
                    ">{{ ucfirst(str_replace('_', ' ', $currentStatus)) }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <a href="{{ route('admin.detail_laporan', $laporan->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="bg-blue-50 border border-blue-200 text-blue-800 px-6 py-4 rounded-lg text-center">
    <p class="text-lg font-medium">Tidak ada laporan yang sesuai dengan filter yang Anda pilih.</p>
</div>
@endif

<!-- Flatpickr Script untuk Date Range Picker -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugin.min.js"></script>
<script src="{{ asset('js/kelurahan_kecamatan.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize date range picker
    flatpickr("#dateRangePicker", {
        mode: "range",
        dateFormat: "d/m/Y",
        locale: "id",
        placeholder: "Pilih rentang tanggal",
    });

    // Get current filter values from request
    const currentKecamatan = "{{ request('kecamatan') }}";
    const currentKelurahan = "{{ request('kelurahan') }}";

    // Function to restore filter state
    function restoreFilterState() {
        const kecamatanDropdown = document.getElementById('kecamatanDropdown');
        const kelurahanDropdown = document.getElementById('kelurahanDropdown');

        if (!kecamatanDropdown || !kelurahanDropdown) {
            console.warn('Dropdown elements not found');
            return;
        }

        // Set kecamatan value if it was previously selected
        if (currentKecamatan) {
            kecamatanDropdown.value = currentKecamatan;
            // Trigger change event to populate kelurahan
            kecamatanDropdown.dispatchEvent(new Event('change'));
            
            // Wait a bit for kelurahan options to be populated, then select kelurahan
            setTimeout(function() {
                if (currentKelurahan && kelurahanDropdown.querySelector(`option[value="${currentKelurahan}"]`)) {
                    kelurahanDropdown.value = currentKelurahan;
                }
            }, 100);
        }
    }

    // Wait a bit for kelurahan_kecamatan.js to load and initialize
    setTimeout(restoreFilterState, 200);
});
</script>
@endsection