<?php

namespace intranet\Http\Controllers\Extras;

use Illuminate\Http\Request;
use intranet\Http\Controllers\Controller;

use intranet\User;
use intranet\Modelos\INT_RESPALDO_CONTRASENIA;

class CambioPassController extends Controller
{
    //

    public function cambiaContrasenia( Request $request )
    {

        $idRespaldo = $request->idRespaldo;

        $array_usuario  = User::where('email', $request->email)->get();
        $O_usuario      = User::find($array_usuario[0]->id);
        $O_usuario->password = bcrypt($request->password_1);
        $O_usuario->save();

        $O_respaldo_contrasenia = INT_RESPALDO_CONTRASENIA::find($idRespaldo);
        $O_respaldo_contrasenia->contrasenia    = $request->password_1;

        $O_respaldo_contrasenia->save();

        $contraseniaCambiada = true;

        return view('cambiaPass', compact('contraseniaCambiada'));
    }
}
