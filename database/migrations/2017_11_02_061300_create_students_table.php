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
            $table->string('id',5);
			      $table->string('ssn')->uniqe();
      			$table->string('name');
      			$table->string('sex',1);
      			$table->integer('age');
      			$table->string('address');
            $table->integer('behave_score'); //มีทำไม??
      			$table->string('room');
      			$table->string('grade');  /**ชั้น*/
            $table->timestamps();

            $table->primary('id');
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
