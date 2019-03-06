<?php

namespace minsaladminpermisos\Http\Controllers;

///
use Illuminate\Http\Request;

use minsaladminpermisos\Http\Requests;

use minsaladminpermisos\Empresa;

use minsaladminpermisos\Cliente;

use minsaladminpermisos\Vehiculo;

use minsaladminpermisos\Expediente;

use minsaladminpermisos\Solicitud;

//use minsaladminpermisos\Http\Requests\EmpresaFormRequest;

use Illuminate\Support\Facades\Redirect;

use DB;

use Carbon\Carbon;

use Session;

use PDF;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Input;

use minsaladminpermisos\Http\Requests\FormFechaRequest;

class reporte3Controller extends Controller
{
    //
    //
    function index(){
    
    	return view('reportes.reporte3.index');
    }


  
  function show(FormFechaRequest $request){
  	 	//
      	$fechaInicial=$request['fechainicial'];
        $fechaFinal=$request['fechafinal']; 


        //Datos para la mostrar 

        $result=DB::table('solicitud as s')->Select( DB::raw("s.idsolicitud, s.fechaingreso, s.estado, v.modelo, v.placa, v.tipo,v.capacidad,v.refigeracion, e.nombreempresa, e.direccion,CONCAT(c.nombre,' ',c.apellido) AS representante"))
      	->join('expediente as ex','s.idexpediente','=','ex.idexpediente')
      	->join('vehiculo as v','v.idvehiculo','=','ex.idvehiculo')
      	->join('empresa as e','e.idempresa','=','v.idempresa')
      	->join('cliente as c','c.idcliente','=','e.idempresa')
        ->whereBetween('s.fechaingreso', [$fechaInicial,$fechaFinal])
        ->get();    
        $i=0;
	    foreach ($result as $res) {
	     $i++;
	     if ($i==1) {
	      return view('reportes.reporte3.show',compact('result','fechaInicial','fechaFinal'));
	      
	     }
	    }
	    if ($i==0) {
	      Session::flash('message','No existen registros para el periodo seleccionado');
	 		return Redirect::to('reporte3/parametros');
    	}
    }

    public function reportepdf($fechaInicial,$fechaFinal) {
     	//dd($id);
      //Datos para la mostrar el mantenimiento
      	$result=DB::table('solicitud as s')->Select( DB::raw("s.idsolicitud, s.fechaingreso, s.estado, v.modelo, v.placa, v.tipo,v.capacidad,v.refigeracion, e.nombreempresa, e.direccion,CONCAT(c.nombre,' ',c.apellido) AS representante"))
      	->join('expediente as ex','s.idexpediente','=','ex.idexpediente')
      	->join('vehiculo as v','v.idvehiculo','=','ex.idvehiculo')
      	->join('empresa as e','e.idempresa','=','v.idempresa')
      	->join('cliente as c','c.idcliente','=','e.idempresa')
        ->whereBetween('s.fechaingreso', [$fechaInicial,$fechaFinal])
        ->get();    



      if(count($result)===0){
        Session::flash('query','No hay Resultados para su consulta');
        return Redirect::to('reporte3/parametros');
      }
      else{
        /*$date1 = new DateTime($fechaInicial);
        $date2 = new DateTime($fechaFinal);
        $d1=$date1->format('d-m-Y');
        $d2=$date2->format('d-m-Y');
        PDF::setOptions(['isPhpEnabled' => true]);*/
        $pdf=PDF::loadView('reportes.reporte3.pdf',['result'=>$result,'fechaInicial'=>$fechaInicial,'fechaFinal'=>$fechaFinal]);
        $papel_tamaño=array(0,0,279,216);
        $pdf->setPaper("letter",'Landscape');
        return $pdf->stream('MemoriaLabores');
      	}
  	}
    
}
