<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;



Route::get('/', function () {
    return view('pages.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/data', function () {
    return view('pages.data');
});


Route::get('/researcher', function () {
    return view('pages.researcher');
});
Route::get('/member', function () {
    return view('pages.boardmember');
});
Route::get('/staff', function () {
    return view('pages.staff');
});

Route::get('/natalie', function () {
    return view('research_team.natalie');
});


Route::get('/publications', [PublicationController::class, 'publications']);