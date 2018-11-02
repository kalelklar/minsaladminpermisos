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
        <center><div class="encabezado" id="encabezado">
            
            <table BORDER=1 WIDTH=100% class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                    <th colspan="3" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                  	<th>&nbsp;&nbsp;</th>
                    <th colspan="3" align="center"> Departamento de Recurso Humanos </th>
                  </tr>
                  <tr>
                  	<th>&nbsp;&nbsp;</th>
                    <th colspan="3" align="center"> Sistema Evaluación de Desempeño del Personal(SEDP) </th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="3" align="center">Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}}</th>
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
<table BORDER=1 WIDTH=100%>
	<thead>
        <tr><th colspan="5" align="center"> Reporte de Nota promedio por  Dependencia (SEDP): 
     {{$seccion->nombre_seccion}}</th>
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