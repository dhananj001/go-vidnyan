<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryImageController extends Controller
{
    public function index(Request $request)
    {
        $query = GalleryImage::with('category');

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $images = $query->orderBy('sort_order')->latest()->get();
        $categories = GalleryCategory::orderBy('sort_order')->get();

        return view('admin.images.index', compact('images', 'categories'));
    }

    public function create()
    {
        $categories = GalleryCategory::orderBy('sort_order')->get();
        return view('admin.images.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:gallery_categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
            'alt_text' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        GalleryImage::create([
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path' => $path,
            'alt_text' => $validated['alt_text'] ?? $validated['title'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.images.index')
            ->with('success', 'छायाचित्र यशस्वीरित्या अपलोड झाले!');
    }

    public function edit(GalleryImage $image)
    {
        $categories = GalleryCategory::orderBy('sort_order')->get();
        return view('admin.images.edit', compact('image', 'categories'));
    }

    public function update(Request $request, GalleryImage $image)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:gallery_categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
            'alt_text' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $data = [
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'alt_text' => $validated['alt_text'] ?? $validated['title'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('image')) {
            // Delete old image if it's in storage (not in public/images)
            if (!str_starts_with($image->image_path, 'images/')) {
                Storage::disk('public')->delete($image->image_path);
            }
            $data['image_path'] = $request->file('image')->store('gallery', 'public');
        }

        $image->update($data);

        return redirect()->route('admin.images.index')
            ->with('success', 'छायाचित्र यशस्वीरित्या अपडेट झाले!');
    }

    public function destroy(GalleryImage $image)
    {
        // Delete file from storage if it's not a legacy image
        if (!str_starts_with($image->image_path, 'images/')) {
            Storage::disk('public')->delete($image->image_path);
        }

        $image->delete();

        return redirect()->route('admin.images.index')
            ->with('success', 'छायाचित्र यशस्वीरित्या हटवले!');
    }

    /**
     * Reorder images via drag-and-drop (AJAX).
     */
    public function reorder(Request $request)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*' => 'integer|exists:gallery_images,id',
        ]);

        foreach ($request->order as $position => $id) {
            GalleryImage::where('id', $id)->update(['sort_order' => $position]);
        }

        return response()->json(['success' => true]);
    }

    /**
     * Toggle image active status (AJAX).
     */
    public function toggleActive(GalleryImage $image)
    {
        $image->update(['is_active' => !$image->is_active]);

        return back()->with('success', 'स्थिती बदलली!');
    }
}
