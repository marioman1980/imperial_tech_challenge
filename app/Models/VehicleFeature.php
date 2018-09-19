<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleFeature extends Model
{
    public function __construct() 
    {

    }	

    /*****************************
	 *
     * Define relationships
     *
     *****************************/	

    public function vehicle() 
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }

    public function feature() 
    {
        return $this->belongsTo(Feature::class, 'feature_id', 'id');
    }    
}
