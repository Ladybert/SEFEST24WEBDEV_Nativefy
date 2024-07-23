<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::resource('admin', AdminController::class)->middleware(['auth', 'verified','admin']);

Route::resource('dashboard', DashboardController::class)->middleware(['auth', 'verified']);

Route::resource('/', LandingpageController::class);
Route::get('/',[LandingpageController::class, 'index'])->name('landingpage.index');

Route::get('/', [SearchController::class, 'index'])->name('home');

Route::get('/online', function () {
    return view('home/online');
})->name('online');

Route::get('/offline', function () {
    return view('home/offline');
})->name('offline');


// Route::resource('online', OnlineController::class);

// Route::resource('offline', OfflineController::class);

Route::get('/checkout', function () {
    return view('checkout/checkout');
})->middleware(['auth', 'verified'])->name('checkout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
