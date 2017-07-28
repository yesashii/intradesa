<?php

namespace intranet\Http\Controllers\Eventos;

use Illuminate\Http\Request;
use intranet\Http\Controllers\Controller;

class GalleriaController extends Controller
{
    //

    public function muestraGaleria( $id )
    {
        $arr_fotos = [];
        if( $id  == 1  )
        {
            array_push($arr_fotos,"dia-padre/DSCF0235.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0249.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0253.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0254.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0280.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0281.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0299.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0300.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0311.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0312.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0314.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0316.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0321.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0323.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0327.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0328.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0329.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0330.jpg");
            array_push($arr_fotos,"dia-padre/DSCF0331.jpg");
        }

        if( $id  == 2  )
        {
            array_push($arr_fotos,"dia-mujer/080.jpg");
            array_push($arr_fotos,"dia-mujer/081.jpg");
            array_push($arr_fotos,"dia-mujer/082.jpg");
            array_push($arr_fotos,"dia-mujer/083.jpg");
            array_push($arr_fotos,"dia-mujer/084.jpg");

        }

        if( $id  == 3  )
        {
            array_push($arr_fotos,"navidad/088.jpg");
            array_push($arr_fotos,"navidad/038.jpg");
            array_push($arr_fotos,"navidad/050.jpg");
            array_push($arr_fotos,"navidad/058.jpg");
            array_push($arr_fotos,"navidad/033.jpg");
            array_push($arr_fotos,"navidad/039.jpg");
            array_push($arr_fotos,"navidad/051.jpg");
            array_push($arr_fotos,"navidad/059.jpg");
            array_push($arr_fotos,"navidad/034.jpg");
            array_push($arr_fotos,"navidad/047.jpg");
            array_push($arr_fotos,"navidad/053.jpg");
            array_push($arr_fotos,"navidad/060.jpg");
            array_push($arr_fotos,"navidad/035.jpg");
            array_push($arr_fotos,"navidad/048.jpg");
            array_push($arr_fotos,"navidad/057.jpg");
            array_push($arr_fotos,"navidad/061.jpg");
            array_push($arr_fotos,"navidad/062.jpg");
            array_push($arr_fotos,"navidad/066.jpg");
            array_push($arr_fotos,"navidad/063.jpg");
            array_push($arr_fotos,"navidad/067.jpg");
            array_push($arr_fotos,"navidad/069.jpg");
            array_push($arr_fotos,"navidad/073.jpg");
        }



            return view( 'galleria_eventos.index', compact('arr_fotos') );
    }


    public function index()
    {
/*
        $entry = '{ entry": {'.
            '{'.
            '"title": {'.
            '"_t": "IMG_4860.jpg",'.
            '"type": "text"'.
            '},'.
            '"gphoto_id": {'.
            '"_t": "5685978513675622754"'.
            '},'.
            '"media_group": {'.
            '"media_content": {'.
            '{'.
            '"url": "https://lh3.googleusercontent.com/-h8XO6lO8G7I/TuinVSQjmWI/AAAAAAAAHRs/y1P6UxPD9FYrefThxee-B16QHQJq-408gCHMYBhgL/s720/IMG_4860.jpg",'.
            '"height": 490,'.
            '"width": 700,'.
            '"type": "image/jpeg",'.
            '"medium": "image"'.
            '}'.
            '},'.
            '"media_thumbnail": {'.
            '{'.
            '"url": "https://lh3.googleusercontent.com/-h8XO6lO8G7I/TuinVSQjmWI/AAAAAAAAHRs/y1P6UxPD9FYrefThxee-B16QHQJq-408gCHMYBhgL/s72/IMG_4860.jpg",'.
            '"height": 51,'.
            '"width": 72'.
            '},'.
            '{'.
            '"url": "https://lh3.googleusercontent.com/-h8XO6lO8G7I/TuinVSQjmWI/AAAAAAAAHRs/y1P6UxPD9FYrefThxee-B16QHQJq-408gCHMYBhgL/s144/IMG_4860.jpg",   '.
            '"height": 101,'.
            '"width": 144'.
            '},'.
            '{'.
            '"url": "https://lh3.googleusercontent.com/-h8XO6lO8G7I/TuinVSQjmWI/AAAAAAAAHRs/y1P6UxPD9FYrefThxee-B16QHQJq-408gCHMYBhgL/s288/IMG_4860.jpg",'.
            '"height": 202,'.
            '"width": 288'.
            '}'.
            '}'.
            '}'.
            '}'.
            '}}';
*/
        $entry = [
            "title" => [
                "_t"        => "IMG_4860.jpg",
                "type"      => "text"
            ],
            "gphoto_id"     => ["_t" => "5685978513675622754"],
            "media_group"   => [
                "media_content" => [
                    "url"      => "https://lh3.googleusercontent.com/-h8XO6lO8G7I/TuinVSQjmWI/AAAAAAAAHRs/y1P6UxPD9FYrefThxee-B16QHQJq-408gCHMYBhgL/s720/IMG_4860.jpg",
                    "height"   => 490,
                    "width"    => 700,
                    "type"     => "image/jpeg",
                    "medium"   => "image"
                ],
                "media_thumbnail" => [
                    [
                        "url"      => "https://lh3.googleusercontent.com/-h8XO6lO8G7I/TuinVSQjmWI/AAAAAAAAHRs/y1P6UxPD9FYrefThxee-B16QHQJq-408gCHMYBhgL/s72/IMG_4860.jpg",
                        "height"   => 51,
                        "width"    => 72
                    ],
                    [
                        "url"      => "https://lh3.googleusercontent.com/-h8XO6lO8G7I/TuinVSQjmWI/AAAAAAAAHRs/y1P6UxPD9FYrefThxee-B16QHQJq-408gCHMYBhgL/s144/IMG_4860.jpg",
                        "height"   => 101,
                        "width"    => 144
                    ],
                    [
                        "url"      => "https://lh3.googleusercontent.com/-h8XO6lO8G7I/TuinVSQjmWI/AAAAAAAAHRs/y1P6UxPD9FYrefThxee-B16QHQJq-408gCHMYBhgL/s288/IMG_4860.jpg",
                        "height"   => 202,
                        "width"    => 288
                    ],
                ]
            ]
        ];
        return compact('entry');
        //return $entry;
    }
}
