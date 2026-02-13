<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $categories = GalleryCategory::active()->get();

        $images = GalleryImage::with('category')
            ->active()
            ->orderBy('sort_order')
            ->latest()
            ->get();

        $videos = GalleryVideo::active()->get();

        return view('gallery', compact('categories', 'images', 'videos'));
    }
}
