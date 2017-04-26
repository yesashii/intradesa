<?php

namespace intranet\Modelos;

use intranet\User;


use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    //
    protected $table = 'noticias';


    // | noticias | >- | users |
    public function users()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }


    /**
     * trae las noticias
     *
     * @return mixed
     */
    public static function traeTodasLasNoticias()
    {
        return static::paginate(5);
    }


}
