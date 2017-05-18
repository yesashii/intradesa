<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;

class INT_ORGANIGRAMA extends Model
{
    //
    protected $table = 'INT_ORGANIGRAMA';


    public function raiz()
    {
        return $this->belongsTo( $this, 'padre', 'id' );
        //  return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    }


    /* trae a los hijos de la misma tabla */
    public function hijos()
    {
        return $this->hasMany( $this, 'padre', 'id' );
        //  return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    }

    /**
     * trae el nivel de una celda
     */

    public function nivel( $id_caja )
    {
        if( $id_caja == 1 )
        {
            $nivel = 1;
        }else{

            $nivel = 2;

            $trabajador = INT_ORGANIGRAMA::find($id_caja);
            while ( $trabajador->raiz->id > 1 )
            {
                $nivel++;
                $trabajador = $trabajador->raiz;
            }

        }

        return $nivel;
    }


}
