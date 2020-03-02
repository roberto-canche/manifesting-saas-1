<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Gear_sets.
 *
 * @author  The scaffold-interface created at 2020-02-28 07:05:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class GearSets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('gear_sets',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->integer('service_status');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('gear_id')->unsigned()->nullable();
        $table->foreign('gear_id')->references('id')->on('gears')->onDelete('cascade');
        
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('gear_sets');
    }
}
