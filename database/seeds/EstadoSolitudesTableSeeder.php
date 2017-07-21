<?php

use Illuminate\Database\Seeder;
use intranet\Modelos\INT_ESTADO_CERTIFICADO;

class EstadoSolitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        INT_ESTADO_CERTIFICADO::create([
            'nombre'            => 'en proceso',
            'control_usuario'   => 'seeder'
        ]);

        INT_ESTADO_CERTIFICADO::create([
            'nombre'            => 'aceptado',
            'control_usuario'   => 'seeder'
        ]);

        INT_ESTADO_CERTIFICADO::create([
            'nombre'            => 'rechazado',
            'control_usuario'   => 'seeder'
        ]);

    }
}
