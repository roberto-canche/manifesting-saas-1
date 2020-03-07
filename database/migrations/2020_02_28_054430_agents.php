<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Agents.
 *
 * @author  The scaffold-interface created at 2020-02-28 05:44:30pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Agents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('agents',function (Blueprint $table){

        $table->increments('id');
        $table->String('name');
        $table->String('email');

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
        Schema::drop('agents');
    }
}
