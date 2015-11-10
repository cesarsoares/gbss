<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBairroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bairro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipio');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bairro', function (Blueprint $table) {
            //
        });
    }
}
