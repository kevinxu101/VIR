<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->Increments('studentID');
            $table->timestamps();
            $table->string('fname');
            $table->string('lname');
            $table->string('year_level');
            $table->integer('sectionID')->unsigned();
            $table->foreign('sectionID')->references('studentID')->on('students');
            $table->integer('subjectID')->unsigned();
            $table->foreign('subjectID')->references('studentID')->on('students');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
