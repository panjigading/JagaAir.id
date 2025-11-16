<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DetailLaporanController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\KotakSaranController;
use App\Http\Controllers\SaranController;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/dashboard', [DasboardController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/dashboard/daftar_laporan', [DasboardController::class, 'daftar_laporan'])
    ->name('admin.daftar_laporan');

Route::get('/dashboard/detail_laporan/{id}', [DetailLaporanController::class, 'show'])
    ->name('admin.detail_laporan');

Route::post('/dashboard/detail_laporan/{id}', [DetailLaporanController::class, 'update'])
    ->name('admin.update_detail_laporan');

Route::get('/dashboard/detail_saran/{id}', [KotakSaranController::class, 'show'])->name('admin.kotak_saran.show');
Route::delete('/dashboard/detail_saran/hapus/{id}', [KotakSaranController::class, 'destroy'])->name('admin.kotak_saran.destroy');
Route::get('/dashboard/kotak_saran', [KotakSaranController::class, 'index'])->name('admin.kotak_saran.index');

Route::get('/form_saran', [SaranController::class, 'create'])->name('form_saran');
Route::post('/form_saran', [SaranController::class, 'store'])->name('form_saran.store');

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