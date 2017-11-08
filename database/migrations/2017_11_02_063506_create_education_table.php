<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
           $table->string('grade',1);
    		   $table->string('room',1);
    		   $table->string('subject',5);
           $table->integer('day',1);
           $table->integer('period',1);
    		   $table->string('place');
           $table->timestamps();

           $table->primary(['grade','room','subject','day','period']);
           $table->foreign('subject')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
