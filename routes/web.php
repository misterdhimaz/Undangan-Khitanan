<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

Route::get('/', [InvitationController::class, 'index'])->name('invitation.index');
Route::post('/rsvp', [InvitationController::class, 'storeRsvp'])->name('invitation.rsvp');
Route::post('/wish', [InvitationController::class, 'storeWish'])->name('invitation.wish');

use App\Http\Controllers\AdminController;

// Group Route Admin
Route::prefix('admin')->group(function () {
    // Halaman Login
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.auth');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Halaman Dashboard (Diproteksi Middleware sederhana)
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::post('/guest', [AdminController::class, 'storeGuest'])->name('admin.guest.store');
        Route::delete('/guest/{id}', [AdminController::class, 'destroyGuest'])->name('admin.guest.destroy');
    });
});
