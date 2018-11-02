<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notapromedioxdependencia</title>

   
</head>
<body>
<div class="container-fluid">
<!--Contenido -->
	<div class="col-lg-12">
	    <div class="row-fluid">
<div>
    <header>
           <div id="logo" >
            @if(is_file(public_path().'/logos/mtps_report.jpg'))
            <div class="foto1" >
                <img src="{{ public_path().'/logos/mtps_report.jpg'}}" height="110px" width="220px" class="img-thumbnail" align="left">
            </div>
            @else
            <div class="foto">
                <img src=""  class="img-thumbnail">
            </div>
            @endif

            @if(is_file(public_path().'/logos/escudo.jpg'))
            <div class="foto" >
                <img src="{{ public_path().'/logos/escudo.jpg'}}" height="110px" width="110px" class="img-thumbnail" align="right">
            </div>
            @else
            <div class="foto">
                <img src=""  class="img-thumbnail">
            </div>
            @endif

        </div>

        <center><div class="encabezado" id="encabezado">
            <h4 style="line-height=0">Ministerio de Trabajo y Previsión Social</h4>
            <h4 style="line-height=0">Departamento de Recurso Humanos </h4>
            <br>
            <h3 style="line-height=0">Sistema Evaluación de Desempeño del Personal(SEDP)</h3>

        </div></center>

        
</header>
</div>
<div class="panel-heading">
<br>
<br>		        
<table BORDER=1 WIDTH=100%>
	<caption>Reporte de Nota promedio por  Dependencia (SEDP)</caption>
	<thead>
        <tr><tr>
        <th colspan="5"> Reporte de Nota promedio por  Dependencia (SEDP)
 {{$seccion->nombre_seccion}}</th>
      </tr></tr>
		<tr>
			<th> Dependencia</a></th>
			<th> Evaluados Mujeres</th>
			<th> Evaluados Hombres</th>
			<th> Nota Mujeres</th>
			<th> Nota Hombres</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($resultados as $depe)
		<tr>
			<td>
				{{$depe->seccion}}
			</td>
			<td> {{$depe->cantmujeres}} </td>
			<td> {{$depe->canthombres}} </td>
			<td> {{$depe->prommujeres}}</td>
			<td> {{$depe->promhombres}} </td>
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