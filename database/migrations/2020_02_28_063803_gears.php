<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Gears.
 *
 * @author  The scaffold-interface created at 2020-02-28 06:38:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gears extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('gears',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        /**
         * Foreignkeys section
         */
        
        
        
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
        Schema::drop('gears');
    }
}
