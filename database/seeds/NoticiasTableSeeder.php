<?php

use Illuminate\Database\Seeder;

use intranet\Modelo\INT_NOTICIAS;

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
        // noticia 0
        INT_NOTICIAS::create([
            'titulo'            => "La Universidad de Chile de Hoyos gritó campeón tras derribar a San Luis",
            'sub_titulo'        => "Los azules celebraron luego de doblegar a los \"canarios\" en el Nacional.",
            'texto'             =>  'Universidad de Chile se consagró campeón del Torneo de Clausura 2016-2017 luego de vencer este sábado por 1-0 a San Luis de Quillota ante más de 46.000 almas en el Estadio Nacional, en el marco de una vibrante definición por la última fecha del certamen. Los azules, con 30 puntos en el tope de la tabla, celebraron su decimoctava estrella en un reñido campeonato, el cual concluyeron con nueve triunfos, tres empates y tres derrotas, registro con el cual le arrebataron el título a Colo Colo, que terminó segundo con una unidad menos.',
            'imagen'            => 'img/noticias/0.jpg',
            'fecha'             =>  (string)Carbon::now('America/Santiago')->toDateTimeString(),
            'url'               => '',
            'usuario_id'        => 1,
            'control_usuario'   => 'seeder',
        ]);


        // noticia 1
        INT_NOTICIAS::create([
            'titulo'            => "Las chicas del cable",
            'sub_titulo'        => "El debut español de Netflix tiene intenso aroma a Bambú",
            'texto'             =>  'El 28 de abril, Netflix hará historia en nuestro país con el estreno de su primera serie original. Se llama \'Las chicas del cable\' y, como decimos, es un paso muy importante tanto para la compañía de VoD como para la ficción española. Para la empresa, es una gran oportunidad de seguir demostrando su interés por conquistar al público local.Su decisión de embarcarse en proyectos en cada uno de los países en los que ya está establecida refuerza su compromiso con la cultura de cada región y la conexión con sus usuarios, que ven cómo Netflix diseña productos exclusivamente pensados para ellos. Nosotros ya hemos podido ver sus primeros capítulos y es hora de que os contemos qué podemos encontrar en ella.',
            'imagen'            => 'img/noticias/1.jpg',
            'fecha'             =>  (string)Carbon::now('America/Santiago')->toDateTimeString(),
            'url'               => '',
            'usuario_id'        => 1,
            'control_usuario'   => 'seeder',
        ]);

        // noticia 2
        INT_NOTICIAS::create([
            'titulo'            => "Los árbitros lo tendrán más fácil en el mundial de 2018",
            'sub_titulo'        => "Por fin llegan las repeticiones instantáneas",
            'texto'             => "Los árbitros de fútbol no son personajes especialmente queridos, y a menudo su papel es ingrato: tener que tomar decisiones en una fracción de segundo es a menudo muy complejo, pero pronto tendrán una ayuda importante: la del VAR, o Video Assitant Referee, la tecnología que debutará (por fin) en el mundial de 2018 que se celebra en Rusia. Esta tecnología permitirá que por primera vez se haga uso de repeticiones instantáneas para corregir o modificar errores arbitrales. El árbitro tendrá detrás a un equipo de asistentes arbitrales que con una serie de cámaras de vídeo podrán analizar la jugada dudosa para llegar a una decisión final.",
            'imagen'            => 'img/noticias/2.jpg',
            'fecha'             =>  (string)Carbon::now('America/Santiago')->toDateTimeString(),
            'url'               => '',
            'usuario_id'        => 1,
            'control_usuario'   => 'seeder',
        ]);

        // noticia 3
        INT_NOTICIAS::create([
            'titulo'            => "La guerra de las compañías modernas para matar el mail",
            'sub_titulo'        => "Podemos llegar a perder 100 horas de trabajo todos los años simplemente gestionando el e-mail.",
            'texto'             => "Las herramientas de colaboración pueden ayudar a reducir el volumen de correo electrónico en un 30% y hacer que sea un 33% más rápido para los equipos redactar documentos, gracias a funcionalidades como la mensajería instantánea o el almacenamiento de archivos en la nube fácilmente compartibles. Y, sin embargo, siguen siendo muchos los que se empeñan en que el correo electrónico continúe siendo el método principal de comunicación, colaboración y compartición de su empresa.",
            'imagen'            => 'img/noticias/3.jpg',
            'fecha'             =>  (string)Carbon::now('America/Santiago')->toDateTimeString(),
            'url'               => '',
            'usuario_id'        => 1,
            'control_usuario'   => 'seeder',
        ]);

    }
}
