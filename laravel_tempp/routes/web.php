<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\GalleryImageController;
use App\Http\Controllers\Admin\GalleryVideoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Public pages
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

// Auth routes (login only — no public registration)
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Categories
    Route::resource('categories', GalleryCategoryController::class)->except(['show']);

    // Images
    Route::resource('images', GalleryImageController::class)->except(['show']);
    Route::patch('images/{image}/toggle', [GalleryImageController::class, 'toggleActive'])->name('images.toggle');
    Route::post('images/reorder', [GalleryImageController::class, 'reorder'])->name('images.reorder');

    // Videos
    Route::resource('videos', GalleryVideoController::class)->except(['show']);
});
