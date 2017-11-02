<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
          $table->string('student_id');
		  $table->string('term');
		  $table->string('subject');
		  $table->integer('totalscore');
		  $table->integer('behave_score');
            $table->timestamps();

            $table->primary(['student_id','term']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score');
    }
}
