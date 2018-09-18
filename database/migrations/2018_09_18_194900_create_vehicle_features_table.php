<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_features', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vehicle_id');
            $table->unsignedInteger('feature_id');
            $table->timestamps();
        });

        Schema::table('vehicle_features', function (Blueprint $table) {
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('feature_id')->references('id')->on('features');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_features');
        $table->dropForeign(['vehicles_id']);
        $table->dropForeign(['features_id']);        
    }
}
