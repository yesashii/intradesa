<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(intranet\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'rut'               => strval( rand(11111111, 19999999) ),
        'xv'                => strval( rand(0, 9) ),
        'nombre'            => $faker->name,
        'apellido_paterno'  => $faker->lastName,
        'apellido_materno'  => $faker->lastName,
        'email'              => 'lherrera@desa.cl',
        'activo'             => 1,
        'url_imagen'         => 'img/usuario_prueba.png',
        'control_usuario'    => 'seeder',
        'password'          => $password ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),

    ];
});
