<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreakdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breakdown', function (Blueprint $table) {
            $table->bigInteger('dt')->unsigned();
            $table->time('start');
            $table->time('stop')->nullable();
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
        Schema::dropIfExists('breakdown');
    }
}
