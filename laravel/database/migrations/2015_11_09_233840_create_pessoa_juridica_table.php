<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaJuridicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoa_juridica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_fantasia')->unique();
            $table->integer('pessoa_id')->unique();
            $table->foreign('pessoa_id')->references('id')->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoa_juridica', function (Blueprint $table) {
            //
        });
    }
}
