<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiedingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biedingen', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedDecimal('huidig_bod',10,2);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('advertentie_id')->references('id')->on('advertentie');
            $table->timestamps('biedtijd'); // mag dit?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biedingen');
    }
}
