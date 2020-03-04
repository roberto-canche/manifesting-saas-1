<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Gear_items.
 *
 * @author  The scaffold-interface created at 2020-02-28 07:15:44pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class GearItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('gear_items',function (Blueprint $table){

        $table->increments('id');

        $table->String('name');
        $table->integer('SN');
        $table->String('whereabouts');
        $table->longText('Description');
        $table->longText('notes');
        $table->date('manufactured_at');
        $table->boolean('inherit_cycles');
        $table->boolean('serviced_by_cycle'); 
        $table->integer('due_cycles');
        $table->date('due_date');

        /**
         * Foreignkeys section
         */

        $table->integer('item_id')->unsigned()->nullable();
        $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        
        $table->integer('gear_set_id')->unsigned()->nullable();
        $table->foreign('gear_set_id')->references('id')->on('gear_sets')->onDelete('cascade');

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
        Schema::drop('gear_items');
    }
}
