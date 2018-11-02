<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RdeparticipacionesxTemadeCap</title>

    
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
                    <th colspan="5" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                  	<th>&nbsp;&nbsp;</th>
                    <th colspan="5" align="center"> Departamento de Recurso Humanos </th>
                    <th>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="5" align="center"> Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}} </th>
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
<table always;  class="table table-bordered table-hover">
    <thead>
        <tr>
        <th colspan="7">Reporte de participaciones por Tema de Capacitación</th>
      </tr>
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
</div>
</div>
</div>              
<!-- Fin Contenido-->
</div>
</body>
</html>   