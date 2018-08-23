<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableTurns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('turns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->string('hora');
            $table->enum('state',['0','1','2','3','4'])->default('0');
            /*
            0: falta confirmar
            1: reservado
            2: cancelado
            3: concluido
            4: anulado

            */

            //clave foranea
            $table->integer('court_id')->unsigned();
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}