<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PerjalananController;

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
Route::get('/perjalanan', [PerjalananController::class, 'index']);
Route::get('/perjalanan/{id}', [PerjalananController::class, 'show']);
