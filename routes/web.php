<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\RMController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/dev', function () {
    return view('dev');
});
Route::get('/kkp-plus', function () {
    return view('kkp-plus');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/perusahaan', function () {
    return view('perusahaan');
});

Route::get('/kontak-sosmed', function () {
    return view('kontak');
});

Route::get('/agen', [AgenController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/rumah-makan', [RMController::class, 'index']);
Route::get('/perjalanan', [PerjalananController::class, 'index']);
Route::get('/perjalanan/{id}', [PerjalananController::class, 'show']);

//!Auth
Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/register', 'auth.register')->name('register');
    
    Route::post('/login', [AuthController::class, 'loginPost']);
    Route::post('/register', [AuthController::class, 'registerPost']);
});

//Auth
Route::middleware([Authenticate::class])->group(function () {
    Route::get('/dashboard',[AuthController::class,'dashboard']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Route::get('/kkp-plus/dashboard', function () {
    //     return view('user.dashboard');
    // })->name('user.dashboard');
});

//Khsus Admin TBA
// Route::middleware([Authenticate::class, RoleMiddleware::class . ':admin'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });