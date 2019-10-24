<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('student_department');
            $table->string('student_semester');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('student_roll');
            $table->string('student_reg');
            $table->text('student_address');
            $table->string('gender');
            $table->string('religion');
            $table->string('admission_date');
            $table->string('student_image');
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
        Schema::dropIfExists('students');
    }
}
