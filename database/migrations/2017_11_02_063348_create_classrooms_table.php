<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->string('grade',1);
      			$table->string('room',1);
      			$table->string('year');
      			$table->string('class_teacher',13);
            $table->timestamps();

            $table->primary(['grade','room','year']);
            $table->foreign('class_teacher')->references('ssn')->on('officials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
