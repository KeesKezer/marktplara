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
            $table->integer('user_id')->unsigned();
            $table->integer('advertentie_id')->unsigned();
            $table->timestamp('biedtijd', 0)->nullable();
        });

        Schema::table('biedingen', function (Blueprint $table) {
            $table->foreign('advertentie_id')->references('id')->on('advertenties');
            $table->foreign('user_id')->references('id')->on('users');
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
