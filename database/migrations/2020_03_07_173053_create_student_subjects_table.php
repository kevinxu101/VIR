<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subjects', function (Blueprint $table) {
            $table->Increments('student_subjectID');
            $table->integer('studentID')->unsigned();
            $table->foreign('studentID')->references('student_subjectID')->on('student_subjects');
            $table->integer('subjectID')->unsigned();
            $table->foreign('subjectID')->references('student_subjectID')->on('student_subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_subjects');
    }
}
