@extends('layouts.admin')
@section('contenido')

<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
<div id="imprimeme">

   <center><h3>Ministerio de Trabajo y Previsión Social</h3>
   <h3>Departamento de Recursos Humanos</h3>  
   <h2>Reporte de participaciones por Tema de Capacitación</h2>
   <center>
   <table border="1" class="table table-bordered table-hover">
        <thead>
            <tr>
              <th colspan="7">PERIODO: del {{$fechainicial}}  al {{$fechafinal}}</th>
            </tr>
            <tr>
              <th colspan="7">Componente: {{$componente->programa}}</th>
            </tr>
            <tr>
              <th>Tema de Capacitación</th>
              <th>Dirigido a</th>
              <th>Impartido por</th>
              <th>N° Horas recibidas</th>
              <th>N° Mujeres</th>
              <th>N° Hombres</th>
              <th>N° Participaciones</th>
            </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < count($result1); $i++)
        <tr>
          <td>{{$result1[$i]->tema}}</td>
          <td>{{$result1[$i]->nombre_seccion}}</td>
          <td>{{$result1[$i]->impartido_por}}</td>
          <td>{{$result1[$i]->horas_numerico}}</td>
          <td>{{$result1[$i]->cantmujeres}}</td>
          <td>{{$result1[$i]->canthombres}}</td>
          <td>{{$result1[$i]->participaciones}}</td>
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

              <div class="stat"><a href="{{URL::action('RParticipacionesPorTemaDeCapacitacionController@reportepdf',[$qfecha_inicial,$qfecha_final,$qid_programa])}}"><i class="icon-large icon-file
                "></i> <span class="value">PDF</span></a>
              </div>
              <!-- .stat -->

              <div class="stat"><a href="{{URL::action('RParticipacionesPorTemaDeCapacitacionController@reporteexcel',[$qfecha_inicial,$qfecha_final,$qid_programa])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
              </div>
              <!-- .stat -->

              <div class="stat"> <a href="{{ URL::previous() }}"><i class=" icon-chevron-left"></i> <span class="value">volver</span></a></div>
              <!-- .stat -->

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

</div>
@endsection