<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->string('lote');
            $table->date('caducidad');
            $table->integer('idInsumo')->unsigned();
            $table->foreign('idInsumo')->references('id')->on('insumo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada');
    }
}
