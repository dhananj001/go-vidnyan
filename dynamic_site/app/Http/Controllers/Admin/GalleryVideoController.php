<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryVideo;
use Illuminate\Http\Request;

class GalleryVideoController extends Controller
{
    public function index()
    {
        $videos = GalleryVideo::orderBy('sort_order')->latest()->paginate(12);
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'youtube_url' => 'required|string|max:500',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        GalleryVideo::create($validated);

        return redirect()->route('admin.videos.index')
            ->with('success', 'व्हिडिओ यशस्वीरित्या जोडला!');
    }

    public function edit(GalleryVideo $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, GalleryVideo $video)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'youtube_url' => 'required|string|max:500',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $video->update($validated);

        return redirect()->route('admin.videos.index')
            ->with('success', 'व्हिडिओ यशस्वीरित्या अपडेट झाला!');
    }

    public function destroy(GalleryVideo $video)
    {
        $video->delete();

        return redirect()->route('admin.videos.index')
            ->with('success', 'व्हिडिओ यशस्वीरित्या हटवला!');
    }
}
