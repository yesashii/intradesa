<?php

namespace intranet\Modelo;

use Illuminate\Database\Eloquent\Model;
use intranet\User;

class INT_NOTICIAS extends Model
{
    //
    protected $table        = 'INT_NOTICIAS';
    protected $primaryKey   = 'id_noticia';

    // relaciones
    //  | INT_USUARIOS |-<| INT_NOTICIAS |
    public function usuarios()
    {
        $this->belongsTo( User::class, 'usuario_id', 'id' );
    }

}
