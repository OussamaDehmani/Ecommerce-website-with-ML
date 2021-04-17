<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarPieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_piece', function (Blueprint $table) {
           
            $table->integer('car_id')->unsigned();
            $table->integer('piece_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('piece_id')->references('id')->on('pieces')->onDelete('cascade');
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
        Schema::dropIfExists('car_piece');
    }
}
