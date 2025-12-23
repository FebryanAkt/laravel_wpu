<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['nama' => 'Febryan']);
});

Route::get('/about', function () {
    return view('about');
});
