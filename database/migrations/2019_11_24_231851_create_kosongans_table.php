<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosongan', function (Blueprint $table) {
            $table->string('load',25);
            $table->string('shift',16);
            $table->bigInteger('dt')->unsigned();
            $table->bigInteger('exa')->unsigned()->nullable();
            $table->integer('distance');
            $table->time('start');
            $table->time('stop')->nullable();
            $table->boolean('onload');
            $table->foreign('dt')->references('id_dt')->on('unit_dt')->onDelete('cascade');
            $table->foreign('load')->references('kode')->on('load_on_shift')->onDelete('cascade');
            $table->foreign('exa')->references('id_ex')->on('unit_ex')->onDelete('cascade');
            $table->foreign('shift')->references('kode')->on('shift')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kosongan');
    }
}
