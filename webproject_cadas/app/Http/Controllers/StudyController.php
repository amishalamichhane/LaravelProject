<?php

namespace App\Http\Controllers;

use App\Models\Study; // Import the Study model
use Illuminate\Http\Request;
use App\Models\Post; 

class StudyController extends Controller
{

    // Define the data method
    public function data()
    {
        // Fetch all the studies from the database
        $studies = Study::all();

        // Pass the studies data to the view
        return view('pages.data', compact('studies'));
    }

    // Method to display the codebook page
    public function codebook($slug) // Accept slug as a parameter
    {
        
        $study = Study::where('slug', $slug)->firstOrFail(); // Fetch by slug
        return view('data.codebook', compact('study'));
        
    }

    // Method to display the datas page
    public function datas($slug) // Accept slug as a parameter
    {
        $study = Study::where('slug', $slug)->firstOrFail(); // Fetch by slug
        return view('data.datas', compact('study'));
    }

    // Method to display the question page
    public function question($slug) // Accept slug as a parameter
    {
        $study = Study::where('slug', $slug)->firstOrFail(); // Fetch by slug
        return view('data.questions', compact('study'));
    }
}
