<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('investigators');
});

Route::get('/', function () {
    return view('links');
});

Route::get('/', function () {
    return view('publications');
});