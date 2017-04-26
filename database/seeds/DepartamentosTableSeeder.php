<?php

use Illuminate\Database\Seeder;

use intranet\Modelos\Departamentos;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Departamentos::create([
            'nombre'            => 'informática',
            'descripcion'       => '',
            'control_usuario'   => 'seeder',
        ]);
    }
}
