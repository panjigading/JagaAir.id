@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-primary">Dashboard</h1>

    <div class="grid grid-cols-4 gap-6 mb-10">
        @include('components.stat-card', ['title' => 'Total Laporan', 'value' => '990'])
        @include('components.stat-card', ['title' => 'Menunggu Verifikasi', 'value' => '30'])
        @include('components.stat-card', ['title' => 'Diproses', 'value' => '15'])
        @include('components.stat-card', ['title' => 'Selesai', 'value' => '920'])
    </div>

    @include('components.table-section', [
        'title' => 'Laporan Terbaru',
        'headers' => ['ID', 'Name', 'Kecamatan, Kelurahan', 'Date', 'Category', 'Status'],
        'data' => [
            ['id' => '00001', 'name' => 'ANONIM', 'alamat' => 'Lowokwaru, Jatimulyo', 'date' => '04 Sep 2025', 'category' => 'Akses Air Bersih', 'status' => 'Selesai'],
            ['id' => '00002', 'name' => 'ANONIM', 'alamat' => 'Blimbing, Purwantoro', 'date' => '28 May 2025', 'category' => 'Infrastruktur Air', 'status' => 'Terverifikasi'],
            ['id' => '00003', 'name' => 'Ahmad Fauzi', 'alamat' => 'Lowokwaru, Dinoyo', 'date' => '23 Nov 2025', 'category' => 'Sanitasi', 'status' => 'Ditolak'],
            ['id' => '00004', 'name' => 'Anonim', 'alamat' => 'Sukun, Karangbesuki', 'date' => '29 Jul 2025', 'category' => 'Bencana Terkait Air', 'status' => 'Diproses'],
        ]
    ])

    @include('components.table-section', [
        'title' => 'Saran Terbaru',
        'headers' => ['ID', 'Name', 'Date', 'Category', 'Aksi'],
        'data' => [
            ['id' => '00001', 'name' => 'ANONIM', 'date' => '20 Mar 2025', 'category' => 'Infrastruktur Air', 'status' => 'Detail'],
            ['id' => '00002', 'name' => 'Ahmad Fauzi', 'date' => '23 Nov 2025', 'category' => 'Sanitasi', 'status' => 'Detail'],
        ]
    ])
@endsection
