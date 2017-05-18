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

        // Jefe Sucursal Antofagasta Walter Varas (58)

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Cristian Balcázar',
            'rut'               => '1-9',
            'cargo'             => 'Jefe Administrativo',
            'padre'             => 58,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcos Cores',
            'rut'               => '1-9',
            'cargo'             => 'Encargado Bodega',
            'padre'             => 58,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Administrativas Sucursal',
            'rut'               => '1-9',
            'cargo'             => 'Administrativas Sucursal',
            'padre'             => 58,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // Administrativas de sucursal: 82
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Luisa Tabilo',
            'rut'               => '1-9',
            'cargo'             => 'Administrativa',
            'padre'             => 82,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Yanitza Barraza',
            'rut'               => '1-9',
            'cargo'             => 'Administrativa',
            'padre'             => 82,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        // --
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Bodegueros',
            'rut'               => '1-9',
            'cargo'             => 'Ayudantes Bodega',
            'padre'             => 58,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // vendedores (86)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Vendedores',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores',
            'padre'             => 58,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Carlos Zare',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Carlos Álvarez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Luis Guzmán',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Elba Melendez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Miguel Tapia',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Juan Muñoz',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Mariana Pizarro',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Carlos Echeverria',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Jonathan Gutierrez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 86,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //Jefe Sucursal Copiapó / La Serena David Lavanderos (59)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rodrigo Gallardo',
            'rut'               => '1-9',
            'cargo'             => 'Administrativo La Serena',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Patricia Alaniz',
            'rut'               => '1-9',
            'cargo'             => 'Administrativo La Copiapó',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Patricia Alaniz',
            'rut'               => '1-9',
            'cargo'             => 'Administrativo La Copiapó',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Héctor Dubo',
            'rut'               => '1-9',
            'cargo'             => 'Supervisor de Ventas Copiapó',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Sergio Ríos',
            'rut'               => '1-9',
            'cargo'             => 'Asist. Adm/Bodega',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // Bodegueros (101)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Operadores',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Francisco Silva',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros/Operadores',
            'padre'             => 101,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Johan Rivera',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros/Operadores',
            'padre'             => 101,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Eduardo Aguilar',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros/Operadores',
            'padre'             => 101,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Michel Domínguez',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros/Operadores',
            'padre'             => 101,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Gabriel Barahona',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros/Operadores',
            'padre'             => 101,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        //
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcelo Garrido',
            'rut'               => '1-9',
            'cargo'             => 'Asist. Adm/Bodega',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


        INT_ORGANIGRAMA::create([
            'nombre'            => 'Eduardo Varas',
            'rut'               => '1-9',
            'cargo'             => 'Asist. Adm/Bodega',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
    // Vendedores la serena (109)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'La Serena',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Ricardo Salinas',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 109,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'José Miguel Muñoz',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 109,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'José Retamal',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 109,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


        // Vendedores Copiapò (110)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Copiapò',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores',
            'padre'             => 59,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Luis Muñoz I.',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 110,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Luis González G',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 110,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Luis González J.',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 110,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // jefes de sucursal(56)

        // 117
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Carlos Valdebenito',
            'rut'               => '1-9',
            'cargo'             => 'Viña del Mar',
            'padre'             => 56,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


        //118
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Juan Pablo O.',
            'rut'               => '1-9',
            'cargo'             => 'Curicó',
            'padre'             => 56,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //119
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Claudio Díaz',
            'rut'               => '1-9',
            'cargo'             => 'Concepción',
            'padre'             => 56,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcela Lazcano',
            'rut'               => '1-9',
            'cargo'             => 'Administrativa',
            'padre'             => 117,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcela Lazcano',
            'rut'               => '1-9',
            'cargo'             => 'Aux. Administrativo',
            'padre'             => 117,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Jorge Soto Casas',
            'rut'               => '1-9',
            'cargo'             => 'Encargado Bodega',
            'padre'             => 117,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Bodegueros',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros',
            'padre'             => 117,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // bodegueros 123
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Flavio Zamorano',
            'rut'               => '1-9',
            'cargo'             => 'Bodeguero',
            'padre'             => 123,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcos Araneda',
            'rut'               => '1-9',
            'cargo'             => 'Bodeguero',
            'padre'             => 123,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // vendedores viña (126)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Vendedores',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores',
            'padre'             => 117,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rafael Olivares',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 126,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rodrigo Lopez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 126,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Mario Lazcano',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 126,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Sebastian Sandoval',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 126,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Christian Adam',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 126,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Daniel Muñoz',
            'rut'               => '1-9',
            'cargo'             => 'Supervisor Gestores',
            'padre'             => 117,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //Jefe Ventas Curicó Juan Pablo Orellana (118)

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Patricia Rojas',
            'rut'               => '1-9',
            'cargo'             => 'Administrativa Sucursal',
            'padre'             => 118,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Sergio Chihuailaf',
            'rut'               => '1-9',
            'cargo'             => 'Bodeguero',
            'padre'             => 118,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Ricardo Cabezas',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor Talca',
            'padre'             => 118,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rodrigo Morán',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor Sta Cruz',
            'padre'             => 118,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Carlos Muñoz',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor Curicó',
            'padre'             => 118,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //Jefe Ventas Concepción Claudio Díaz (119)


        INT_ORGANIGRAMA::create([
            'nombre'            => 'Paulo Sierra',
            'rut'               => '1-9',
            'cargo'             => 'Administrativo Sucursal',
            'padre'             => 119,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Bodegueros',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros',
            'padre'             => 119,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Vendedores',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores',
            'padre'             => 119,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //bodegueros (139)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Jaime Rivas M.',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 139,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Arturo García',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 139,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //vendedores (140)

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Alex Oliva',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 140,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'José Ramirez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 140,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Freddy Muñoz',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 140,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Cesar Jorquera',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 140,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rodolfo Valencia',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 140,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Jorge Gaete',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 140,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        ////////////////// jefes 56

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rodrigo Puentes',
            'rut'               => '1-9',
            'cargo'             => 'Temuco/Pto. Montt',
            'padre'             => 56,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Alejandro Sánchez',
            'rut'               => '1-9',
            'cargo'             => 'Trade Marketing',
            'padre'             => 56,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        // Temuco/Pto. Montt 149
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Roberto Ruíz',
            'rut'               => '1-9',
            'cargo'             => 'Adm. Temuco',
            'padre'             => 149,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Bodegueros',
            'rut'               => '1-9',
            'cargo'             => 'Bodegueros',
            'padre'             => 149,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Alberto Toro',
            'rut'               => '1-9',
            'cargo'             => 'Adm. Pto.Montt',
            'padre'             => 149,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Vendedores',
            'rut'               => '1-9',
            'cargo'             => 'Vendedores',
            'padre'             => 149,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Rodrigo Flores',
            'rut'               => '1-9',
            'cargo'             => 'Trade MKT',
            'padre'             => 149,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //Bodegueros 152
        INT_ORGANIGRAMA::create([
            'nombre'            => 'José Luis S',
            'rut'               => '1-9',
            'cargo'             => 'Bodeguero',
            'padre'             => 152,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

                INT_ORGANIGRAMA::create([
            'nombre'            => 'Manuel Ponce',
            'rut'               => '1-9',
            'cargo'             => 'Bodeguero',
            'padre'             => 152,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
                INT_ORGANIGRAMA::create([
            'nombre'            => 'Jaime Bustamante',
            'rut'               => '1-9',
            'cargo'             => 'Bodeguero',
            'padre'             => 152,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
                INT_ORGANIGRAMA::create([
            'nombre'            => 'Jorge Triviño',
            'rut'               => '1-9',
            'cargo'             => 'Bodeguero',
            'padre'             => 152,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //Vendedores 154

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Patricio Echeverría',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 154,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Pablo Vega',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 154,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Mauricio Canario',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 154,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Erasmo Guiñez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 154,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Robert Pérez',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 154,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Cristian Ramos',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 154,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Héctor Zárate',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 154,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Víctor Isla',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor',
            'padre'             => 154,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


        // Trade Marketing 150

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Felipe González',
            'rut'               => '1-9',
            'cargo'             => 'Jefe de Local',
            'padre'             => 150,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'David Aguilar',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor Modulo',
            'padre'             => 150,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Karina Gallardo',
            'rut'               => '1-9',
            'cargo'             => 'Vendedor Modulo',
            'padre'             => 150,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


        // GERENTE VINOS Diego Yurjevic (5)

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Maria Jose Prado',
            'rut'               => '1-9',
            'cargo'             => 'Diseñadora',
            'padre'             => 5,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Brand Managers',
            'rut'               => '1-9',
            'cargo'             => 'Brand Managers',
            'padre'             => 5,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Ivonne Delsauth',
            'rut'               => '1-9',
            'cargo'             => 'Sommelier Errázuriz',
            'padre'             => 5,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Asist. de Marketing',
            'rut'               => '1-9',
            'cargo'             => 'Asist. de Marketing',
            'padre'             => 5,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'On Trade Managers',
            'rut'               => '1-9',
            'cargo'             => 'On Trade Managers',
            'padre'             => 5,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


        //Brand Managers (172)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Julieta Mancilla',
            'rut'               => '1-9',
            'cargo'             => 'Errázuriz y Caliterra',
            'padre'             => 172,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Alejandra Caldera',
            'rut'               => '1-9',
            'cargo'             => 'O.Negra/Veramte/Mrandé',
            'padre'             => 172,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Gerardo Reichert',
            'rut'               => '1-9',
            'cargo'             => 'BouqueVSC/CM/SÑ/TAM',
            'padre'             => 172,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Daniela Crisostomo',
            'rut'               => '1-9',
            'cargo'             => 'Viña Undurraga',
            'padre'             => 172,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


        //Asist. de Marketing(174)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Diego Garcia',
            'rut'               => '1-9',
            'cargo'             => 'Asistente MKT.',
            'padre'             => 174,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Benjamín Meriz',
            'rut'               => '1-9',
            'cargo'             => 'Asistente MKT.',
            'padre'             => 174,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        //On Trade Managers(175)
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Verónica Brieva',
            'rut'               => '1-9',
            'cargo'             => 'Trade Manager',
            'padre'             => 175,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Beatriz Errázuriz',
            'rut'               => '1-9',
            'cargo'             => 'Trade Manager',
            'padre'             => 175,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Paloma Peralta',
            'rut'               => '1-9',
            'cargo'             => 'Trade Manager',
            'padre'             => 175,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);

        INT_ORGANIGRAMA::create([
            'nombre'            => 'Felipe Hoffmann',
            'rut'               => '1-9',
            'cargo'             => 'Trade Manager',
            'padre'             => 175,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);
        INT_ORGANIGRAMA::create([
            'nombre'            => 'Marcelo Vasquez',
            'rut'               => '1-9',
            'cargo'             => 'Trade Manager',
            'padre'             => 175,
            'posicion'          => 1,
            'control_usuario'   => 'seeder',
        ]);


    }
}
