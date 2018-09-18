<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleMake;
use App\Models\VehicleModel;

class MainController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    	$vehicles = Vehicle::all();
        return $this->show_vehicles($vehicles);
    }

    public function filter_by_make(Request $request)
    {
        $vehicles = Vehicle::where('make_id', $request->select_make)->get();
        return $this->show_vehicles($vehicles);
    }

    public function show_vehicles($vehicles)
    {
        $vehicles = $vehicles;
        $makes = VehicleMake::all();
        
        return view('main', [
            'vehicles'  => $vehicles,
            'makes'     => $makes
        ]);        
    }
}


