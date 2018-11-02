<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Memoria de Labores</title>

    
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
                    <th colspan="3" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="3" align="center"> Departamento de Recurso Humanos </th>
                    <th>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="3" align="center"> Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}} </th>
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
   <table  class="table table-bordered table-hover">
        <thead>
          <tr>
            <th colspan="6">Reporte de Memoria de Labores</th>
          </tr>
          <tr>
            <th colspan="6">PERIODO: desde {{$fechaInicial}} hasta {{$fechaFinal}}</th>
          </tr>
          <tr>
            <th >Componente</th>
            <th >Mujeres por Componente</th>
            <th >Hombres por Componente</th>
            <th>Total de participantes por Componente</th>
            <th>Total de Horas Recibidas por Componente</th>
          </tr>
        </thead>
        <tbody>
          @php($totalmujeres=0)
          @php($totalhombres=0)
          @php($totalparticipantes=0)
          @php($totalhoras=0)
         @foreach($result as $res)
         <tr>
           <td>
             {{$res->programa}}
           </td>
          
            <td>
             {{$res->cantmujeres}}
             @php($totalmujeres+=$res->cantmujeres)
           </td>
            <td>
             {{$res->canthombres}}
             @php($totalhombres+=$res->canthombres)
           </td>
            <td>
             {{$res->participaciones}}
             @php($totalparticipantes+=$res->participaciones)
           </td>
             <td>
             {{$res->TotalHorasInvertidas}}
             @php($totalhoras+=$res->TotalHorasInvertidas)
           </td>
          
         </tr>
         @endforeach
         <tr>
           <td>Total</td>
            <td>{{$totalmujeres}}</td>
             <td>{{$totalhombres}}</td>
              <td>{{$totalparticipantes}}</td>
               <td>{{$totalhoras}}</td>
         </tr>
        </tbody>
        <tfoot>
        
        </tfoot>
      </table>
</body>
</html>