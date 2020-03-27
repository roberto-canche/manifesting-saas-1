<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('customers',function (Blueprint $table){

            $table->increments('id');
            /*$table->string('name');
            $table->string('email');
            $table->float('weight');
            $table->string('ID_type');

            /**
             * Foreignkeys section
             */

            /*$table->integer('agent_id')->unsigned()->nullable();
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');

            $table->integer('instructor_id')->unsigned()->nullable();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');

            $table->integer('jump_type_id')->unsigned()->nullable();
            $table->foreign('jump_type_id')->references('id')->on('jump_types')->onDelete('cascade');

            $table->integer('transport_type_id')->unsigned()->nullable();
            $table->foreign('transport_type_id')->references('id')->on('transport_types')->onDelete('cascade');*/

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
        Schema::drop('customers');
    }
}
