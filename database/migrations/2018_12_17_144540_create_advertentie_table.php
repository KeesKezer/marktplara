<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertentieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertentie', function (Blueprint $table) {
            $table->increments('id');
            $table->char('titel','100');
            $table->longtext('omschrijving');
            $table->unsignedDecimal('ini_prijs',8,2);
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('advertentie', function (Blueprint $table) {
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
        Schema::dropIfExists('advertentie');
    }
}
