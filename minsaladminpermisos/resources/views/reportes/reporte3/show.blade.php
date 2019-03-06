@extends('layouts.admin')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<title>Resumen de los Vehiculos que tienen permiso en el en el area de San Salvador</title>
</head>
<body>

   <header>
       
   <center><div><h4>Ministerio de Salud de El Salvador</h4>
   <h4>Unidad de Permisos Sanitarios</h4>  
   <h3>Resumen de los Vehiculos que tienen permisos en el area de San Salvador</h3><h4><b>Periodo:</b>
        Desde: {{$fechaInicial}}
        Hasta:{{$fechaFinal}}</h4></div></center>
   
  
   </header>
   <table border="1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th >Fecha Ingreso de la Solicitud</th>
            <th >Vehiculo</th>
            <th>Placa</th>
            <th >Empresa</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          @php($total=0)

         @foreach($result as $res)
         @php($total=$total+1)
         <tr>
           <td>
             {{$res->fechaingreso}}
           </td>
          
            <td>
             {{$res->modelo}}

           </td>
            <td>
             {{$res->placa}}

           </td>
            <td>
             {{$res->nombreempresa}}

           </td>
             <td>
             {{$res->estado}}

           </td>
          
         </tr>
         @endforeach
         <tr>
           <td colspan="4">Total de Vehiculos</td>
           <td>{{$total}}</td>
         </tr>
        </tbody>
        <tfoot>
        
        </tfoot>
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

                            <div class="stat"><a href="{{URL::action('reporte3Controller@reportepdf',[$fechaInicial,$fechaFinal])}}"><i class="icon-large icon-file
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