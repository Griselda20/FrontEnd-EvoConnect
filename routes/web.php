<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User Routes
Route::get('/login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserLoginController::class, 'login']);
Route::get('/register', [UserRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserRegisterController::class, 'register']);
Route::post('/logout', [UserLoginController::class, 'logout'])->name('logout');


// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::get('/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/register', [AdminRegisterController::class, 'register']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/uploadnewjob', [AdminController::class, 'uploadNewJob'])->name('admin.uploadnewjob');
    Route::get('/archivejob', [AdminController::class, 'archiveJob'])->name('admin.archivejob');
});


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/apply', [ApplyController::class, 'index'])->name('apply');
    Route::get('/listjob', [JobController::class, 'index'])->name('listjob');
    Route::get('/listcompany', [CompanyController::class, 'index'])->name('listcompany');
});

Route::get('/', function () {
    return view('welcome');
});
