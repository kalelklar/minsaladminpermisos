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
   <h2>Reporte de Horas de Capacitación por Componente por Persona</h2></center>
   <center>
   <table border="1" class="table table-bordered table-hover">
        <thead>
            <tr>
              <th colspan="4">PERIODO: del {{$fechainicial}}  al {{$fechafinal}}</th>
            </tr>
            <tr>
              <th>Nombre de la persona Empleada</th>
              <th>Número de registro de la persona empleada</th>
              <th>Cargo Funcional</th>
              <th>Dependencia</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$empleado[0]->nombre}} </td>
            <td>{{$empleado[0]->nr}} </td>
            <td>{{$empleado[0]->funcional}}</td>
            <td>{{$empleado[0]->nombre_seccion}}</td>
        </tr>
        <tr>
        	<th>Componente</th>
          <th>Temas por componente</th>
          <th>Horas Capacitadas por tema</th>
        	<th>Horas Capacitadas por componente</th>
        </tr>
        @php($i1=0)
        @foreach($result1 as $res1)                        
        <tr>
          @php($i1+=1)
          @if($i1===1)
          <td rowspan ="{{count($result1)}}">{{$programas[3]->programa}}</td>
          @endif
          <td>{{$res1->tema}}</td>
          <td>{{$res1->horasportema}}</td>
          @if($i1===1)
          <td rowspan ="{{count($result1)}}">{{$hp1[0]->horasporcomponente}}</td>
          @endif
        </tr>
        @endforeach

        @php($i2=0)
        @foreach($result2 as $res2)                        
        <tr>
          @php($i2+=1)
          @if($i2===1)
          <td rowspan ="{{count($result2)}}">{{$programas[4]->programa}}</td>
          @endif
          <td>{{$res2->tema}}</td>
          <td>{{$res2->horasportema}}</td>
          @if($i2===1)
          <td rowspan ="{{count($result2)}}">{{$hp2[0]->horasporcomponente}}</td>
          @endif
        </tr>
        @endforeach

        @php($i3=0)
        @foreach($result3 as $res3)                        
        <tr>
          @php($i3+=1)
          @if($i3===1)
          <td rowspan ="{{count($result3)}}">{{$programas[5]->programa}}</td>
          @endif
          <td>{{$res3->tema}}</td>
          <td>{{$res3->horasportema}}</td>
          @if($i3===1)
          <td rowspan ="{{count($result3)}}">{{$hp3[0]->horasporcomponente}}</td>
          @endif
        </tr>
        @endforeach

        @php($i4=0)
        @foreach($result4 as $res4)                        
        <tr>
          @php($i4+=1)
          @if($i4===1)
          <td rowspan ="{{count($result4)}}">{{$programas[6]->programa}}</td>
          @endif
          <td>{{$res4->tema}}</td>
          <td>{{$res4->horasportema}}</td>
          @if($i4===1)
          <td rowspan ="{{count($result4)}}">{{$hp4[0]->horasporcomponente}}</td>
          @endif
        </tr>
        @endforeach
        </tbody>
     
      </table>

</div>
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

              <div class="stat"><a href="{{URL::action('reporte6Controller@reportepdf',[$qfecha_inicial,$qfecha_final,$qnr])}}"><i class="icon-large icon-file
                "></i> <span class="value">PDF</span></a>
              </div>
              <!-- .stat -->

              <div class="stat"><a href="{{URL::action('reporte6Controller@reporteexcel',[$qfecha_inicial,$qfecha_final,$qnr])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
              </div>
              <!-- .stat -->

              <div class="stat"> <a href="{{ URL::previous() }}"><i class=" icon-chevron-left"></i><span class="value">volver</span></a></div>
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
@endsection