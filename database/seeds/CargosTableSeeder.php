<?php

use Illuminate\Database\Seeder;

use intranet\Modelos\Cargos;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('es_ES');

        Cargos::create([
            'nombre'            => 'Analista junior',
            'descripcion'       => $faker->paragraph,
            'departamento_id'   => 1,
            'control_usuario'   => 'seeder',
        ]);


        Cargos::create([
            'nombre'            => 'Analista soporte',
            'descripcion'       => $faker->paragraph,
            'departamento_id'   => 1,
            'control_usuario'   => 'seeder',
        ]);


    }
}
