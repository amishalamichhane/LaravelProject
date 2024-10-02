<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudyController;

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/header1', function () {
    return view('header_footer.header1');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});


// Route to display all studies
Route::get('/data', [StudyController::class, 'data']);
Route::get('/datas/{slug}', [StudyController::class, 'datas'])->name('datas');
Route::get('/codebook/{slug}', [StudyController::class, 'codebook'])->name('codebooks');
Route::get('/questions/{slug}', [StudyController::class, 'question'])->name('questions');


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