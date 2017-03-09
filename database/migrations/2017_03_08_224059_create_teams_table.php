<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('teams', function (Blueprint $table) {
                $table->increments('tm_id');
                $table->integer('s_id')->unsigned();
                $table->integer('tm_number');
                $table->string('tm_name');
                $table->string('tm_coach');
                $table->string('tm_coachemail');
                $table->string('tm_coachphone');
                $table->timestamps();
            });

            Schema::table('schools', function (Blueprint $table) {
                $table->foreign('s_id')->references('s_id')->on('schools')->onDelete('cascade');
            });
        }
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teams');
        //
    }
}
