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
    	// $vehicle = Vehicle::where('id', 1)->first();
    	// var_dump($vehicle->vehicle_model()->get()[0]);

    	// $make = VehicleMake::where('id', 1)->first();
    	// var_dump($make->vehicle_models()->get()[0]);

    	$model = VehicleModel::where('id', 1)->first();
    	var_dump($model->vehicles()->get()[1]);

    	// echo $this->test;
    }
}
