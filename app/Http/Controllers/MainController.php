<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use App\Models\VehicleFeature;
use App\Models\Feature;

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
        // var_dump($vehicles[0]->get_features());
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
        $filtered_feature_ids = array_map('intval', $request->feature);
        var_dump($filtered_feature_ids);

        // $feature_ids = [];
        $filtered_vehicles = [];

        foreach ($vehicles as $vehicle)
        {
            $feature_ids = [];
            foreach ($vehicle->get_features() as $feature)
            {
                array_push($feature_ids, $feature->id);
            }
            if ($filtered_feature_ids == $feature_ids)
            {
                array_push($filtered_vehicles, $vehicle);
            }
        }

        // foreach ($vehicles[4]->get_features() as $feature)
        // {
        //     array_push($feature_ids, $feature->id);
        // }

        // var_dump($feature_ids);

        



        // var_dump(Vehicle::where(VehicleFeature::whereIn('id',[1,2,3])->get()[0]->id));
        // var_dump(VehicleFeature::whereIn('id',[1,2,3])->get()[0]);

        return $this->show_vehicles($filtered_vehicles);

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


