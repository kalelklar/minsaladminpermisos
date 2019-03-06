<?php

namespace minsaladminpermisos\Http\Controllers;

use Illuminate\Http\Request;

class reporte2Controller extends Controller
{
    //
    function show($id){
    	//dd($id);

        //Datos para la mostrar el mantenimiento
      	$result1=DB::table('solicitud as s')->Select( DB::raw("s.idsolicitud, s.fechaingreso, s.estado, v.modelo, v.placa, v.tipo,v.capacidad,v.refigeracion, e.nombreempresa, e.direccion,CONCAT(c.nombre,' ',c.apellido) AS representante"))
      	->join('expediente as ex','s.idexpediente','=','ex.idexpediente')
      	->join('vehiculo as v','v.idvehiculo','=','ex.idvehiculo')
      	->join('empresa as e','e.idempresa','=','v.idempresa')
      	->join('cliente as c','c.idcliente','=','e.idempresa')
      	->where('s.idsolicitud','=',$id)->get();
      // fin


      if(count($result1)===0){
        Session::flash('query','No hay Resultados para su consulta');
        return Redirect::to('admin/solicitud');
      }
      else{
        return view('reportes.reporte1.show',['result'=>$result1,'idsolicitud'=>$id]);
      }

    }

     public function reportepdf($id) {
     	//dd($id);
      //Datos para la mostrar el mantenimiento
      	$result1=DB::table('solicitud as s')->Select( DB::raw("s.idsolicitud, s.fechaingreso, s.estado, v.modelo, v.placa, v.tipo,v.capacidad,v.refigeracion, e.nombreempresa, e.direccion,CONCAT(c.nombre,' ',c.apellido) AS representante"))
      	->join('expediente as ex','s.idexpediente','=','ex.idexpediente')
      	->join('vehiculo as v','v.idvehiculo','=','ex.idvehiculo')
      	->join('empresa as e','e.idempresa','=','v.idempresa')
      	->join('cliente as c','c.idcliente','=','e.idempresa')
      	->where('s.idsolicitud','=',$id)->get();
      // fin


      if(count($result1)===0){
        Session::flash('query','No hay Resultados para su consulta');
        return Redirect::to('admin/solicitud');
      }
      else{
        /*$date1 = new DateTime($fechainicial);
        $date2 = new DateTime($fechafinal);
        $d1=$date1->format('d-m-Y');
        $d2=$date2->format('d-m-Y');*/
        //PDF::setOptions(['isPhpEnabled' => true]);
        $pdf=PDF::loadView('reportes.reporte1.pdf',['result'=>$result1]);

        $papel_tamaño=array(0,0,279,216);
        $pdf->setPaper("letter",'Landscape');
        return $pdf->stream('SolicituddePermisos');
      }
  }
}
