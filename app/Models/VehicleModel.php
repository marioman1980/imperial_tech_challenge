<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
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
    
    public function vehicles() 
    {
        return $this->hasMany(Vehicle::class, 'model_id', 'id');
    } 
}
