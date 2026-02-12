<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/lectures', function () {
    return view('lectures');
});
Route::get('/lectures', function () {
    return view('lectures');
});
Route::get('/research', function () {
    return view('research');
});
Route::get('/nirmalya', function () {
    return view('nirmalya');
});
Route::get('/awards', function () {
    return view('awards');
});

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/query', function () {
    return view('query');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/contact', function () {
    return view('contact');
});
use App\Http\Controllers\Admin\ImageController;

// Admin routes for gallery CRUD
Route::prefix('admin')->group(function () {
    Route::resource('images', ImageController::class);
});