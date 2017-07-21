<?php

use Illuminate\Database\Seeder;
use intranet\Modelos\INT_MOTIVO_CERTIFICADO;

class MotivoSolitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        INT_MOTIVO_CERTIFICADO::create([
            'nombre' => 'que estime conveniente',
            'control_usuario'   => 'seeder',
        ]);
    }
}
