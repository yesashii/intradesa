<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CrearTablaOrganigrama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INT_ORGANIGRAMA', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('rut');
            $table->string('cargo');
            $table->integer('posicion');
            $table->integer('padre')->unsigned()->nullable();
            $table->foreign('padre')->references('id')->on('INT_ORGANIGRAMA');

            $table->string('control_usuario');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('INT_ORGANIGRAMA');
    }
}
