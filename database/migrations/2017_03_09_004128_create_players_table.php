<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('players', function (Blueprint $table) {
                $table->increments('p_id');
                $table->integer('p_number');
                $table->string('p_lname');
                $table->string('p_fname');
                $table->string('p_street');
                $table->string('p_city');
                $table->string('p_state');
                $table->integer('p_zip');
                $table->string('p_email');
                $table->string('p_phone');
                $table->string('p_estatus'); //player eligibility status
                $table->integer('t_id')->unsigned();
                $table->integer('s_id')->unsigned();
                $table->timestamps();
            });

            Schema::table('players', function (Blueprint $table) {
                $table->foreign('t_id')->references('t_id')->on('teams')->onDelete('cascade');
            });

            Schema::table('players', function (Blueprint $table) {
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
        Schema::drop('players');
        //
    }
}
