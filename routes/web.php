<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');

Route::get('/dashboard/detail_laporan', function () {
    return view('detail_laporan');
})->name('admin.detail_laporan');

Route::get('/dashboard/daftar_laporan', function () {
    return view('daftar_laporan');
})->name('admin.daftar_laporan');

Route::get('/dashboard/kotak_saran', function () {
    return view('kotak_saran');
})->name('admin.kotak_saran');

Route::get('/dashboard/kotak_saran/{id}', function ($id) {
    $suggestions = [
        '00001' => ['id' => '00001', 'name' => 'ANONIM', 'date' => '20 MAR 2025', 'category' => 'Infrastruktur Air', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam leo sapien, ultricies id quam sit amet, feugiat laoreet magna.'],
        '00002' => ['id' => '00002', 'name' => 'ANONIM', 'date' => '28 May 2025', 'category' => 'Infrastruktur Air', 'content' => 'Contoh saran lainnya...'],
        '00003' => ['id' => '00003', 'name' => 'Ahmad Fauzi', 'date' => '23 Nov 2025', 'category' => 'Sanitasi', 'content' => 'Isi saran Ahmad Fauzi...'],
        '00004' => ['id' => '00004', 'name' => 'Gilbert Johnston', 'date' => '05 Feb 2025', 'category' => 'Pelayanan & Respons Petugas', 'content' => 'Saran tentang pelayanan...'],
        '00005' => ['id' => '00005', 'name' => 'Anonim', 'date' => '29 Jul 2025', 'category' => 'Edukasi & Sosialisasi', 'content' => 'Saran edukasi...'],
        '00006' => ['id' => '00006', 'name' => 'Alfred Murray', 'date' => '15 Aug 2025', 'category' => 'Inovasi & Ide Baru', 'content' => 'Inovasi baru...'],
        '00007' => ['id' => '00007', 'name' => 'Maggie Sullivan', 'date' => '21 Dec 2025', 'category' => 'Sistem & Aplikasi', 'content' => 'Saran sistem...'],
        '00008' => ['id' => '00008', 'name' => 'Rosie Todd', 'date' => '30 Apr 2025', 'category' => 'Infrastruktur Air', 'content' => 'Saran infrastruktur...'],
        '00009' => ['id' => '00009', 'name' => 'Anonim', 'date' => '09 Jan 2025', 'category' => 'Sistem & Aplikasi', 'content' => 'Saran sistem lain...'],
    ];

    $suggestion = $suggestions[$id] ?? null;

    if (!$suggestion) {
        abort(404, 'Saran tidak ditemukan.');
    }

    return view('detail_saran', ['suggestion' => $suggestion]);
})->where('id', '[0-9]+')->name('admin.detail_saran'); 

Route::get('/form_saran', function () {
    return view('form_saran');
})->name('form_saran');

Route::get('/sign_up', function () {
    return view('sign_up');
})->name('sign_up');

Route::get('/sign_in', function () {
    return view('sign_in');
})->name('sign_in');

Route::post('/logout', function (Request $request) {
    if (function_exists('auth') && auth()->check()) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
    return redirect('/');
})->name('logout');

// ============ ROUTES UNTUK LAPORAN & RIWAYAT LAPORAN ============
// Routes untuk cari laporan dengan filter & search
Route::get('/cari_laporan', [LaporanController::class, 'cariLaporan'])->name('cari_laporan');

// Routes untuk detail laporan dan riwayat update
Route::get('/cari_laporan/{id}', [LaporanController::class, 'detailLaporan'])
    ->where('id', '[0-9]+')
    ->name('detail_laporan');

// Route untuk update status laporan (admin only)
Route::post('/cari_laporan/{id}/update-status', [LaporanController::class, 'updateStatus'])
    ->where('id', '[0-9]+')
    ->name('update_status_laporan');