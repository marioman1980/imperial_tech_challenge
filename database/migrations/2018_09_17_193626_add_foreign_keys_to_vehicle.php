<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreign('model_id')->references('id')->on('vehicle_models');
        });  

        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreign('make_id')->references('id')->on('vehicle_makes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['model_id']);
        $table->dropForeign(['make_id']);
    }
}
