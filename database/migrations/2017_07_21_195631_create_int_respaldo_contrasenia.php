<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntRespaldoContrasenia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INT_RESPALDO_CONTRASENIA', function (Blueprint $table) {
            $table->increments('id');

            $table->string('usuario');
            $table->string('contrasenia_inicial');
            $table->string('contrasenia')->nullable();


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
        Schema::dropIfExists('INT_RESPALDO_CONTRASENIA');
    }
}
