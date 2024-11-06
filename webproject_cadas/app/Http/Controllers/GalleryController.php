<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showGallery()
    {
        $galleries = Gallery::with('images')->get(); // Eager load images
        return view('pages.gallery', compact('galleries'));
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255', // Validate title
            'image_url' => 'required|url', // Validate image_url
        ]);

        // Create a new gallery item using the validated data
        Gallery::create([
            'title' => $request->input('title'), // Get title from the request
            'image_url' => $request->input('image_url'), // Get image_url from the request
        ]);

        // Redirect back with a success message
        return redirect()->route('gallery.show')->with('success', 'Gallery created successfully.');
    }
}
