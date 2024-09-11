<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

Route::get('/', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/publications', [PublicationController::class, 'publications']);