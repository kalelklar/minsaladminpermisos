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
   <h4>Departamento de Recursos Humanos</h4></center>
   <br>
   <br>
   </header>
   <table border="1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th colspan="4">Reporte de Participantes por Tema</th>
          </tr>
          <tr>
            <th colspan="2">Tema de Capacitación: {{$tema[0]->tema}} </th>
            <th >Horas Duracion: {{$tema[0]->horas_numerico}} </th>
            <th >Fecha: {{$fecha_inicial}}</th>
          </tr>
          <tr>
            <th>NOMBRE DE LA 
DEPENDENCIA</th>
            <th>NR</th>
            <th>NOMBRE COMPLETO</th>
            <th>CARGO FUNCIONAL</th>
          </tr>
        </thead>
        <tbody>
        @for($i=0;$i < count($result); $i++)                        
        <tr>
            <td>
             {{$result[$i]->nombre_seccion}}
            </td>
            <td>
             {{$result[$i]->nr}}
            </td>
            <td>
             {{$result[$i]->nombre}}
            </td>
            <td>
             {{$result[$i]->funcional}}
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

                            <div class="stat"><a href="{{URL::action('RParticipantesPorTemaController@reportepdf',[$id_capacitacion])}}"><i class="icon-large icon-file
        "></i> <span class="value">PDF</span></a></div>
                            <!-- .stat -->
                               <div class="stat"><a href="{{URL::action('RParticipantesPorTemaController@reporteexcel',[$id_capacitacion])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
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