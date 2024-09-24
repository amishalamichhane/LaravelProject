<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Staff; // Include the Staff model
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // Method to display staff members
    public function staff()
    {
        $staff = Staff::all(); // Fetch all staff members
        return view('pages.staff', compact('staff')); // Pass the staff data to the view
    }

    // Method to store a new staff member
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Store the uploaded image
        $path = $request->file('image')->store('staff_images', 'public');

        // Create a new staff member
        Staff::create([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $path,
        ]);

        // Redirect back to the staff view with a success message
        return redirect()->route('staff')->with('success', 'Staff member created successfully.');
    }
}