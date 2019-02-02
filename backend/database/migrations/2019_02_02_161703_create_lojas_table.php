<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente')->unsigned()->nullable();
            $table->integer('idProduto')->unsigned()->nullable();
            $table->string('dataDaCompra');
            $table->string('horaDaCompra');
            $table->string('quantidadeProdutosComprados');
            $table->timestamps();

        });

        
        //Definição da Chave estrangeira para Cliente//
        Schema::table('lojas', function (Blueprint $table) {
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('set null');
        });
        
        //Definição da Chave estrangeira para Produtos//
        Schema::table('lojas', function (Blueprint $table) {
            $table->foreign('idProduto')->references('id')->on('produtos')->onDelete('set null');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lojas');
    }
}
