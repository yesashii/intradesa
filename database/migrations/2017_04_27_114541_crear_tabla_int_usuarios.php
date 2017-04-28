<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIntUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INT_USUARIOS', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('url_imagen')->nullable();
            $table->string('password', 60);
            $table->rememberToken();
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')
                ->references('id_area')
                ->on('INT_AREAS')
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
        Schema::dropIfExists('INT_USUARIOS');
    }
}
