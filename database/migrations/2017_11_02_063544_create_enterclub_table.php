<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterclubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterclub', function (Blueprint $table) {
           $table->string('student_id');
		   $table->string('club');
		   $table->string('score');
            $table->timestamps();

            $table->primary(['student_id','club']);
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
        Schema::dropIfExists('enterclub');
    }
}
