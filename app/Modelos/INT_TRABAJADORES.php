<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use intranet\User;

use intranet\Clases\Fechas;

use Illuminate\Support\Facades\DB;

class INT_TRABAJADORES extends Model
{
    //VISTA!!!!!

    protected $table = 'INT_TRABAJADORES';

    // | INT_USUARIOS |-| INT_TRABAJADORES |

    public function int_usuarios()
    {
       return $this->hasOne( User::class, 'email', 'CORREOELEC' );
      //  return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    }


    public function traeDetalleTrabajador( $id )
    {
        $usuario        = User::find($id);
        $trabajadores   = INT_TRABAJADORES::where('CORREOELEC', $usuario->email)->get();

        return $trabajadores[0];

    }

    public static function todosPaginados()
    {
        $trabajadores = static::where( 'CORREOELEC', '<>', '' )->paginate(10);
        return $trabajadores;
    }

    public function buscar( Request $request )
    {

        if( $this->soloEmpresa( $request ) )
        {
            $trabajadores = INT_TRABAJADORES::where( 'EMPRESA', 'like', '%'.$request->EMPRESA.'%' );
        }elseif ( $this->soloApellido( $request ) ){
            $trabajadores = INT_TRABAJADORES::where( 'APELLIDO_PATERNO', 'like', '%'.$request->APELLIDO_PATERNO.'%' );
        }elseif ( $this->soloNombre( $request ) ){
            $trabajadores = INT_TRABAJADORES::where( 'NOMBRE', 'like', '%'.$request->NOMBRE.'%' );
        }elseif ( $this->soloFicha( $request ) ){
            $trabajadores = INT_TRABAJADORES::where( 'FICHA', 'like', '%'.$request->FICHA.'%' );
        }elseif ( $this->soloCorreo( $request ) ){
            $trabajadores = INT_TRABAJADORES::where( 'CORREOELEC', 'like', '%'.$request->CORREOELEC.'%' );
        }elseif ( $this->soloCargo( $request ) ){
            $trabajadores = INT_TRABAJADORES::where( 'CARGO', 'like', '%'.$request->CARGO.'%' );
        }else{
            $trabajadores = INT_TRABAJADORES::where( 'EMPRESA', 'like', '%'.$request->EMPRESA.'%' )
                ->where( 'FICHA', 'like', '%'.$request->FICHA.'%' )
                ->where( 'NOMBRE', 'like', '%'.$request->NOMBRE.'%' )
                ->where( 'APELLIDO_PATERNO', 'like', '%'.$request->APELLIDO_PATERNO.'%' )
                ->where( 'CORREOELEC', 'like', '%'.$request->CORREOELEC.'%' )
                ->where( 'CARGO', 'like', '%'.$request->CARGO.'%' );
        }

        //dd($trabajadores);
        return $trabajadores->get();
    }

    public function traeUsuariosCumpleaniosSemana()
    {

        //19631028
        $fecha = new Fechas();

        $mesInicio   = $fecha->traeMesInicioSemanaCumpleanio();
        $mesFin      = $fecha->traeMesTerminoSemanaCumpleanio();


        $diaInicio   = $fecha->traeDiaInicioSemanaCumpleanio();
        $diaFin      = $fecha->traeDiaTerminoSemanaCumpleanio();


        if($mesInicio == $mesFin)
        {
            $usuarios = INT_TRABAJADORES::whereBetween( DB::raw("SUBSTRING(cast(FECHA_NACIMIENTO as varchar),5,2)"),  [$mesInicio, $mesFin] )
                ->whereBetween( DB::raw(" SUBSTRING(cast(FECHA_NACIMIENTO as varchar),7,2)"),  [$diaInicio, $diaFin] )
                ->where('FECHA_NACIMIENTO','>',0)
                ->orderBy( DB::raw("DAY(convert(datetime,cast(FECHA_NACIMIENTO as varchar)))") , 'desc')
                ->get();
        }else{
            $primer_mes = INT_TRABAJADORES::where( DB::raw("SUBSTRING(cast(FECHA_NACIMIENTO as varchar),5,2)"),'=',  $mesInicio )
                ->where( DB::raw(" SUBSTRING(cast(FECHA_NACIMIENTO as varchar),7,2)"),'>=', $diaInicio  )
                ->where('FECHA_NACIMIENTO','>',0)
                ->select( DB::raw( '*, SUBSTRING( Cast(fecha_nacimiento as varchar), 5,4 ) as orden' ) );

            $usuarios = INT_TRABAJADORES::where( DB::raw("SUBSTRING(cast(FECHA_NACIMIENTO as varchar),5,2)"),'=',  $mesFin )
                ->where( DB::raw(" SUBSTRING(cast(FECHA_NACIMIENTO as varchar),7,2)"),'<=',  $diaFin )
                ->where('FECHA_NACIMIENTO','>',0)
                ->union($primer_mes)
                ->orderBy( 'orden' , 'asc')
                ->select( DB::raw( '*, SUBSTRING( Cast(fecha_nacimiento as varchar), 5,4 ) as orden' ) )
                ->get();

        }


        return $usuarios;

    }

    public function traeCumpleaniosDia()
    {
        $fecha = new Fechas();

        $mes    = $fecha->traeMesactual();
        $dia    = $fecha->traeDiaHoy();

        $trabajadores  = INT_TRABAJADORES::where( DB::raw("SUBSTRING(cast(FECHA_NACIMIENTO as varchar),5,2)"),  $mes )
            ->where( DB::raw(" SUBSTRING(cast(FECHA_NACIMIENTO as varchar),7,2)"),  $dia )
            ->where('FECHA_NACIMIENTO','>',0)
            ->orderBy( DB::raw("DAY(convert(datetime,cast(FECHA_NACIMIENTO as varchar)))") , 'desc')
            ->get();
        return $trabajadores;
    }

    public function traeCumpleaniosMes()
    {
        $fecha = new Fechas();

        $mes    = $fecha->traeMesactual();

        $trabajadores  = INT_TRABAJADORES::where( DB::raw("SUBSTRING(cast(FECHA_NACIMIENTO as varchar),5,2)"),  $mes )
            ->where('FECHA_NACIMIENTO','>',0)
            ->orderBy( DB::raw("DAY(convert(datetime,cast(FECHA_NACIMIENTO as varchar)))") , 'asc')
            ->get();
        return $trabajadores;
    }






    private function soloEmpresa( Request $request )
    {
        $retorno = true;
        if( $request->EMPRESA != ''   )
        {
            $retorno = true;
        }

        if( $request->FICHA != '' || $request->NOMBRE != '' || $request->APELLIDO_PATERNO != '' || $request->CORREOELEC != '' || $request->CARGO != '' )
        {
            $retorno = false;
        }

        return $retorno;

    }

    private function soloFicha( Request $request )
    {
        $retorno = true;
        if( $request->FICHA != ''   )
        {
            $retorno = true;
        }

        if( $request->EMPRESA != '' || $request->NOMBRE != '' || $request->APELLIDO_PATERNO != '' || $request->CORREOELEC != '' || $request->CARGO != '' )
        {
            $retorno = false;
        }

        return $retorno;

    }

    private function soloNombre( Request $request )
    {
        $retorno = true;
        if( $request->NOMBRE != ''   )
        {
            $retorno = true;
        }

        if( $request->EMPRESA != '' || $request->FICHA != '' || $request->APELLIDO_PATERNO != '' || $request->CORREOELEC != '' || $request->CARGO != '' )
        {
            $retorno = false;
        }

        return $retorno;

    }

    private function soloApellido( Request $request )
    {
        $retorno = true;
        if( $request->APELLIDO_PATERNO != ''   )
        {
            $retorno = true;
        }

        if( $request->EMPRESA != '' || $request->FICHA != '' || $request->NOMBRE != '' || $request->CORREOELEC != '' || $request->CARGO != '' )
        {
            $retorno = false;
        }

        return $retorno;

    }

    private function soloCorreo( Request $request )
    {
        $retorno = true;
        if( $request->CORREOELEC != ''   )
        {
            $retorno = true;
        }

        if( $request->EMPRESA != '' || $request->FICHA != '' || $request->NOMBRE != '' || $request->APELLIDO_PATERNO != '' || $request->CARGO != '' )
        {
            $retorno = false;
        }

        return $retorno;

    }

    private function soloCargo( Request $request )
    {
        $retorno = true;
        if( $request->CARGO != ''   )
        {
            $retorno = true;
        }

        if( $request->EMPRESA != '' || $request->FICHA != '' || $request->NOMBRE != '' || $request->APELLIDO_PATERNO != '' || $request->CORREOELEC != '' )
        {
            $retorno = false;
        }

        return $retorno;

    }
}
