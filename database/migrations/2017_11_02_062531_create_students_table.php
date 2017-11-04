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
            $table->string('student_id');
			$table->string('ssn');
			$table->string('name');
			$table->string('sex');
			$table->integer('age');
			$table->string('address');
			$table->string('room');
			$table->string('grade');  /**ชั้น*/
            $table->timestamps();

            $table->primary('student_id');
            
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
