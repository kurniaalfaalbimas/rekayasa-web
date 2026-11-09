<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LaporanController;

// Halaman Utama
Route::get('/', function () {
    return view('page.home');
})->name('home');

// Halaman Profile
Route::get('/profile', function () {
    return view('page.profile');
})->name('profile');

// Halaman About
Route::get('/about', function () {
    return view('page.about');
})->name('about');

// CRUD Project
Route::resource('projects', ProjectController::class);

// Halaman Admin (hanya untuk user yang sudah login)
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

Route::get('/laporan/pdf', [LaporanController::class, 'cetak'])
    ->name('laporan.pdf');