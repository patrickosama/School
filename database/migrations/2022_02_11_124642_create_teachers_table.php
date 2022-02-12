<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
          $table->id();
          $table->ForeignId('school_id');
          $table->text('name');
          $table->integer('age');
          $table->string('subject');
          $table->timestamps();
        });


    Schema::create('student_teacher', function (Blueprint $table) {
      $table->integer('student_id');
      $table->integer('teacher_id');
      $table->primary(['student_id','teacher_id']);
      $table->ForeignId('school_id');
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
        Schema::dropIfExists('student_teacher');
    }
}
