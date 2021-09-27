<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisings', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->comment('user_id=student_id');
            $table->integer('class_id');
            $table->integer('year_id'); 
            $table->integer('subject_id')->nullable();         
            $table->integer('department_id')->nullable();
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
        Schema::dropIfExists('advisings');
    }
}