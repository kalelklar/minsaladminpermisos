<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NotapromedioxDependencia</title>

   
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
                    <th colspan="2" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="2" align="center"> Departamento de Recurso Humanos </th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="4" align="center"> Sistema Evaluación de Desempeño del Personal(SEDP)</th>
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
<caption>Reporte de Notas por Persona por Dependencia (SEDP)
 {{$seccion->nombre_seccion}}
</caption>
    <thead>
      <tr>
        <th colspan="4"> Reporte de Notas por Persona por Dependencia (SEDP)
 {{$seccion->nombre_seccion}}</th>
      </tr>
      <tr>
        <th> NR</a></th>
        <th> Nombre</th>
        <th> Cargo Funcional</th>
        <th> Nota por persona</th>
    </tr>
</thead>
<tbody>
    @foreach ($detalle as $det)
    <tr>
        <td> {{$det->nr}} </td>
        <td> {{$det->nombre}} </td>
        <td> {{$det->funcional}}</td>
        <td> {{$det->nota}} </td>
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