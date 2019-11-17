<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoggedInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logged_in', function (Blueprint $table) {
            $table->bigInteger('driver')->unsigned();
            $table->string('mac_addr',20)->nullable();
            $table->boolean('verified');
            $table->foreign('driver')->references('no')->on('driver')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logged_in');
    }
}
