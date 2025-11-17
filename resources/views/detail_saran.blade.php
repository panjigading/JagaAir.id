@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-6">Detail Saran</h2>

    <!-- Card Detail Saran -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-700">Informasi Saran</h3>
                <div class="mt-4 space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">ID Saran</label>
                        <p class="text-gray-900">{{ $saran->id_saran }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Nama Pengirim</label>
                        <p class="text-gray-900">{{ $saran->nama }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Tanggal Pengiriman</label>
                        <p class="text-gray-900">{{ $saran->tanggal }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Kategori</label>
                        <p class="text-gray-900">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                {{ $saran->kategori }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-700">Isi Saran</h3>
                <div class="mt-4">
                    <p class="text-gray-900 whitespace-pre-line">{{ $saran->isi_saran }}</p>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('admin.kotak_saran.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
            <form action="{{ route('admin.kotak_saran.destroy', $saran) }}" 
                method="POST" 
                class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Hapus Saran
                </button>
            </form>
        </div>
    </div>
</div>
@endsection