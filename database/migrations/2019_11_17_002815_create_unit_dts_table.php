<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitDtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_dt', function (Blueprint $table) {
            $table->bigIncrements('id_dt');
            $table->string('no_unit',10);
            $table->string('cn',15);
            $table->string('tipe',18);
            $table->integer('cap_vessel');
            $table->integer('ready');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_dt');
    }
}
