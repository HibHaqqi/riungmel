<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemOnLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_on_load', function (Blueprint $table) {
            $table->string('load',25);
            $table->string('problem',4);
            $table->foreign('load')->references('kode')->on('load_on_shift')->onDelete('cascade');
            $table->foreign('problem')->references('kode')->on('problem')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problem_on_load');
    }
}
