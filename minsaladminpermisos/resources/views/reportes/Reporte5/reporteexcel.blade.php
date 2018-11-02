<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REstadísticodeHoras</title>

    
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
                    <th colspan="7" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                  	<th>&nbsp;&nbsp;</th>
                    <th colspan="7" align="center"> Departamento de Recurso Humanos </th>
                    <th>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="7" align="center"> Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}} </th>
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
<table   page-break-after: always;  class="table table-striped table-bordered">

  <thead>
    <tr>
      <th colspan="9">Reporte Estadístico de Horas </th>
    </tr>
    <tr>
      <th colspan="9">PERIODO: desde {{$fechaInicial}}  hasta {{$fechaFinal}}</th>
    </tr>
    <tr>
      <th rowspan="3"><p>Criterios</p></th>
      <Th  align="center" Colspan="8"  >Componente</TD>
      </tr>
      <tr>
      <th>&nbsp;&nbsp;</th>
        <th colspan="2" >{{$programas[3]->programa}}</th>
        <th colspan="2" >{{$programas[4]->programa}}</th>
        <th colspan="2" >{{$programas[5]->programa}}</th>
        <th colspan="2" >{{$programas[6]->programa}}</th>

      </tr>
      <tr>
        <th>&nbsp;&nbsp;</th>
        <th>Nombre del Tema</th>
        <th>N° de Horas</th>
        <th>Nombre del Tema</th>
        <th>N° de Horas</th>
        <th>Nombre del Tema</th>
        <th>N° de Horas</th>
        <th>Nombre del Tema</th>
        <th>N° de Horas</th>

      </tr>
    </thead>
          <tbody>

            <TR><TD>Tema con mayor cantidad de horas recibidas</TD>
            @if(count($result1)===0)
                    <td><p>No hay registros</p></td>
                    <td>0</td>
                  @else
                    @php($HorasMayor=0)
              @php($TemaMayor='')
              @foreach($result1 as $res1)
              @if($res1->horasPorTema>=$HorasMayor)
              @php($TemaMayor=$res1->tema)

              @php($HorasMayor=$res1->horasPorTema)

              @endif
              @endforeach

              <TD>
                {{$TemaMayor}}
              </TD>
              <TD>
                {{$HorasMayor}}
              </TD>
                  @endif
            

            @if(count($result2)===0)
                    <td><p>No hay registros</p></td>
                    <td>0</td>
                  @else
                    @php($HorasMayor=0)
              @php($TemaMayor='')
              @foreach($result2 as $res2)
              @if($res2->horasPorTema>=$HorasMayor)
              @php($TemaMayor=$res2->tema)
              @php($HorasMayor=$res2->horasPorTema)

              @endif
              @endforeach

              <TD>
                {{$TemaMayor}}
              </TD>
              <TD>
                {{$HorasMayor}}
              </TD>
                  @endif

                  @if(count($result3)===0)
                    <td><p>No hay registros</p></td>
                    <td>0</td>
                  @else
                    @php($HorasMayor=0)
              @php($TemaMayor='')
              @foreach($result3 as $res3)
              @if($res3->horasPorTema>=$HorasMayor)
              @php($TemaMayor=$res3->tema)
              @php($HorasMayor=$res3->horasPorTema)

              @endif
              @endforeach

              <TD>
                {{$TemaMayor}}
              </TD>
              <TD>
                {{$HorasMayor}}
              </TD>
                  @endif

                  @if(count($result4)===0)
                    <td><p>No hay registros</p></td>
                    <td>0</td>
                  @else
                    @php($HorasMayor=0)
              @php($TemaMayor='')
              @foreach($result4 as $res4)
              @if($res4->horasPorTema>=$HorasMayor)
              @php($TemaMayor=$res4->tema)
              @php($HorasMayor=$res4->horasPorTema)

              @endif
              @endforeach

              <TD>
                {{$TemaMayor}}
              </TD>
              <TD>
                {{$HorasMayor}}
              </TD>
                  @endif

            </TR>
            <TR><TD>Tema con menor cantidad de horas recibidas</TD>
            @if(count($result1)===0)
                    <td><p>No hay registros</p></td>
                    <td>0</td>
                  @else
                    @php($HorasMenor=100000)
              @php($TemaMenor='')
              @foreach($result1 as $res1) 
              @if ($res1->horasPorTema<$HorasMenor) 
              @php($TemaMenor=$res1->tema)
              @php($HorasMenor=$res1->horasPorTema)
              @endif
              @endforeach

              <TD>
                {{$TemaMenor}}
              </TD>
              <TD>
                {{$HorasMenor}}
              </TD>
                  @endif

                  @if(count($result2)===0)
                    <td><p>No hay registros</p></td>
                    <td>0</td>
                  @else
                    @php($HorasMenor=100000)
              @php($TemaMenor='')
              @foreach($result2 as $res2) 
              @if ($res2->horasPorTema<$HorasMenor) 
              @php($TemaMenor=$res2->tema)
              @php($HorasMenor=$res2->horasPorTema)
              @endif
              @endforeach

              <TD>
                {{$TemaMenor}}
              </TD>
              <TD>
                {{$HorasMenor}}
              </TD>

                  @endif

                  @if(count($result3)===0)
                    <td><p>No hay registros</p></td>
                    <td>0</td>
                  @else
                    @php($HorasMenor=100000)
              @php($TemaMenor='')
              @foreach($result3 as $res3) 
              @if ($res3->horasPorTema<$HorasMenor) 
              @php($TemaMenor=$res3->tema)
              @php($HorasMenor=$res3->horasPorTema)
              @endif
              @endforeach

              <TD>
                {{$TemaMenor}}
              </TD>
              <TD>
                {{$HorasMenor}}
              </TD>

                  @endif

                  @if(count($result4)===0)
                    <td><p>No hay registros</p></td>
                    <td>0</td>
                  @else
                    @php($HorasMenor=100000)
              @php($TemaMenor='')
              @foreach($result4 as $res4) 
              @if ($res4->horasPorTema<$HorasMenor) 
              @php($TemaMenor=$res4->tema)
              @php($HorasMenor=$res4->horasPorTema)
              @endif
              @endforeach
              <TD>
                {{$TemaMenor}}
              </TD>
              <TD>
                {{$HorasMenor}}
              </TD>

                  @endif

            </TR>
          </tbody>

  </TABLE>

</div>
</div>
</div>              
<!-- Fin Contenido-->
</div>
</body>
</html>   