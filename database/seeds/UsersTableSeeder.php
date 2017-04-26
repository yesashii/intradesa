<?php

use Illuminate\Database\Seeder;
use intranet\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        //usuario 1
        User::create([
            'rut'                   => strval( rand(11111111, 19999999) ),
            'xv'                    => strval( rand(0, 9) ),
            'nombre'                => $faker->name,
            'apellido_paterno'      => $faker->lastName,
            'apellido_materno'      => $faker->lastName,
            'email'                 => 'lherrera@desa.cl',
            'activo'                => 1,
            'url_imagen'            => 'img/usuario_prueba.png',
            'fecha_nacimiento'      => '2017-04-24',
            'cargo_id'              => 1,
            'sucursal_id'           => 1,
            'control_usuario'       => 'seeder',
            'password'              =>  bcrypt('secret'),
            'remember_token'        => str_random(10),
        ]);

        //usuario 2
        User::create([
            'rut'                   => strval( rand(11111111, 19999999) ),
            'xv'                    => strval( rand(0, 9) ),
            'nombre'                => $faker->name,
            'apellido_paterno'      => $faker->lastName,
            'apellido_materno'      => $faker->lastName,
            'email'                 => $faker->email,
            'activo'                => 1,
            'url_imagen'            => 'img/usuario_prueba.png',
            'fecha_nacimiento'      => '2017-04-24',
            'cargo_id'              => 1,
            'sucursal_id'           => 1,
            'control_usuario'       => 'seeder',
            'password'              =>  bcrypt('secret'),
            'remember_token'        => str_random(10),
        ]);

        //usuario 3
        User::create([
            'rut'                   => strval( rand(11111111, 19999999) ),
            'xv'                    => strval( rand(0, 9) ),
            'nombre'                => $faker->name,
            'apellido_paterno'      => $faker->lastName,
            'apellido_materno'      => $faker->lastName,
            'email'                 => $faker->email,
            'activo'                => 1,
            'url_imagen'            => 'img/usuario_prueba.png',
            'fecha_nacimiento'      => '2017-04-24',
            'cargo_id'              => 1,
            'sucursal_id'           => 1,
            'control_usuario'       => 'seeder',
            'password'              =>  bcrypt('secret'),
            'remember_token'        => str_random(10),
        ]);

        //usuario 4
        User::create([
            'rut'                   => strval( rand(11111111, 19999999) ),
            'xv'                    => strval( rand(0, 9) ),
            'nombre'                => $faker->name,
            'apellido_paterno'      => $faker->lastName,
            'apellido_materno'      => $faker->lastName,
            'email'                 => $faker->email,
            'activo'                => 1,
            'url_imagen'            => 'img/usuario_prueba.png',
            'fecha_nacimiento'      => '2017-04-24',
            'cargo_id'              => 1,
            'sucursal_id'           => 1,
            'control_usuario'       => 'seeder',
            'password'              =>  bcrypt('secret'),
            'remember_token'        => str_random(10),
        ]);

    }
}
