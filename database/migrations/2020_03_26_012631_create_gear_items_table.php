<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGearItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gear_items', function (Blueprint $table) {
            $table->increments('id');

            $table->String('name');
            $table->integer('SN');
            $table->String('whereabouts');
            $table->longText('description');
            $table->longText('notes');
            $table->date('manufactured_at');
            $table->boolean('inherit_cycles');
            $table->boolean('serviced_by_cycle'); 
            $table->boolean('serviced_due_cycle');
            $table->integer('due_cycles');
            $table->date('life_expiry');
            $table->date('due_date');

            $table->integer('status');

            $table->unsignedInteger('item_id')->nullable();
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        
            $table->unsignedBigInteger('gearset_id');

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
        Schema::dropIfExists('gear_items');
    }
}
