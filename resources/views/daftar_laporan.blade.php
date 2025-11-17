@extends('layouts.dashboard')

@section('title', 'Daftar Laporan | JagaAir.id')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('content')
<h2 class="text-2xl font-bold mb-6">Daftar Laporan</h2>

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
    @forelse ($daftar_laporan as $laporan)
      <tr class="border-b hover:bg-gray-50">
        <td class="px-6 py-4 text-blue-500 underline"><a href="{{ route('admin.detail_laporan', $laporan->id) }}">{{ $laporan->id }}</a></td>
        <td>{{ $laporan->pengguna->name ?? '(Anonim)' }}</td>
        <td>{{ $laporan->kecamatan }}, {{ $laporan->kelurahan }}</td>
        <td>{{ $laporan->created_at->format('d F Y') }}</td>
        <td>{{ $laporan->kategori }}</td>
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
      @empty
      <tr class="bg-blue-50 border border-blue-200 text-blue-800 px-6 py-4 rounded-lg text-center">
        <td class="text-lg font-medium">Tidak ada laporan yang sesuai dengan filter yang Anda pilih.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

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