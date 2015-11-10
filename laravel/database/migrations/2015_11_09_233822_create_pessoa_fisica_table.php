<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaFisicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoa_fisica', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_nascimento')->nullable();
            $table->date('data_casamento')->nullable();
            $table->integer('dependente')->unique()->nullable();
            $table->foreign('dependente')->references('id')->on('pessoa');
            $table->integer('pessoa_id')->unique();
            $table->foreign('pessoa_id')->references('id')->on('pessoa');
            $table->integer('estado_civil_id')->nullable();
            $table->foreign('estado_civil_id')->references('id')->on('estado_civil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoa_fisica', function (Blueprint $table) {
            //
        });
    }
}
