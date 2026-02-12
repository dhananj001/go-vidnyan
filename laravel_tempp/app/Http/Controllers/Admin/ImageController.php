<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the images.
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new image.
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created image in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'nullable|string',
        ]);

        $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $imageName);

        Image::create([
            'title' => $request->title,
            'image' => $imageName, // store filename only
        ]);

        return redirect()->route('images.index')->with('success', 'Image added successfully!');
    }

    /**
     * Show the form for editing the specified image.
     */
    public function edit(Image $image)
    {
        return view('admin.images.edit', compact('image'));
    }

    /**
     * Update the specified image in storage.
     */
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'nullable|string',
        ]);

        // If new image uploaded, move it and update
        if ($request->hasFile('image')) {
            // Delete old image file if exists
            $oldImagePath = public_path('images/' . $image->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $image->image = $imageName;
        }

        $image->title = $request->title;
        $image->save();

        return redirect()->route('images.index')->with('success', 'Image updated successfully!');
    }

    /**
     * Remove the specified image from storage.
     */
    public function destroy(Image $image)
    {
        // Delete the image file from public/images
        $imagePath = public_path('images/' . $image->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete database record
        $image->delete();

        return redirect()->route('images.index')->with('success', 'Image deleted successfully!');
    }
}