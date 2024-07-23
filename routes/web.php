<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/online', function () {
    return view('services/online/index');
})->middleware(['auth', 'verified'])->name('online');

Route::get('/offline', function () {
    return view('services/offline/index');
})->middleware(['auth', 'verified'])->name('offline');

Route::get('/offline/category', function () {
    return view('services/offline/category');
})->middleware(['auth', 'verified'])->name('category');

Route::get('/checkout', function () {
    return view('checkout/checkout');
})->middleware(['auth', 'verified'])->name('checkout');

Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth', 'verified'])->name('cart');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
