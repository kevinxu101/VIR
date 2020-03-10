<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_sections', function (Blueprint $table) {
            $table->Increments('teacher_sectionID');
            $table->integer('teacherID')->unsigned();
            $table->foreign('teacherID')->references('teacher_sectionID')->on('teacher_sections');
            $table->integer('sectionID')->unsigned();
            $table->foreign('sectionID')->references('teacher_sectionID')->on('teacher_sections');
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
        Schema::dropIfExists('teacher_sections');
    }
}
