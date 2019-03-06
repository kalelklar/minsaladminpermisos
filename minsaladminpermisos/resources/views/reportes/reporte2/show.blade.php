@extends('layouts.admin')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
  <title>Reporte de comprobante de pago para el proceso de permiso Sanitarios</title>

</head>
<body>

 
    <header>
   
   <center><div><h4>Ministerio de Salud de El Salvador</h4>
   <h4>Unidad de Permisos Sanitarios</h4></center>
   <br>
   <br>
   </header>
   <table border="1" class="table table-bordered table-hover">
    @for($i=0;$i < count($result); $i++)  
        <thead>
          <tr>
            <th colspan="4">Reporte de comprobante de pago para el proceso de permiso Sanitarios en el area de San Salvador</th>
          </tr>
          <tr>
            <th colspan="2">Fecha Ingreso de Solicitud: {{$result[$i]->fechaingreso}}</th>
            <th >Estado: {{$result[$i]->estado}}  </th>
            <th >Nombre de Empresa:{{$result[$i]->nombreempresa}} </th>
          </tr>
          <tr>
            <th>Direccion:</th>
            <th>{{$result[$i]->direccion}}</th>
            <th>Reprentante Legal: </th>
            <th>{{$result[$i]->representante}}</th>
          </tr>
        </thead>
        <tbody>
                              
        <tr>
            <td>
             Vehiculo: {{$result[$i]->modelo}}
            </td>
            <td>
             Tipo: {{$result[$i]->tipo}}
            </td>
            <td>
             Placa: {{$result[$i]->placa}}
            </td>
            <td>
             Capacidad: {{$result[$i]->capacidad}}
            </td>
        </tr>
        <tr>
            <td colspan="3">
             Total a Pagar:
            </td>
            <td>
             35.87
            </td>
        </tr>
    @endfor
            
        </tbody>
      </table>
                    <div class="row">

                <div class="span8 offset2">
                  <div class="widget widget-nopad">
                    <div class="widget-header"> <i class="icon-large icon-paper-clip
        "></i>
                      <h3> Exportar A:</h3>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                      <div class="widget big-stats-container">
                        <div class="widget-content">
                          <div id="big_stats" class="cf">

                            <div class="stat"><a href="{{URL::action('SolicitudController@reportepdf2',[$idsolicitud])}}"><i class="icon-large icon-file
        "></i> <span class="value">PDF</span></a></div>
                            <!-- .stat -->
                            <div class="stat"> <a href="{{ URL::previous() }}"><i class=" icon-chevron-left"></i> <span class="value">volver</span></a></div>
                       
                          </div>
                        </div>
                        <!-- /widget-content --> 
                        
                      </div>
                    </div>
                  </div>
                  <!-- /widget -->
                </div>
                <!-- /span8 -->
</div> <!-- /row -->
</body>
</html>
@endsection