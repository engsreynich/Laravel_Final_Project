<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/client', function () {
    return view('pages.client');
})->name('client');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', function () {
    return redirect()->route('contact')->with('success', 'Message sent successfully!');
})->name('contact.submit');

// Tutor routes
Route::get('/tutors', [TutorController::class, 'index'])->name('tutors.index');
Route::get('/tutors/{tutor}', [TutorController::class, 'show'])->name('tutors.show');
Route::get('/tutors/subject/{subject}', [TutorController::class, 'bySubject'])->name('tutors.by_subject');

// API routes for AJAX requests
Route::prefix('api')->group(function () {
    Route::get('/tutors/search', [TutorController::class, 'search'])->name('api.tutors.search');
    Route::get('/tutors/filter-options', [TutorController::class, 'getFilterOptions'])->name('api.tutors.filter_options');
    Route::get('/tutors/featured', [TutorController::class, 'featured'])->name('api.tutors.featured');
});