<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/detail_laporan', function () {
    return view('detail_laporan');
});

Route::get('/admin/daftar-laporan', function () {
    return view('admin.daftar-laporan');
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

Route::post('/logout', function (Request $request) {
    if (function_exists('auth') && auth()->check()) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
    return redirect('/');
})->name('logout');
