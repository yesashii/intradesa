<?php

use Illuminate\Database\Seeder;

use intranet\Modelos\Noticias;

use Carbon\Carbon;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // noticia de prueba
        Noticias::create([
            'titulo'            => 'Noticia 1',
            'sub_titulo'        => 'Sub titulo',
            'texto'             =>  'Aenean vitae libero velit, nec malesuada diam. Curabitur imperdiet porta sapien, sed luctus sapien sollicitudin at.',
            'imagen'            => 'img/noticias/noticia_1.jpg',
            'fecha'             =>  (string)Carbon::now('America/Santiago'),
            'url'               => '',
            'user_id'           => 1,
        ]);


        Noticias::create([
            'titulo'            => 'Noticia 2',
            'sub_titulo'        => 'Sub titulo',
            'texto'             =>  'Aenean vitae libero velit, nec malesuada diam. Curabitur imperdiet porta sapien, sed luctus sapien sollicitudin at.',
            'imagen'            => 'img/noticias/noticia_1.jpg',
            'fecha'             =>  (string)Carbon::now('America/Santiago'),
            'url'               => '',
            'user_id'           => 1,
        ]);


        Noticias::create([
            'titulo'            => 'Noticia 3',
            'sub_titulo'        => 'Sub titulo',
            'texto'             =>  'Aenean vitae libero velit, nec malesuada diam. Curabitur imperdiet porta sapien, sed luctus sapien sollicitudin at.',
            'imagen'            => 'img/noticias/noticia_1.jpg',
            'fecha'             =>  (string)Carbon::now('America/Santiago'),
            'url'               => '',
            'user_id'           => 1,
        ]);


    }
}
