<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/about', function () {
    return 'Ini adalah halaman About';
});

Route::get('/contact', function () {
    return 'Ini adalah halaman Contact';
});

Route::get('/user/{nama}', function ($nama) {
    return 'Halo, ' . $nama;
});

Route::get('/mahasiswa/{nim}', function ($nim) {
    return 'NIM Mahasiswa: ' . $nim;
});