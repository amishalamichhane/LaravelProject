<?php

namespace App\Http\Controllers;

use App\Models\CapacityBuilding;
use Illuminate\Http\Request;


class CapacityBuildingController extends Controller
{
    // Main capacity building page method
    public function CapacityBuilding()
    {
        // Fetch all records
        $capacity_building = CapacityBuilding::all();
        return view('pages.capacity_building', compact('capacity_building'));
    }




    // Show individual section based on slug
    public function show($slug)
    {
        $capacity_building = CapacityBuilding::where('slug', $slug)->first(); // use first() instead of firstOrFail()

        if (!$capacity_building) {
            // You can log or return a custom error message
            return redirect()->route('capacity_building')->with('error', 'Section not found.');
        }

        return view('capacity_building.show', compact('capacity_building'));
    }
}
