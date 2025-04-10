<?php

use Illuminate\Support\Facades\Route;
use App\Models\Periksa;
use App\Models\Obat;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layout.app');
});

// Pasien
Route::get('/pasien/dashboard', function () {
    return view('pasien.dashboard');
})->name('pasien.dashboard');

// Dokter
Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard');
})->name('dokter.dashboard');

Route::get('/dokter/periksa', function () {
    $periksas = Periksa::all();
    return view('dokter.periksa', compact('periksas'));
})->name('dokter.periksa');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dokter/obat', function () {
    $obat = Obat::all();
    return view('dokter.obat', compact('obat'));
})->name('dokter.obat');

Route::get('/pasien/riwayat', function () {
    return view('pasien.riwayat');
})->name('pasien.riwayat');

Route::get('/pasien/periksa', function () {
    return view('pasien.periksa');
})->name('pasien.periksa');


