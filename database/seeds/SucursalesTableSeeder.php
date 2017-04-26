<?php

use Illuminate\Database\Seeder;
use intranet\Modelos\Sucursales;

class SucursalesTableSeeder extends Seeder
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

        //sucursal 1
        Sucursales::create([
            'nombre'            => 'Santiago',
            'descripcion'       => $faker->paragraph,
            'fono'              => $faker->phoneNumber,
            'direccion'         => $faker->address,
            'control_usuario'   => 'seeder',

        ]);

        //sucursal 2
        Sucursales::create([
            'nombre'            => 'Iquique',
            'descripcion'       => $faker->paragraph,
            'fono'              => $faker->phoneNumber,
            'direccion'         => $faker->address,
            'control_usuario'   => 'seeder',

        ]);

    }
}
