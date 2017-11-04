<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officials', function (Blueprint $table) {
            $table->string('ssn');
			$table->string('name');
			$table->string('sex');
			$table->string('address');
			$table->string('teacherroom');
      $table->string('club');
            $table->timestamps();

            $table->primary('ssn');
            $table->foreign('club')->references('club_id')->on('clubs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('officials');
    }
}
