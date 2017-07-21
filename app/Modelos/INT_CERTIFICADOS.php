<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;

class INT_CERTIFICADOS extends Model
{
    //
    protected $table = 'INT_CERTIFICADOS';


    public function User()
    {
        $this->belongsTo( User::class, 'user_id', 'id');
    }

    public function INT_TIPO_CERTIFICADO()
    {
        $this->belongsTo( INT_TIPO_CERTIFICADO::class, 'tipo_id', 'id' );
    }

    public function INT_ESTADO_CERTIFICADO()
    {
        $this->belongsTo( INT_ESTADO_CERTIFICADO::class, 'estado_id', 'id' );
    }

    public function INT_MOTIVO_CERTIFICADO()
    {
        $this->belongsTo( INT_MOTIVO_CERTIFICADO::class, 'motivo_id', 'id' );
    }

}
