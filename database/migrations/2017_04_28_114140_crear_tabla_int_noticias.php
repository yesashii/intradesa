<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIntNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INT_NOTICIAS', function (Blueprint $table) {
            $table->increments('id_noticia');
            $table->string('titulo');
            $table->string('sub_titulo');
            $table->longText('texto');
            $table->string('imagen');
            $table->string('fecha');
            $table->string('url')->nullable();
            $table->char('activa');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')
                ->references('id')
                ->on('INT_USUARIOS')
                ->onDelete('cascade');

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
        Schema::dropIfExists('INT_NOTICIAS');
    }
}
