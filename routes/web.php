<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/dev', function () {
    return view('dev');
});
Route::get('/kkp-plus', function () {
    return view('kkp-plus');
});
Route::get('/kelas', function () {
    return view('armada.kelas');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
