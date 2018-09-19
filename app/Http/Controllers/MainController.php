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
    /**
     * Show all vehicles
     *
     * @return object
     */
    public function index()
    {
    	$vehicles = Vehicle::all()->sortBy('id');
        return $this->show_vehicles($vehicles);
    }

    /**
     * Show filtered vehicles
     *
     * @return object
     */
    public function filter(Request $request)
    {
        if ($request->select_make == 'all')
        {
            $vehicles = Vehicle::all()->sortBy($request->sort_by);
        } 
        else
        {
            $vehicles = Vehicle::where('make_id', $request->select_make)->get()->sortBy($request->sort_by);
        }
        return $this->show_vehicles($vehicles);
    }

    /**
     * Get view
     *
     * @return object
     */
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


