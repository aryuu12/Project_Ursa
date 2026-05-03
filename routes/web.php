<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. HALAMAN PUBLIC
Route::get('/', function () {
    return view('welcome');
});

Route::get('/event', [EventController::class, 'publicEvent'])->name('event.public');


// 2. HALAMAN USER (AUTH UMUM)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/laporan', function () {
        return view('laporanlaba');
    })->name('laporan');

    // Profile (Bawaan Laravel Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// 3. HALAMAN ADMIN (AUTH + ADMIN ONLY)
Route::middleware(['auth', 'admin.only'])->group(function () {
    
    // Dashboard Admin
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Management Event
    Route::get('/admin/event', [EventController::class, 'index'])->name('admin.event');
    Route::get('/admin/tambahevent', [EventController::class, 'create'])->name('admin.tambahevent');
    Route::post('/admin/tambahevent', [EventController::class, 'store'])->name('admin.tambahevent.store');
    
    // Edit & Update Event
    Route::get('/admin/event/edit/{id}', [EventController::class, 'edit'])->name('admin.editevent');
    Route::put('/admin/event/update/{id}', [EventController::class, 'update'])->name('admin.updateevent');
    
    // Delete Event
    Route::delete('/admin/event/delete/{id}', [EventController::class, 'destroy'])->name('admin.hapusevent');
});

require __DIR__.'/auth.php';