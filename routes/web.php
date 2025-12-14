<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

Route::get('/', [InvitationController::class, 'index'])->name('invitation.index');
Route::post('/rsvp', [InvitationController::class, 'storeRsvp'])->name('invitation.rsvp');
Route::post('/wish', [InvitationController::class, 'storeWish'])->name('invitation.wish');
