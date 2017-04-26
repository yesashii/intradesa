<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('sub_titulo');
            $table->string('texto');
            $table->string('imagen');
            $table->string('fecha')->nullable();
            $table->string('url')->nullable();
            $table->integer('user_id')->unsigned();

            $table->date('created_at');
            $table->date('updated_at');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
        DB::statement("alter table noticias drop constraint noticias_user_id_foreign;");
        Schema::dropIfExists('noticias');
    }
}
