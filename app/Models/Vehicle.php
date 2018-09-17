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

    public function make() 
    {
        return $this->belongsTo(Make::class);
    } 

    public function model() 
    {
        return $this->belongsTo(Model::class);
    }  

    /*****************************/

    public static function get($id)
    {
    	$vehicle = Vehicle::where('id', $id)->first();
    	return $vehicle;
    }   
}
