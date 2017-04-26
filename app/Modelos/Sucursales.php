<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;
use intranet\User;

class Sucursales extends Model
{
    //
    protected $table = 'sucursales';


    // relaciones

    // | users |>-| sucursales |
    public function users()
    {
        return $this->hasMany( User::class, 'sucursal_id', 'id' );
    }

}
