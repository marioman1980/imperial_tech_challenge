<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleMake extends Model
{
    public function __construct() 
    {

    }

    /*****************************
	 *
     * Define relationships
     *
     *****************************/

    public function vehicle_models() 
    {
        return $this->hasMany(VehicleModel::class, 'make_id', 'id');
    } 

    public function vehicles() 
    {
        return $this->hasMany(Vehicle::class, 'make_id', 'id');
    }  
}
