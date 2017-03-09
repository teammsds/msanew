<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('fouls', function (Blueprint $table) {
                $table->integer('y_card');
                $table->integer('r_card');
                $table->integer('p_id')->unsigned();
                $table->timestamps();
            });

            Schema::table('fouls', function (Blueprint $table) {
                $table->foreign('p_id')->references('p_id')->on('players')->onDelete('cascade');
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
        Schema::drop('fouls');
        //
    }
}
