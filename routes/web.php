<?php

use App\Http\Controllers\Auth\AuthSessionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

// Authentification Routes
Route::get('/login', [AuthSessionController::class, 'auth'])->name('login');
Route::post('/login', [AuthSessionController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth', 'verified', )->prefix('admin')->group( function() {
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
});
