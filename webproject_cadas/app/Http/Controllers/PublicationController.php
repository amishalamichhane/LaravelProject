<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    // Display a listing of the publications
    public function publications()
    {
        // Fetch publications from the database with pagination
        $publications = Publication::orderBy('year', 'desc')->paginate(10);

        // Fetch publications including the URL column
        $publications = Publication::orderBy('created_at', 'desc')->paginate(10);


        // Return the publications view with the paginated data
        return view('pages.publications', compact('publications'));
    }
}
