<?php

namespace App\Http\Controllers;
use App\Models\Study; // Import the Study model
use Illuminate\Http\Request;

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
    public function codebook()
    {
        $studies = Study::all();
        return view('data.codebook', compact('studies'));
    }
}
