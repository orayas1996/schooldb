<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnparentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownparent', function (Blueprint $table) {
            $table->string('parent_ssn');
			$table->string('student_id');
			$table->string('relation');
            $table->timestamps();

            $table->primary(['student_id','parent_ssn']);
            $table->foreign('parent_ssn')->references('ssn')->on('parents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ownparent');
    }
}
