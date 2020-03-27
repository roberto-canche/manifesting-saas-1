<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGearSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gear_sets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->integer('service_status');
            $table->unsignedInteger('gear_id');

            $table->foreign('gear_id')->references('id')->on('gears')->onDelete('cascade');

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
        Schema::dropIfExists('gear_sets');
    }
}
