<?php

namespace App\Http\Controllers;

use App\Models\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Image::all(); // fetch all images from admin panel
        return view('gallery', compact('images')); // pass to gallery view
    }
}