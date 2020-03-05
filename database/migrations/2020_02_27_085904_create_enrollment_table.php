<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollmenttable', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps('');
            $table->string('status');
            $table->string('gradelevel');
            $table->string('lrn');
            $table->string('whatlrn');
            $table->string('checklist');
            $table->string('aware');
            $table->string('semester');
            $table->string('strand');
            $table->string('lname');
            $table->string('gname');
            $table->string('mname');
            $table->string('ename')->nullable();
            $table->string('sex');
             $table->date('birth');
            $table->string('password')->nullable();
            $table->string('age');
            $table->string('indigenoucommunity');
            $table->string('ifyes')->nullable();
            $table->string('address');
            $table->string('baranggay');
            $table->string('city');
            $table->string('zipcode');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('telephonenumber');
            $table->string('cellphonenumber');
            $table->string('studentcellphonenumber');
            $table->string('emailaddress');
            $table->string('gradelevelcompleted');
            $table->string('lastschoolyearcompleted');
            $table->string('schoolname');
            $table->string('schooladdress');
            $table->string('schoolid');
            $table->string('ihereby');
            $table->date('dateofcompleting');
     //       $table->timestamp('email_verified_at')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollment');
    }
}
