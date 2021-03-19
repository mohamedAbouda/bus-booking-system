<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_route', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('trip_id');
            $table->foreign('trip_id')->references('id')->on('trips')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('station_id');
            $table->foreign('station_id')->references('id')->on('stations')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('index');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_route');
    }
}
