<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HorasdeCapporCompporPersona</title>

    
</head>
<body>
<div class="container-fluid">
<!--Contenido -->
  <div class="col-lg-12">
      <div class="row-fluid">
<div>
    <header>

        <center><div class="encabezado" id="encabezado">
        
            <table     font-size: 8px  class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                    <th colspan="2" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                  	<th>&nbsp;&nbsp;</th>
                    <th colspan="2" align="center"> Departamento de Recurso Humanos </th>
                    <th>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="2" align="center"> Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}} </th>
                    <th>&nbsp;&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
			</table>
        </div></center>

        
</header>
</div>
<div class="panel-heading">
<br>
<br>            
<table     font-size: 8px border="1" class="table table-bordered table-hover">
        <thead>
        	<tr>
              <th colspan="4">Reporte de Horas de Capacitación por Componente por Persona<</th>
            </tr>
            <tr>
              <th colspan="4">PERIODO: desde {{$fechainicial}}  hasta {{$fechafinal}}</th>
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
          @else
          <td>&nbsp;&nbsp;</td>
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
          @else
          <td>&nbsp;&nbsp;</td>
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
          @else
          <td>&nbsp;&nbsp;</td>
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
          @else
          <td>&nbsp;&nbsp;</td>
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
</div>
</div>              
<!-- Fin Contenido-->
</div>
</body>
</html>   