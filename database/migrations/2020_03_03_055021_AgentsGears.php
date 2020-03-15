<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgentsGears extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('agent_gear',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('agent_id')->unsigned()->index();
			$table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
			$table->integer('gear_id')->unsigned()->index();
			$table->foreign('gear_id')->references('id')->on('gears')->onDelete('cascade');
			/**
			 * Type your addition here
			 *
			 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('agent_gear');
    }
}
