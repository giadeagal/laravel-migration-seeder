<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('departs_from', 30);
            $table->tinyInteger('flight_included')->unsigned();
            $table->tinyInteger('duration')->unsigned();
            $table->tinyInteger('max_participants')->unsigned();
            $table->tinyInteger('available_places')->unsigned();
            $table->text('description');
            $table->string('tour_operator', 40);
            $table->string('tour_leader', 30);
            $table->float('price_person', 8,2);
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
        Schema::dropIfExists('travels');
    }
}
