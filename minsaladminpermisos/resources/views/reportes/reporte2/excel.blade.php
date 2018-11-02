<!DOCTYPE html>
<html>
<head>
  <title>Reporte por Dependencia</title>

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
                    <th colspan="6" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="6" align="center"> Departamento de Recurso Humanos </th>
                    <th>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="6" align="center"> Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}} </th>
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
            <th colspan="8">Reporte de Capacitaciones por Dependencia</th>
          </tr>
          <tr>
            <th colspan="8"><b>Periodo:</b> desde {{$fechaInicial}} hasta {{$fechaFinal}}</th>
          </tr>
          <tr>
            <th >Dependencia</th>
            <th >Cargo Funcional</th>
            <th >Componente</th>
            <th >Tema</th>
            <th >Horas</th>
            <th>Cantidad de Mujeres</th>
            <th>Cantidad de Hombres</th>
            <th>Total de Participantes</th>
          </tr>
        </thead>
        <tbody>
        @php($totalhombres=0)
        @php($totalmujeres=0)
        @php($totalhoras=0)
        @php($totalparticipaciones=0)
        @php($filas=0)
        @php($i=0)
        @foreach($result as $res)                        
        <tr>
          @php($i+=1)
          @if($i===1)
          <td>{{$seccion->nombre_seccion}}</td>
          @else
          <td>&nbsp;&nbsp;</td>
          @endif
           <td>
               {{$res->CargoFuncional}}
            <td>
             {{$res->Componente}}
           </td>
           <td>
             {{$res->Tema}}
           </td>
           <td>
             {{$res->horas_numerico}}
             @php($totalhoras+=$res->horas_numerico)
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
             @php($totalparticipaciones+=$res->participaciones)
           </td>
          
         </tr>
         @endforeach
        
         
         <tr>
         <td colspan="4">Total</td>
         <td>{{$totalhoras}}</td>
         <td>{{$totalmujeres}}</td>
         <td>{{$totalhombres}}</td>
         <td>{{$totalparticipaciones}}</td>
         </tr>

    
        </tbody>
      </table>

      
</body>
</html>