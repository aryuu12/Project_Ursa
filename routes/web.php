<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// PUBLIC
Route::get('/', function () {
    return view('welcome');
});
Route::get('/event', function () {
    return view('event');
});

// ADMIN (KHUSUS ADMIN)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin.only'])->name('admin.dashboard');
Route::get('/admin/tambahevent', function () {
    return view('admin.tambahevent');
})->middleware(['auth', 'admin.only'])->name('admin.tambahevent');

// USER DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Group Profile (Bawaan Laravel Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';