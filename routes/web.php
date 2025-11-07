<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/detail_laporan', function () {
    return view('detail_laporan');
});

Route::get('/kotak-saran', function () {
    return view('welcome');
});

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/cari_laporan', function () {
    return view('cari_laporan');
});

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function (Request $request) {
    // If Auth is available, log the user out. Otherwise just redirect home.
    if (function_exists('auth') && auth()->check()) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
    return redirect('/');
})->name('logout');

// (Note) If you need a login route or auth scaffolding, consider installing Breeze/Jetstream.
