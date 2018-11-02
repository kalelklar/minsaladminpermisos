<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CumplimientodeMetaParticipantes</title>

   
</head>
<body>
<div class="container-fluid">
<!--Contenido -->
  <div class="col-lg-12">
      <div class="row-fluid">
<div>
    <header>
        <center><div class="encabezado" id="encabezado">
            <table BORDER=1 WIDTH=100% class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                    <th colspan="5" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                  	<th>&nbsp;&nbsp;</th>
                    <th colspan="5" align="center"> Departamento de Recurso Humanos </th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="5" align="center"> Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}} </th>
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
<table BORDER=1 WIDTH=100% class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th colspan="7"> Reporte de Cumplimiento de Meta: Participantes </th>
                  </tr>
                  <tr>
                    <th colspan="7"> PERIODO: desde {{$inicial}} hasta {{$final}}</th>
                  </tr>
                  <tr>
                    <th> Componente</a></th>
                    <th> N° de Mujeres</th>
                    <th> N° de Hombres</th>
                    <th> N° Total de Personas</th>
                    <th> N° Total de Participaciones</th>
                    <th> Meta Programada</th>
                    <th> Resultado del Periodo(%)</th>
                  </tr>
                </thead>
                <tbody>
                	@php($i=0)
                	@foreach ($result as $r)
                  	<tr>
                  		<td>{{$r->programa}}</td>
	                    <td>{{$r->cantmujeres}}</td>
	                    <td> {{$r->canthombres}} </td>
	                    <td> {{$r->participaciones}} </td>
	                    @php($i+=1)
	                    @if($i===1)
	                    <td rowspan="{{count($result)}}"> {{$resultp[0]->totalparticipaciones}}</td>
	                    <td rowspan="{{count($result)}}"> {{$qmeta}}</td>
	                    <td rowspan="{{count($result)}}"> {{$resultp[0]->porcentaje}} %</td>
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