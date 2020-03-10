<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->Increments('gradeID');
            $table->timestamps();
            $table->double('quiz');
            $table->double('project');
            $table->double('assignment');
            $table->double('seatwork');
            $table->double('exam');
            $table->integer('studentID')->unsigned();
            $table->foreign('studentID')->references('gradeID')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
