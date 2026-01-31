<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/lectures', function () {
    return view('lectures');
});
Route::get('/nirmalya', function () {
    return view('nirmalya');
});
Route::get('/query', function () {
    return view('query');
});
Route::get('/research', function () {
    return view('research');
});
Route::get('/gallery', function () {
    return view('gallery');
});