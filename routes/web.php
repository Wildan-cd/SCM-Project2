<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
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

Route::get('dashboard', [dashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('produk_list', [dashboardController::class, 'produk_list'])->name('admin.produk_list');

Route::get('review', [dashboardController::class, 'review'])->name('admin.review');

Route::post('dashboard', [dashboardController::class, 'add_produk']);

Route::delete('produk_list/{id}', [dashboardController::class, 'delete'])->name('admin.produk.delete');

Route::delete('review/{id}', [dashboardController::class, 'reviewDel'])->name('admin.review.delete');

Route::get('input_produk', [dashboardController::class, 'input'])->name('admin.input_produk');

Route::get('update_produk/{id}', [dashboardController::class, 'edit'])->name('admin.update_produk');

Route::post('input_produk', [dashboardController::class, 'create']);

Route::put('dashboard/{id}', [dashboardController::class, 'update'])->name('admin.dashboard.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
