<?php

use Illuminate\Database\Seeder;
use intranet\User;

use intranet\Modelos\INT_TRABAJADORES;
use intranet\Modelos\INT_RESPALDO_CONTRASENIA;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');
        // se traen todos los trabajadores de la vista "INT_TRABAJADORES"
        $trabajadores = INT_TRABAJADORES::where('CORREOELEC','<>','')
            ->where('CORREOELEC','<>','PGARCES@DESA.CL')->get();

        foreach ( $trabajadores as $trabajador )
        {
            //usuario 1
            $numero = rand ( 111111 , 999999 );

            User::create([
                'email'             => $trabajador->CORREOELEC,
                'url_imagen'        => 'img/usuarios/'.$trabajador->FICHA.'.jpg',
                'password'          =>  bcrypt($numero),
                'remember_token'    => str_random(10),
                'area_id'           => 1,
                'control_usuario'   => 'seeder',
            ]);

            //return;
            INT_RESPALDO_CONTRASENIA::create([
                'usuario'               => $trabajador->CORREOELEC,
                'contrasenia_inicial'   => $numero,
            ]);
        }
    }
}
