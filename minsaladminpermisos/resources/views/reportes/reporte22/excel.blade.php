<!DOCTYPE html>
<html>
<head>
  <title>RParticipacionesxTema</title>

</head>
<body>
<div>
    <header>
    <center>
    <div class="encabezado" id="encabezado">
        
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
      </div>
      </center>       
   </header>
 <br>
<br>
<table class="table table-bordered table-hover">
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
</body>
</html>