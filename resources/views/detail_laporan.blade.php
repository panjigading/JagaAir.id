@extends('layouts.dashboard')

@section('title', 'Detail Laporan | JagaAir.id')

@section('content')
<h3 class="text-2xl font-bold mb-6">Detail Laporan</h3>
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <div>
                <div class="text-sm text-slate-500">Status</div>
                <div class="inline-block mt-1 px-3 py-1 rounded-full text-sm font-medium text-white bg-emerald-500">Selesai</div>
            </div>

            <div class="mt-3 text-sm text-slate-500">Nama Pelapor</div>
            <div class="font-medium">(Anonim)</div>

            <div class="mt-3 text-sm text-slate-500">Kecamatan</div>
            <div class="font-medium">Lowokwaru</div>

            <div class="mt-3 text-sm text-slate-500">Kelurahan</div>
            <div class="font-medium">Jatimulyo</div>

            <div class="mt-3 text-sm text-slate-500">Tanggal Pelaporan</div>
            <div class="font-medium">20 Maret 2025</div>

            <div class="mt-3 text-sm text-slate-500">Kategori</div>
            <div class="font-medium">Infrastruktur Air</div>

            <div class="mt-4">
                <div class="text-sm text-slate-500">Deskripsi</div>
                <div class="mt-1 text-sm text-slate-700">
                    Di sekitar kawasan jembatan Suhat, Kecamatan Lowokwaru, Kota Malang, kondisi sanitasi terlihat memprihatinkan. Saluran air di area tersebut mengalami penyumbatan akibat penumpukan sampah rumah tangga dan lumpur, sehingga menimbulkan genangan air yang berbau tidak sedap.
                    Situasi ini berpotensi menimbulkan gangguan kesehatan bagi warga sekitar serta menghambat aliran air ke saluran utama. Diharapkan pihak terkait dapat segera melakukan pembersihan dan perbaikan sistem drainase agar aliran air kembali lancar dan lingkungan tetap bersih.
                </div>
            </div>
        </div>

        <div>
            <div class="text-sm text-slate-500">Bukti</div>
            <div class="mt-2">
                <div class="mt-2 h-80">
                    <img src="{{ asset('images/bukti-laporan.png') }}" class="h-full w-full object-cover rounded" alt="Bukti">
                </div>
            </div>
        </div>
    </div>

    <hr class="my-6 border-slate-200" />

    <form id="updateForm" method="POST" action="" class="space-y-4">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm text-slate-600">Ubah Status</label>
                <div class="relative mt-1">
                    <select name="status" class="appearance-none bg-white block w-full rounded border border-gray-200 px-3 py-2 pr-10 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-200">
                    <option value="Diproses">Diproses</option>
                    <option value="Ditangani">Ditangani</option>
                    <option selected value="Selesai">Selesai</option>
                    <option value="Dikembalikan">Dikembalikan</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                        <svg class="h-4 w-4 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.06z"/></svg>
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-sm text-slate-600">Tanggapan</label>
                <textarea name="tanggapan" rows="4" class="mt-1 block w-full rounded px-3 py-2 ring-1 ring-slate-200 focus:outline-none focus:ring-2 focus:ring-sky-300 min-h-[33vh]" placeholder="Tulis tanggapan...">{{ old('tanggapan', $r->tanggapan ?? '') }}</textarea>
            </div>
        </div>
    </form>

    <div class="flex items-center justify-between mt-4">
            <form method="POST" action="" onsubmit="return confirm('Hapus laporan ini?');">
                @csrf
                <button type="submit" class="inline-flex items-center text-sm px-4 py-2 bg-white text-red-600 rounded ring-2 ring-red-600 hover:bg-red-600 hover:text-white">Hapus Laporan</button>
            </form>
        <button form="updateForm" type="submit" class="inline-flex items-center text-sm px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded shadow">Simpan Perubahan</button>
    </div>
</div>
@endsection