<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudyController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});


// Route::get('/data', function () {
//     return view('pages.data');
// });
Route::get('/question', function () {
    return view('data.questions');
});
// Route::get('/codebooks', function () {
//     return view('data.codebook');
// });

Route::get('/data', [StudyController::class, 'data']);

Route::get('/codebooks', [StudyController::class, 'codebook'])->name('codebooks');
Route::get('/datas', [StudyController::class, 'data'])->name('datas');


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

Route::get('/capacity_building', function () {
    return view('pages.capacity_building');
});

// Define the route for displaying staff members
Route::get('staff', [StaffController::class, 'staff'])->name('staff');

// Define the route for storing a new staff member
Route::post('staff', [StaffController::class, 'store'])->name('staff.store');

Route::get('/publications', [PublicationController::class, 'publications']);