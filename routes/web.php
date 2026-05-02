<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;

// PUBLIC
Route::get('/', function () {
    return view('welcome');
});
Route::get('/event', [EventController::class, 'publicEvent'])
    ->name('event.public');

Route::get('/laporan', function () {
    return view('laporanlaba');
})->middleware('auth')->name('laporan');

// ADMIN (KHUSUS ADMIN)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin.only'])->name('admin.dashboard');

// FORM ADMIN EVENT
Route::get('/admin/event', function () {
    return view('admin.event');
})->middleware(['auth', 'admin.only'])->name('admin.event');

Route::get('/admin/event', [EventController::class, 'index'])
    ->middleware(['auth', 'admin.only'])
    ->name('admin.event');

Route::get('/admin/tambahevent', [EventController::class, 'create'])
    ->middleware(['auth', 'admin.only'])
    ->name('admin.tambahevent');

Route::post('/admin/tambahevent', [EventController::class, 'store'])
    ->middleware(['auth', 'admin.only'])
    ->name('admin.tambahevent.store');

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