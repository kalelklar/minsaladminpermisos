<?php

namespace minsaladminpermisos\Http\Controllers;

use Illuminate\Http\Request;


use minsaladminpermisos\Http\Requests;

use minsaladminpermisos\Empresa;

use minsaladminpermisos\Cliente;

use minsaladminpermisos\Vehiculo;

use minsaladminpermisos\Expediente;

//use minsaladminpermisos\Http\Requests\EmpresaFormRequest;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

use Illuminate\Support\Facades\Input;

use minsaladminpermisos\Http\Requests\FormEmpresaRequest;

class EmpresaController extends Controller
{
    //
    //
    public function __construct(){

    }
 

    public function index(Request $request){
    	
    	if ($request)
        {    
      	//Datos para la mostrar el mantenimiento
      	$result1=DB::table('empresa as emp')->Select( DB::raw("emp.idempresa,emp.nombreempresa,emp.razonsocial, CONCAT(cli.nombre,' ',cli.apellido) as nombre,cli.dui"))->join('cliente as cli','emp.idempresa','=','cli.idcliente')->get();
      
	   //dd("llego aqui");
	    return view("admin.empresa.index",['empresas'=>$result1]);
	     
        }
    }

    public function create(){
    	return view("admin.empresa.create");
    }

    public function store(FormEmpresaRequest $request){
    	//dd($request->get('refrigeracion')=="on"); 
    	$clientes=new Cliente;
   		$clientes->nombre=$request->get('nombre');
   		$clientes->apellido=$request->get('apellido');
   		$clientes->dui=$request->get('dui');
   		$clientes->nit=$request->get('nit');
   		$clientes->cargo=$request->get('cargo'); 
   		$clientes->save();
   		$id_cliente = Cliente::select('idcliente')->orderby('idcliente','DESC')->first(); 
   		//dd($id_cliente);

   		$empresas=new Empresa;
   		$empresas->idcliente=$id_cliente->idcliente;
   		$empresas->nombreempresa=$request->get('nombreempresa');
   		$empresas->razonsocial=$request->get('razonsocial');
   		$empresas->emplfemenino=$request->get('emplfemenino');
   		$empresas->emplmasculino=$request->get('emplmasculino');
   		$empresas->capital=$request->get('capital');
   		$empresas->nitempresa=$request->get('nitempresa');
   		$empresas->direccion=$request->get('direccion');  
   		$empresas->municipio=$request->get('municipio');    
   		$empresas->save();
   		$id_empresa = Empresa::select('idempresa')->orderby('idempresa','DESC')->first(); 

   		
   		$vehiculos=new Vehiculo;
   		$vehiculos->idempresa=$id_empresa->idempresa;
   		$vehiculos->modelo=$request->get('modelo');
   		$vehiculos->placa=$request->get('placa');
   		$vehiculos->ano=$request->get('ano');
   		$vehiculos->capacidad=$request->get('capacidad');
   		$vehiculos->tipo=$request->get('tipo');
   		if($request->get('refrigeracion')=="on"){
   			$vehiculos->refigeracion="1"; 
   		}else{
   			$vehiculos->refigeracion="0";
   		}
   		   
   		$vehiculos->save();

   		$id_vehiculo = Vehiculo::select('idvehiculo')->orderby('idvehiculo','DESC')->first(); 

   		$expedientes=new Expediente;
   		$expedientes->idvehiculo=$id_vehiculo->idvehiculo;
   		$expedientes->fechaapertura=date("Y-m-d");
   		$expedientes->save();

    	Session::flash('store','Los datos han sido guardados correctamente!!!');
    	return Redirect::to('admin/empresa');
    }
   
    public function show($id){
    	return view("admin.empleado.show",["empleado"=>Empleado::findOrFail($id)]);
    }
    
    public function edit($id){
    	return view("admin.empleado.edit",["empleado"=>Empleado::findOrFail($id)]);
    }
   
    public function update(EmpleadoFormRequest $request, $id){
        //dd($request->get('foto'));
        //dd(Input::hasfile('foto'));
        if(Input::hasfile('foto')){
            $file=Input::file('foto');
            $file->move(public_path(),'/fotos/empleados',$file->getClientOriginalName());
            $actualizacionfoto=$file->getClientOriginalName();
            $affectedRows = Empleado::where('idempleado','=',$id)->update(['primernombre' => $request->get('primernombre'),'segundonombre' =>$request->get('segundonombre'),'primerapellido' =>$request->get('primerapellido'),'segundoapellido' =>$request->get('segundoapellido'),'dui' =>$request->get('dui'),'nit' => $request->get('nit'),'isss' => $request->get('isss'),'afp' => $request->get('afp'),'foto' =>$actualizacionfoto]);
                Session::flash('update','El Empleado actualizado correctamente!!!');
                return Redirect::to('admin/empleado');
        }else{
            $affectedRows = Empleado::where('idempleado','=',$id)->update(['primernombre' => $request->get('primernombre'),'segundonombre' =>$request->get('segundonombre'),'primerapellido' =>$request->get('primerapellido'),'segundoapellido' =>$request->get('segundoapellido'),'dui' =>$request->get('dui'),'nit' => $request->get('nit'),'isss' => $request->get('isss'),'afp' => $request->get('afp')]);
                Session::flash('update','El Empleado actualizado correctamente!!!');
                return Redirect::to('admin/empleado');
        }
    }
   
    public function destroy($id){
    	$empleado=Empleado::findOrFail($id);
    	//var_dump($empleado);
    	if($empleado->ESTADO=='1')
    	{
    		$affectedRows = Empleado::where('idempleado','=',$id)->update(['estado' => 0]);
    		return  Redirect::to('admin/empleado');
    	}else{
    		$affectedRows = Empleado::where('idempleado','=',$id)->update(['estado' => 1]);
    		return  Redirect::to('admin/empleado');
    	}
    }
}
