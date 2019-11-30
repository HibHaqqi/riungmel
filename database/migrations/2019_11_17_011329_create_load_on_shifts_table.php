<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadOnShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('load_on_shift', function (Blueprint $table) {
            $table->string('kode',25)->primary();
            $table->string('shift',16);
            $table->bigInteger('dt')->unsigned();
            $table->bigInteger('material')->unsigned();
            $table->integer('distance');
            $table->bigInteger('exa')->unsigned();
            $table->time('on_load');
            $table->time('unload')->nullable();
            $table->boolean('dumped');
            $table->foreign('shift')->references('kode')->on('shift')->onDelete('cascade');
            $table->foreign('dt')->references('id_dt')->on('unit_dt')->onDelete('cascade');
            $table->foreign('exa')->references('id_ex')->on('unit_ex')->onDelete('cascade');
            $table->foreign('material')->references('no')->on('material')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('load_on_shift');
    }
}
