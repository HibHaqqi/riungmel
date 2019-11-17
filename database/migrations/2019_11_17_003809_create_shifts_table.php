<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift', function (Blueprint $table) {
            $table->string('kode',16)->primary();
            $table->bigInteger('driver')->unsigned();
            $table->bigInteger('dt')->unsigned();
            $table->date('hm_date');
            $table->time('start_time');
            $table->decimal('hm_start',17,7)->nullable();
            $table->decimal('hm_stop',17,7)->nullable();
            $table->time('stop_time')->nullable();
            $table->foreign('driver')->references('no')->on('driver')->onDelete('cascade');
            $table->foreign('dt')->references('id_dt')->on('unit_dt')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shift');
    }
}
