<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIntCertificados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INT_CERTIFICADOS', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fecha_solicitud');
            $table->string('fecha_caducacion')->nullable();

            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('INT_ESTADO_CERTIFICADO');

            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('INT_TIPO_CERTIFICADO');

            $table->integer('motivo_id')->unsigned();
            $table->foreign('motivo_id')->references('id')->on('INT_MOTIVO_CERTIFICADO');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('INT_USUARIOS');

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
        //
        Schema::dropIfExists('INT_CERTIFICADOS');
    }
}
