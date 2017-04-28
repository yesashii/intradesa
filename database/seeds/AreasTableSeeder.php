<?php

use Illuminate\Database\Seeder;
use intranet\Modelos\INT_AREAS;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        INT_AREAS::create([
            'nombre'            => 'gerencia',
            'control_usuario'   => 'seeder',
        ]);
    }
}
