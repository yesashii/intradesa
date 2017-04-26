<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    //
    protected $table = 'departamentos';

    //relaciones

    // | cargos  |>-| departamentos |
    public function cargos()
    {
        return $this->hasMany( Cargos::class, 'departamento_id', 'id' );
    }
}
