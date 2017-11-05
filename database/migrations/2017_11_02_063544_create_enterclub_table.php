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
           $table->string('student_id',5);
    		   $table->string('club',5);
    		   $table->string('score');
           $table->timestamps();

           $table->primary(['student_id','club']);
           $table->foreign('club')->references('id')->on('clubs');
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
        Schema::dropIfExists('enterclub');
    }
}
