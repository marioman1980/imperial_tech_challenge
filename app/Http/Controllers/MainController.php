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
    	$model = VehicleModel::where('id', 1)->first();
    	var_dump($model);
    	// echo $this->test;
    }
}
