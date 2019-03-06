<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/info', 'HomeController@info');
Route::group(['middleware' =>  ['auth','admin']], function () {
      Route::resource('usuarios', 'HomeController'); 
      Route::get('usuarios/{id}','HomeController@edituser');
      Route::get('usuarios/{id}','HomeController@updateuser');
});



Route::group(['middleware' => ['auth']], function () {
      Route::resource('admin/empresa','EmpresaController');
});

Route::group(['middleware' => ['auth']], function () {
      Route::resource('admin/solicitud','SolicitudController');
      //Route::post('ReportedeCapacitacionporDependencia', 'SolicitudController@show');//aqui se llama al controlador pdf
      Route::get('pdf1/{idsolicitud}','SolicitudController@reportepdf');
      Route::get('admin/{idsolicitud}','SolicitudController@show2');
      Route::get('pdf2/{idsolicitud}','SolicitudController@reportepdf2');
});



Route::group(['middleware' =>  ['auth','tactico']], function () {
      Route::get('reporte3/parametros', 'reporte3Controller@index');//aqui se llama al controlador pdf 
      Route::post('ReportedePermisosSanitariosSS', 'reporte3Controller@show');//aqui se llama al controlador pdf
      Route::get('pdf3/{fechainicial}/{fechafinal}','reporte3Controller@reportepdf');
});

Route::group(['middleware' =>  ['auth','estrategico']], function () {
      Route::get('reporte1/parametros', 'reporte1Controller@index');//aqui se llama al controlador pdf 
      Route::post('reporteDeTemasClasificadosPorComponente', 'reporte1Controller@show');//aqui se llama al controlador pdf
      Route::get('pdf1/{fechaInicial}/{fechaFinal}','reporte1Controller@reportepdf');     
    
});
Route::group(['middleware' =>  ['auth','operativo']], function () {
      Route::get('reporte2/parametros', 'reporte2Controller@index');//aqui se llama al controlador pdf 
      Route::post('ReportedeCapacitacionporDependencia', 'reporte2Controller@show');//aqui se llama al controlador pdf
      Route::get('pdf2/{fechaInicial}/{fechaFinal}/{id_seccion}','reporte2Controller@reportepdf');
});



/*
Route::group(['middleware' =>  ['auth','admin']], function () {
      Route::get('pdf/{id}', 'PdfController@index');//aqui se llama al controlador pdf 
      Route::get('etl','etlController@index');
});


*/
