<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',255);
            $table->string('cpf_cnpj',45)->unique();
            $table->string('endereco',255)->nullable();
            $table->string('complemento',255)->nullable();
            $table->decimal('numero',10,0)->nullable();
            $table->decimal('cep',10,0)->nullable();
            $table->integer('bairro_id')->nullable();
            $table->foreign('bairro_id')->references('id')->on('bairro');
            $table->integer('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipio');
            $table->text('observacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoa', function (Blueprint $table) {
            //
        });
    }
}
