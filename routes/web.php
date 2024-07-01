<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EvoteksController;
use App\Http\Controllers\LayananController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan');
Route::get('/layanan/tenaga-ahli', [LayananController::class, 'tenagaAhli'])->name('tenaga-ahli');
Route::get('/layanan/web-apps', [LayananController::class, 'webApps'])->name('web-apps');
Route::get('/layanan/hr-development', [LayananController::class, 'hrDevelopment'])->name('hr-development');

