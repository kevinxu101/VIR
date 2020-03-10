<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_subjects', function (Blueprint $table) {
            $table->Increments('teacher_subjectID');
            $table->integer('teacherID')->unsigned();
            $table->integer('subjectID')->unsigned();
            $table->foreign('teacherID')->references('teacher_subjectID')->on('teacher_subjects');
            $table->foreign('subjectID')->references('teacher_subjectID')->on('teacher_subjects');
            $table->timestamps();
            //$table->integer('studentID')->unsigned();
            //$table->foreign('studentID')->references('teacher_subjectID')->on('teacher_subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_subjects');
    }
}
