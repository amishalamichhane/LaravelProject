<?php

namespace App\Http\Controllers;
use App\Models\WorkingPaper;

use Illuminate\Http\Request;

class WorkingPaperController extends Controller
{
    public function workingpaper()
    {
        $workingPapers = WorkingPaper::all();
        return view('product.workingpaper', compact('workingPapers'));
    }
}
