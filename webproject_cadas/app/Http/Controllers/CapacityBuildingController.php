<?php

namespace App\Http\Controllers;
use App\Models\CapacityBuilding;
use Illuminate\Http\Request;


class CapacityBuildingController extends Controller
{
    public function CapacityBuilding()
{
    $capacity_building = CapacityBuilding::all();
    return view('pages.capacity_building', compact('capacity_building'));
}
}
