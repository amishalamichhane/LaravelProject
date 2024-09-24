<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff()
    {
        $staff = Staff::all();
        return view('pages.staff', compact('staff')); //view path
    }
}
