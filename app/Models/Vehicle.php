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

    /*****************************/

    // Get make
    public function make()
    {
    	return $this->vehicle_make()->first()->make;
    }   

    // Get model
    public function model()
    {
        return $this->vehicle_model()->first()->model;
    }  

}
