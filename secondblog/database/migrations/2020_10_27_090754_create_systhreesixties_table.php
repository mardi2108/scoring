<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysthreesixtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systhreesixties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('score_id');
            $table->integer('h_one')->nullable();
            $table->integer('h_two')->nullable();
            $table->integer('h_three')->nullable();
            $table->integer('h_four')->nullable();
            $table->integer('h_five')->nullable();
            $table->integer('h_six')->nullable();
            $table->integer('h_seven')->nullable();
            $table->integer('h_eight')->nullable();
            $table->integer('h_nine')->nullable();
            $table->integer('h_out')->nullable();
            $table->integer('h_ten')->nullable();
            $table->integer('h_elev')->nullable();
            $table->integer('h_twelv')->nullable();
            $table->integer('h_thrth')->nullable();
            $table->integer('h_fourth')->nullable();
            $table->integer('h_fivth')->nullable();
            $table->integer('h_sixth')->nullable();
            $table->integer('h_sevth')->nullable();
            $table->integer('h_eigth')->nullable();
            $table->integer('h_in')->nullable();
            $table->integer('total')->nullable();
            $table->integer('gross')->nullable();
            $table->integer('nett')->nullable();
            $table->timestamps();
            $table->foreign('score_id')->references('id')->on('scores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systhreesixties');
    }
}
