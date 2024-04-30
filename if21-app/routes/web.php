<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return "Halaman about";
});

Route::get('profile', function(){
    return view('profile');
});