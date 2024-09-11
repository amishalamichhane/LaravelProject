<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    // Display a listing of the publications
    public function publications()
    {
        // // Fetch all publications from the database
        // $publications = Publication::orderBy('published_date', 'desc')->get();

        // // Return the view with publications data
        // return view('pages.publications', compact('publications'));


        // Fetch all publications from the database
        $publications = Publication::all();

        // Return the publications view with the data
        return view('pages.publications', compact('publications'));
    }
}
