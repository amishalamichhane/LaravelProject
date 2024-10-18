<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
{
    $events = Event::all();
    return view('pages.events', compact('events'));
}
}
