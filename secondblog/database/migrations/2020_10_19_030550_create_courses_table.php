<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('p_one');
            $table->integer('p_two');
            $table->integer('p_three');
            $table->integer('p_four');
            $table->integer('p_five');
            $table->integer('p_six');
            $table->integer('p_seven');
            $table->integer('p_eight');
            $table->integer('p_nine');
            $table->integer('p_ten');
            $table->integer('p_elv');
            $table->integer('p_twl');
            $table->integer('p_thrth');
            $table->integer('p_fourth');
            $table->integer('p_fivth');
            $table->integer('p_sixth');
            $table->integer('p_sevth');
            $table->integer('p_eigth');
            $table->integer('p_out');
            $table->integer('p_in');
            $table->integer('p_tot');
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
        Schema::dropIfExists('courses');
    }
}
