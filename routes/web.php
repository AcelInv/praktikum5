<?php

use Illuminate\Support\Facades\Route;

// 3 route mengembalikan string biasa
Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/hari', function () {
    return 'Hari ini adalah hari Rabu';
});

Route::get('/contact', function () {
    return 'contact yang bisa dihubungi: 08123456789';
});

Route::get('/user/{nama}', function ($nama) {
    return 'Halo, ' . $nama;
});

Route::get('/mahasiswa/{nim}', function ($nim) {
    return 'NIM Mahasiswa: ' . $nim;
});