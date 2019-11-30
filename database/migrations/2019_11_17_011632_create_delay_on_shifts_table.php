<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelayOnShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delay_on_shift', function (Blueprint $table) {
            $table->string('shift',16);
            $table->bigInteger('dt')->unsigned();
            $table->string('jeda',3);
            $table->time('start');
            $table->time('stop')->nullable();
            $table->text('ket')->nullable();
            $table->foreign('dt')->references('id_dt')->on('unit_dt')->onDelete('cascade');
            $table->foreign('shift')->references('kode')->on('shift')->onDelete('cascade');
            $table->foreign('jeda')->references('kode_jeda')->on('jeda')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delay_on_shift');
    }
}
