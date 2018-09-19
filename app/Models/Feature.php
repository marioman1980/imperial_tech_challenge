<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function __construct() 
    {

    }
    
    /*****************************
	 *
     * Define relationships
     *
     *****************************/

    public function vehicle_features() 
    {
        return $this->hasMany(VehicleFeature::class, 'feature_id', 'id');
    } 
}
