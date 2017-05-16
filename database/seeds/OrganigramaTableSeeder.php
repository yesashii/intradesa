<?php

use Illuminate\Database\Seeder;
use intranet\Modelos\INT_ORGANIGRAMA;

class OrganigramaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //usuario 1
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rodrigo Oyanedel',
            'rut'               => '1-9',
            'cargo'             => 'Presidente ejecutivo',
            'padre'             => null,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;
        //
        //usuario 2
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rafael Velasco',
            'rut'               => '1-9',
            'cargo'             => 'Gerente General',
            'padre'             => 1,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;

        //usuario 3
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rodrigo Guzmán Z',
            'rut'               => '1-9',
            'cargo'             => 'Gerente  Comercial',
            'padre'             => 2,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;


        //usuario 3
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Patricio Vázquez',
            'rut'               => '1-9',
            'cargo'             => 'Gerente Licores',
            'padre'             => 2,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;

        //usuario 3
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Diego Yurjevic',
            'rut'               => '1-9',
            'cargo'             => 'Subgerente Vinos',
            'padre'             => 2,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;

        //usuario 3
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Francisco Yáñez',
            'rut'               => '1-9',
            'cargo'             => 'Gerente Licores',
            'padre'             => 2,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;

        //usuario 3
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Roger Muñoz',
            'rut'               => '1-9',
            'cargo'             => 'Área de Cervezas',
            'padre'             => 2,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;

        //usuario 3
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Victor Díaz N.',
            'rut'               => '1-9',
            'cargo'             => 'SubGerente Adm. y Finanzas',
            'padre'             => 2,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;

        //usuario 3
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Alejandro Retamal',
            'rut'               => '1-9',
            'cargo'             => 'SubGerente Operaciones',
            'padre'             => 2,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;

        //usuario 3
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Daniella Galli',
            'rut'               => '1-9',
            'cargo'             => 'Jefe de RRHH',
            'padre'             => 2,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //return;

        /**
         *
         * TERCER NIVEL ( Gerente  Comercial )
         *
         */

        //Personal KAM
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Personal KAM',
            'rut'               => '1-9',
            'cargo'             => 'KAM',
            'padre'             => 3,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Fernando Echeverría',
            'rut'               => '1-9',
            'cargo'             => 'KAM Supermercados',
            'padre'             => 11,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Pedro Basualto',
            'rut'               => '1-9',
            'cargo'             => 'KAM Supermercados',
            'padre'             => 11,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Angelica Arancibia',
            'rut'               => '1-9',
            'cargo'             => 'KAM  CTAS . CLAVES VINOS',
            'padre'             => 11,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Patricio Cruz',
            'rut'               => '1-9',
            'cargo'             => 'KAM Mayorista',
            'padre'             => 11,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // Jefe Ventas On Premise
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Juan Pablo Orellana',
            'rut'               => '1-9',
            'cargo'             => 'Jefe Ventas On Premise',
            'padre'             => 3,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Danny Matus',
            'rut'               => '1-9',
            'cargo'             => 'Ejecutivo  Ventas Call Center',
            'padre'             => 16,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcela Muñoz',
            'rut'               => '1-9',
            'cargo'             => 'Ejecutivo  Ventas Call Center',
            'padre'             => 16,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Karla Herrera',
            'rut'               => '1-9',
            'cargo'             => 'Ejecutivo  Ventas Call Center',
            'padre'             => 16,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Daphne Rivas',
            'rut'               => '1-9',
            'cargo'             => 'Ejecutivo  Ventas Call Center',
            'padre'             => 16,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Jacqueline Cardemil',
            'rut'               => '1-9',
            'cargo'             => 'Ventas Particulares e Instituciones',
            'padre'             => 16,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        // Gerente Trade Marketing On (22)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Franco Tamburini',
            'rut'               => '1-9',
            'cargo'             => 'Gerente Trade Marketing On',
            'padre'             => 3,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Matías Zakrzewicz',
            'rut'               => '1-9',
            'cargo'             => 'Jefe On Trade Stgo',
            'padre'             => 22,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Guillermo San Martín',
            'rut'               => '1-9',
            'cargo'             => 'Trade Mktg',
            'padre'             => 22,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Soledad Barros',
            'rut'               => '1-9',
            'cargo'             => 'Trade Mktg',
            'padre'             => 22,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Matias Jahn  F.',
            'rut'               => '1-9',
            'cargo'             => 'Trade Mktg',
            'padre'             => 22,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Sebastian Valenzuela',
            'rut'               => '1-9',
            'cargo'             => 'On Trade CCH',
            'padre'             => 22,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Viña del Mar',
            'rut'               => '1-9',
            'cargo'             => 'On Trade CCH',
            'padre'             => 22,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Mauricio Almuna',
            'rut'               => '1-9',
            'cargo'             => 'Jefe Ventas Supermercado',
            'padre'             => 3,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Camilo Suarez',
            'rut'               => '1-9',
            'cargo'             => 'Jefe Off Trade',
            'padre'             => 29,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Oscar Verdugo',
            'rut'               => '1-9',
            'cargo'             => 'Representante de Ventas de Supermercado',
            'padre'             => 29,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Pedro Sagal',
            'rut'               => '1-9',
            'cargo'             => 'Representante de Ventas de Supermercado',
            'padre'             => 29,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Cristian Ortiz',
            'rut'               => '1-9',
            'cargo'             => 'Representante de Ventas de Supermercado',
            'padre'             => 29,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Cristian Ortiz',
            'rut'               => '1-9',
            'cargo'             => 'Representante de Ventas de Supermercado',
            'padre'             => 29,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Pedro Farías ',
            'rut'               => '1-9',
            'cargo'             => 'Representante de Ventas de Supermercado',
            'padre'             => 29,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //Sales Planner (36)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marco Sandoval',
            'rut'               => '1-9',
            'cargo'             => 'Sales Planner',
            'padre'             => 3,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Clara Plat',
            'rut'               => '1-9',
            'cargo'             => 'Asistente Comercial',
            'padre'             => 36,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Cristóbal Yevenes',
            'rut'               => '1-9',
            'cargo'             => 'Asistente Comercial',
            'padre'             => 36,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Cynthia Vargas',
            'rut'               => '1-9',
            'cargo'             => 'Asistente Comercial',
            'padre'             => 36,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //Jefe de Ventas (40)

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Raúl Ormazabal',
            'rut'               => '1-9',
            'cargo'             => 'Jefe de Ventas',
            'padre'             => 3,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


        INT_ORGANIGRAMA::create([
            'nombre'            => 'Vendedores Santiago',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 40,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Pedro Morales',
            'rut'               => '1-9',
            'cargo'             => 'KAM ON PREMISE',
            'padre'             => 40,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Pablo Sánchez',
            'rut'               => '1-9',
            'cargo'             => 'KAM VI Región',
            'padre'             => 40,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcelo Martínez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor Los Andes',
            'padre'             => 40,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        // vendedores santiago (41)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Carlos Clark',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Yasna Arias',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Horacio Sepúlveda',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Branda Jaramillo',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcelo Rubio',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Aldo López',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Carolina Aravena',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Andrea Lira',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Luis Mondaca',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Mauricio Guajardo',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Santiago',
            'padre'             => 41,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // Trade Marketing Zona Norte
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Pedro Gutierrez D.',
            'rut'               => '1-9',
            'cargo'             => 'Trade Marketing Zona Norte',
            'padre'             => 3,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        // Jefes de sucursal (55)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Jefes de sucursal',
            'rut'               => '1-9',
            'cargo'             => 'Jefes de sucursal',
            'padre'             => 3,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Juan Carlos Concha',
            'rut'               => '1-9',
            'cargo'             => 'Arica - Iquique',
            'padre'             => 56,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Walter Varas',
            'rut'               => '1-9',
            'cargo'             => 'Antofagasta',
            'padre'             => 56,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'David Lavanderos',
            'rut'               => '1-9',
            'cargo'             => 'Copiapó / La Serena',
            'padre'             => 56,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //Jefe Sucursal Arica - Iquique Juan Carlos Concha (57)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Patricia Garces',
            'rut'               => '1-9',
            'cargo'             => 'Administrativa Sucursal Iquique',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Arica / Iquique',
            'rut'               => '1-9',
            'cargo'             => 'Encargado Bodegas',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Administrativos',
            'rut'               => '1-9',
            'cargo'             => 'Administrativos',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Bodegueros',
            'rut'               => '1-9',
            'cargo'             => 'Ayudantes Bodega',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        // Vendedores Arica(64)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Vendedores Arica',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Arica',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Daniel Ayala',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Arica',
            'padre'             => 64,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Patricio Saavedra',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Arica',
            'padre'             => 64,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Eduardo Olivares',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor Iquique',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Jonathan Silva',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor On Premise',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // Vendedores (69)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Vendedores',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Luis Calderon',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 69,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Andrés Carroza',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 69,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Francisco Olivares',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 69,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
    //Vendedores Modulo(73)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Vendedores Modulo',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Modulo',
            'padre'             => 57,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcelo Alvarado',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Modulo',
            'padre'             => 73,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Claudia Núñez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Modulo',
            'padre'             => 73,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Victor Benavides',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Modulo',
            'padre'             => 73,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Omar Córdova',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Modulo',
            'padre'             => 73,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Luis Donoso',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Modulo',
            'padre'             => 73,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Johanna Zambrano',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores Modulo',
            'padre'             => 73,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

    }
}
