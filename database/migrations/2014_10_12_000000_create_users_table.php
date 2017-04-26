<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('xv');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('url_imagen')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('anexo')->nullable();
            $table->boolean('activo')->defaut(1);
            $table->date('fecha_nacimiento');
            $table->rememberToken();
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')
                ->references('id')
                ->on('cargos')
                ->onDelete('cascade');

            $table->integer('sucursal_id')->unsigned();
            $table->foreign('sucursal_id')
                ->references('id')
                ->on('sucursales')
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
        Schema::dropIfExists('users');
    }
}
