<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_images' => GalleryImage::count(),
            'active_images' => GalleryImage::where('is_active', true)->count(),
            'categories' => GalleryCategory::count(),
            'videos' => GalleryVideo::count(),
        ];

        $recentImages = GalleryImage::with('category')
            ->latest()
            ->take(6)
            ->get();

        return view('admin.dashboard', compact('stats', 'recentImages'));
    }
}
