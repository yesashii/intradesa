<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;

class INT_ORGANIGRAMA extends Model
{
    //
    protected $table = 'INT_ORGANIGRAMA';


    public function padre()
    {
        return $this->hasOne( $this, 'padre', 'id' );
        //  return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    }


    /* trae a los hijos de la misma tabla */
    public function hijos()
    {
        return $this->hasMany( $this, 'padre', 'id' );
        //  return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    }


}
