<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->Increments('teacherID');
            $table->timestamps();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->integer('subjectID')->unsigned();
            $table->foreign('subjectID')->references('teacherID')->on('teachers');
            $table->integer('sectionID')->unsigned();
            $table->foreign('sectionID')->references('teacherID')->on('teachers');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('teacherID')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
