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
        //área no asignada
        INT_AREAS::create([
            'nombre'            => 'área no asignada',
            'control_usuario'   => 'seeder',
        ]);

        //gerencia
        INT_AREAS::create([
            'nombre'            => 'gerencia',
            'control_usuario'   => 'seeder',
        ]);

        //trade marketing
        INT_AREAS::create([
            'nombre'            => 'trade marketing',
            'control_usuario'   => 'seeder',
        ]);

        //vinos
        INT_AREAS::create([
            'nombre'            => 'vinos',
            'control_usuario'   => 'seeder',
        ]);


        //licores
        INT_AREAS::create([
            'nombre'            => 'licores',
            'control_usuario'   => 'seeder',
        ]);

        //cervezas
        INT_AREAS::create([
            'nombre'            => 'cervezas',
            'control_usuario'   => 'seeder',
        ]);

        //administración
        INT_AREAS::create([
            'nombre'            => 'administración',
            'control_usuario'   => 'seeder',
        ]);

        //comex
        INT_AREAS::create([
            'nombre'            => 'comex',
            'control_usuario'   => 'seeder',
        ]);

        //crédito y cobranza
        INT_AREAS::create([
            'nombre'            => 'crédito y cobranza',
            'control_usuario'   => 'seeder',
        ]);

        //diseño
        INT_AREAS::create([
            'nombre'            => 'diseño',
            'control_usuario'   => 'seeder',
        ]);

        //computación
        INT_AREAS::create([
            'nombre'            => 'computación',
            'control_usuario'   => 'seeder',
        ]);

        //mkt on premise
        INT_AREAS::create([
            'nombre'            => 'mkt on premise',
            'control_usuario'   => 'seeder',
        ]);

        //flor de caña
        INT_AREAS::create([
            'nombre'            => 'flor de caña',
            'control_usuario'   => 'seeder',
        ]);

        //recursos humanos
        INT_AREAS::create([
            'nombre'            => 'recursos humanos',
            'control_usuario'   => 'seeder',
        ]);

        //operaciones / cd
        INT_AREAS::create([
            'nombre'            => 'operaciones / cd',
            'control_usuario'   => 'seeder',
        ]);

        //inventarios
        INT_AREAS::create([
            'nombre'            => 'inventarios',
            'control_usuario'   => 'seeder',
        ]);

        //coord. nac. sucursales
        INT_AREAS::create([
            'nombre'            => 'coord. nac. sucursales',
            'control_usuario'   => 'seeder',
        ]);

        //bodega marketing
        INT_AREAS::create([
            'nombre'            => 'bodega marketing',
            'control_usuario'   => 'seeder',
        ]);
        //call center
        INT_AREAS::create([
            'nombre'            => 'call center',
            'control_usuario'   => 'seeder',
        ]);

        //comercial
        INT_AREAS::create([
            'nombre'            => 'comercial',
            'control_usuario'   => 'seeder',
        ]);
        //kam retail / vtas
        INT_AREAS::create([
            'nombre'            => 'kam retail / vtas',
            'control_usuario'   => 'seeder',
        ]);
        //servicios
        INT_AREAS::create([
            'nombre'            => 'servicios',
            'control_usuario'   => 'seeder',
        ]);

        //salas de reunión
        INT_AREAS::create([
            'nombre'            => 'servicios',
            'control_usuario'   => 'seeder',
        ]);

    }
}
