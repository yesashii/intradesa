<?php

use Illuminate\Database\Seeder;

use intranet\Modelos\INT_TIPO_CERTIFICADO;

class TipoSolitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        INT_TIPO_CERTIFICADO::create([
            'nombre' => 'Antigüedad',
            'control_usuario'   => 'seeder',
        ]);
    }
}
