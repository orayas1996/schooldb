<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_record', function (Blueprint $table) {
            $table->string('grade',1);
            $table->string('room',1);
            $table->string('year');
      			$table->string('student_id',5);
            $table->timestamps();

            $table->primary(['grade','room','year','student_id']);
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_record');
    }
}
