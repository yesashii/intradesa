<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;
use intranet\User;

class INT_AREAS extends Model
{
    //
    protected $table        = 'INT_AREAS';

    protected $primaryKey   = 'id_area';

    // relaciones

    // | INT_USUARIOS |>-| INT_AREAS |
    public function usuarios()
    {
        return $this->hasMany( User::class, 'area_id','id_area' );
    }
}
