@extends('layouts.admin')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
  <title>Reporte de Capacitaciones por Dependencia</title>

</head>
<body>

 
    <header>
   
   <center><div><h4>Ministerio de Trabajo y Previsión Social</h4>
   <h4>Departamento de Recursos Humanos</h4>  
   <h3>Reporte de Capacitaciones por Dependencia</h3>
   <h4><b>Periodo:</b>
        Desde: {{$fechaInicial}}
        Hasta:{{$fechaFinal}}</h4></div></center>
   
  
   </header>
   <table border="1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th >Dependencia</th>
            <th >Cargo Funcional</th>
            <th >Componente</th>
            <th >Tema</th>
            <th >Horas</th>
            <th>Cantidad de Mujeres</th>
            <th>Cantidad de Hombres</th>
            <th>Total de Participantes</th>
          </tr>
        </thead>
        <tbody>
        @php($totalhombres=0)
        @php($totalmujeres=0)
        @php($totalhoras=0)
        @php($totalparticipaciones=0)
        @php($filas=0)
        @php($i=0)
        @foreach($result as $res)                        
        <tr>
          @php($i+=1)
          @if($i===1)
          <td rowspan ="{{count($result)}}">{{$seccion->nombre_seccion}}</td>
          @endif
           <td>
               {{$res->CargoFuncional}}
            <td>
             {{$res->Componente}}
           </td>
           <td>
             {{$res->Tema}}
           </td>
           <td>
             {{$res->horas_numerico}}
             @php($totalhoras+=$res->horas_numerico)
           </td>
            <td>
             {{$res->cantmujeres}}
             @php($totalmujeres+=$res->cantmujeres)
           </td>
            <td>
             {{$res->canthombres}}
             @php($totalhombres+=$res->canthombres)
           </td>
           <td>
             {{$res->participaciones}}
             @php($totalparticipaciones+=$res->participaciones)
           </td>
          
         </tr>
         @endforeach
        
         
         <tr>
         <td colspan="4">Total</td>
         <td>{{$totalhoras}}</td>
         <td>{{$totalmujeres}}</td>
         <td>{{$totalhombres}}</td>
         <td>{{$totalparticipaciones}}</td>
         </tr>

    
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

                            <div class="stat"><a href="{{URL::action('reporte2Controller@reportepdf',[$fechaInicial,$fechaFinal,$id_seccion])}}"><i class="icon-large icon-file
        "></i> <span class="value">PDF</span></a></div>
                            <!-- .stat -->
                               <div class="stat"><a href="{{URL::action('reporte2Controller@reporteexcel',[$fechaInicial,$fechaFinal,$id_seccion])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
                          </div>
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