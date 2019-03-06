<?php

namespace minsaladminpermisos\Http\Controllers;

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

use Session;

use PDF;

use Illuminate\Http\Response;

use minsaladminpermisos\Http\Requests\FormSolicitudRequest;

class SolicitudController extends Controller
{
    //
    //
    public function __construct(){

    }
 

    public function index(Request $request){
    	
    	if ($request)
        {    
      	//Datos para la mostrar el mantenimiento
      	$result1=DB::table('solicitud as s')->Select( DB::raw("s.idsolicitud, s.fechaingreso, v.modelo, v.placa, e.nombreempresa"))
      	->join('expediente as ex','s.idexpediente','=','ex.idexpediente')
      	->join('vehiculo as v','v.idvehiculo','=','ex.idvehiculo')
      	->join('empresa as e','e.idempresa','=','v.idempresa')->get();
      
	   //dd("llego aqui");
	    return view("admin.solicitud.index",['solicitudes'=>$result1]);
	     
        }
    }

    public function create(){
    	//Datos para la mostrar el mantenimiento
      	$result1=DB::table('expediente AS ex')->Select( DB::raw("ex.idexpediente,v.modelo, e.nombreempresa"))
      	->join('vehiculo as v','v.idvehiculo','=','ex.idvehiculo')
      	->join('empresa as e','e.idempresa','=','v.idempresa')->get();

    	return view("admin.solicitud.create",['vehiculos'=>$result1]);
    }

    public function store(FormSolicitudRequest $request){

    	$solicitudes=new Solicitud;
   		$solicitudes->idexpediente=$request->get('idexpediente');
   		$solicitudes->fechaingreso=$request->get('fechaingreso');
   		$solicitudes->fecharesolucion=$request->get('fecharesolucion');
   		$solicitudes->estado=$request->get('estado');
   		$solicitudes->save();


    	Session::flash('store','Los datos han sido guardados correctamente!!!');
    	return Redirect::to('admin/solicitud');
    }

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

  function show2($id){
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
        return view('reportes.reporte2.show',['result'=>$result1,'idsolicitud'=>$id]);
      }

    }

     public function reportepdf2($id) {
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
        $pdf=PDF::loadView('reportes.reporte2.pdf',['result'=>$result1]);

        $papel_tamaño=array(0,0,279,216);
        $pdf->setPaper("letter",'Landscape');
        return $pdf->stream('SolicituddePermisos');
      }
  }
}
