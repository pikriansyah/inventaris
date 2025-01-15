<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;

Route::get('/register', [PenggunaController::class, 'showRegister'])->name('register');
Route::post('/register', [PenggunaController::class, 'register']);

Route::get('/login', [PenggunaController::class, 'showLogin'])->name('login');
Route::post('/login', [PenggunaController::class, 'login']);

Route::post('/logout', [PenggunaController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::resource('kategori', KategoriController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('barang', BarangController::class);

// routes/web.php
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




Route::get('/', function () {
    return view('welcome');
});
