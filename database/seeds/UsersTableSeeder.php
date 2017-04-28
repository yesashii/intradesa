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
            'email'                 => 'lherrera@desa.cl',
            'url_imagen'            => 'img/usuario_prueba.png',
            'control_usuario'       => 'seeder',
            'password'              =>  bcrypt('secret'),
            'remember_token'        => str_random(10),
        ]);



    }
}
