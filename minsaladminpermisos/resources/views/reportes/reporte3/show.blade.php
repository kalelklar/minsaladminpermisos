@extends('layouts.admin')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<title>Memoria de Labores</title>
</head>
<body>

   <header>
       
   <center><div><h4>Ministerio de Trabajo y Previsión Social</h4>
   <h4>Departamento de Recursos Humanos</h4>  
   <h3>Memoria de Labores</h3><h4><b>Periodo:</b>
        Desde: {{$fechaInicial}}
        Hasta:{{$fechaFinal}}</h4></div></center>
   
  
   </header>
   <table border="1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th >Componente</th>
            <th >Mujeres por Componente</th>
            <th >Hombres por Componente</th>
            <th>Total de participantes por Componente</th>
            <th>Total de Horas Recibidas por Componente</th>
          </tr>
        </thead>
        <tbody>
          @php($totalmujeres=0)
          @php($totalhombres=0)
          @php($totalparticipantes=0)
          @php($totalhoras=0)
         @foreach($result as $res)
         <tr>
           <td>
             {{$res->programa}}
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
             @php($totalparticipantes+=$res->participaciones)
           </td>
             <td>
             {{$res->TotalHorasInvertidas}}
             @php($totalhoras+=$res->TotalHorasInvertidas)
           </td>
          
         </tr>
         @endforeach
         <tr>
           <td>Total</td>
            <td>{{$totalmujeres}}</td>
             <td>{{$totalhombres}}</td>
              <td>{{$totalparticipantes}}</td>
               <td>{{$totalhoras}}</td>
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
                            
                                <div class="stat"><a href="{{URL::action('reporte3Controller@reporteexcel',[$fechaInicial,$fechaFinal])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
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