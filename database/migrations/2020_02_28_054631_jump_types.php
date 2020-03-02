<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Jump_types.
 *
 * @author  The scaffold-interface created at 2020-02-28 05:46:31pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class JumpTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('jump_types',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        $table->Integer('price');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
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
        Schema::drop('jump_types');
    }
}
