<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('tentang', [LandingController::class, 'tentang'])->name('landing.tentang');
Route::get('produk', [LandingController::class, 'produk'])->name('landing.produk');
Route::get('produk/{id}', [LandingController::class, 'detail'])->name('landing.detail');
Route::get('layanan', [LandingController::class, 'layanan'])->name('landing.layanan');
Route::get('ulasan', [LandingController::class, 'ulasan'])->name('landing.ulasan');
Route::post('ulasan', [LandingController::class, 'store']);
Route::get('form_ulasan', [LandingController::class, 'form_ulasan'])->name('landing.form_ulasan');
Route::post('form_ulasan', [LandingController::class, 'store']);
Route::resource('/', LandingController::class);