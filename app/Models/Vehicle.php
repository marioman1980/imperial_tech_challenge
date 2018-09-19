<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function __construct() 
    {

    }

    /*****************************
	 *
     * Define relationships
     *
     *****************************/

    public function vehicle_make() 
    {
        return $this->belongsTo(VehicleMake::class, 'make_id', 'id');
    } 

    public function vehicle_model() 
    {
        return $this->belongsTo(VehicleModel::class, 'model_id', 'id');
    } 

    public function vehicle_features() 
    {
        return $this->hasMany(VehicleFeature::class, 'vehicle_id', 'id');
    }      

    /*****************************
     *
     * Other functions
     *
     *****************************/

    /**
     * Get make
     *
     * @return string
     */
    public function make()
    {
    	return $this->vehicle_make()->first()->make;
    }   

    /**
     * Get model
     *
     * @return string
     */
    public function model()
    {
        return $this->vehicle_model()->first()->model;
    }  

    /**
     * Get features for each vehicle
     *
     * @return array
     */
    public function get_features() 
    {
        $vehicle_features = [];

        foreach ($this->vehicle_features()->get() as $vehicle_feature)
        {
            array_push($vehicle_features, $vehicle_feature->feature()->first());
        }
        return $vehicle_features;
    }

    public function filter_by_feature($features) 
    {
        $feature_ids = [];

        foreach ($features as $feature)
        {
            array_push($feature_ids, $feature->id);
        }
    }

}
