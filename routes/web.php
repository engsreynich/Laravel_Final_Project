<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/client', function () {
    return view('client');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    // handle form submission here
})->name('contact.submit');;