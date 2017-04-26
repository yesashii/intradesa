<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;
use intranet\User;

class Cargos extends Model
{
    //
    protected $table = 'cargos';


    // relaciones

    // | users |>-| cargos |
    public function users()
    {
        return $this->hasMany( User::class, 'user_id', 'id' );
    }

    // | cargos |>-| departamentos |
    public function departamentos()
    {
        return $this->belongsTo( Departamentos::class, 'departamento_id', 'id' );
    }


}
