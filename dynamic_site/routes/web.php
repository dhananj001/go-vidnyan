<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\GalleryImageController;
use App\Http\Controllers\Admin\GalleryVideoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Public pages — using shared layout via pages/ directory
Route::get('/', fn () => view('pages.index'))->name('home');
Route::get('/about', fn () => view('pages.about'))->name('about');
Route::get('/projects', fn () => view('pages.projects'))->name('projects');
Route::get('/lectures', fn () => view('pages.lectures'))->name('lectures');
Route::get('/research', fn () => view('pages.research'))->name('research');
Route::get('/nirmalya', fn () => view('pages.nirmalya'))->name('nirmalya');
Route::get('/awards', fn () => view('pages.awards'))->name('awards');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/query', fn () => view('pages.query'))->name('query');
Route::get('/team', fn () => view('pages.team'))->name('team');
Route::get('/contact', fn () => view('pages.contact'))->name('contact');

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
