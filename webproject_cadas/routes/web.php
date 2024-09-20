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

Route::get('/events', function () {
    return view('pages.events');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/researcher', function () {
    return view('pages.researcher');
});

Route::get('/natalie', function () {
    return view('research_team.natalie');
});

Route::get('/dirgha', function () {
    return view('research_team.dirgha');
});

Route::get('/jennifer', function () {
    return view('research_team.jennifer');
});

Route::get('/scott', function () {
    return view('research_team.scott');
});

Route::get('/presentation', function () {
    return view('product.presentation');
});

Route::get('/policybrief', function () {
    return view('product.policybrief');
});
Route::get('/dissemination', function () {
    return view('product.dissemination');
});

Route::get('/working_paper', function () {
    return view('product.workingpaper');
});

Route::get('/git', function () {
    return view('capacity_building.git');
});

Route::get('/sdat', function () {
    return view('capacity_building.sdat');
});

Route::get('/sst', function () {
    return view('capacity_building.sst');
});

Route::get('/supervisor-training', function () {
    return view('capacity_building.st');
});


Route::get('/publications', [PublicationController::class, 'publications']);