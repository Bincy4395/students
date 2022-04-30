<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_marks', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('term');
            $table->integer('maths_marks');
            $table->integer('science_marks');
            $table->integer('history_marks');
            $table->integer('total_marks');
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
        Schema::dropIfExists('students_marks');
    }
};
