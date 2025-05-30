<?php
use App\Http\Controllers\ClassController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/services', [ClassController::class, 'index'])->name('services');
Route::get('/classes/{type}', [ClassController::class, 'listTeachers'])->name('classes.teachers');

Route::middleware(['auth:web', 'role:student'])->group(function () {
    Route::post('/book/{teacherId}', [BookingController::class, 'book'])->name('book');
    Route::delete('/cancel/{bookingId}', [BookingController::class, 'cancel'])->name('cancel');
    Route::get('/my-bookings', [BookingController::class, 'myBookings'])->name('my.bookings');
});

Route::middleware(['auth:teacher', 'role:teacher'])->group(function () {
    Route::get('/teacher/courses', [TeacherController::class, 'index'])->name('teacher.courses');
    Route::post('/teacher/courses/update', [TeacherController::class, 'update'])->name('teacher.update');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/client', function () {
    return view('pages.client');
})->name('client');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

Auth::routes();