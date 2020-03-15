<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Instructors.
 *
 * @author  The scaffold-interface created at 2020-02-28 05:45:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Instructors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('instructors',function (Blueprint $table){
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
        Schema::drop('instructors');
    }
}
