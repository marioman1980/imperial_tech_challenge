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
    	$makes = VehicleMake::all();

    	return view('main', [
    		'vehicles'	=> $vehicles,
    		'makes' 	=> $makes
    	]);
    }

    public function makes(Request $request)
    {
    	echo $request->select_make;
    }
}
