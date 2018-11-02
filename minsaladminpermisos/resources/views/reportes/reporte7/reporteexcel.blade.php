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
<table     font-size: 10px border="1" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th colspan="9" align="center">Reporte de Capacitación por nivel organizacional</th>
    </tr>
    <tr>
      <th colspan="9">PERIODO: del {{$fechainicial}}  al {{$fechafinal}}</th>
    </tr>
    <tr>
      <th>COMPONENTES</th>
      <th colspan="2">{{$comp[3]->programa}}</th>
      <th colspan="2">{{$comp[4]->programa}}</th>
      <th colspan="2">{{$comp[5]->programa}}</th>
      <th colspan="2">{{$comp[6]->programa}}</th>
    </tr>
    <tr>
      <th>iveles Organizacionales</th>
      <th>Mujeres</th>
      <th>Hombres</th>
      <th>Mujeres</th>
      <th>Hombres</th>
      <th>Mujeres</th>
      <th>Hombres</th>
      <th>Mujeres</th>
      <th>Hombres</th>
    </tr>
  </thead>
  <tbody>
    
    @for ($i = 0; $i < count($nivel); $i++)
    <tr>
      <td> {{$nivel[$i]->nivel}}</td>
      <!-- resultado 1 -->
      @if(!$result1->has($i))
      <td>0</td>
      @else
      @php($aux=0)
      @for($j = count($result1)-1; $j >= 0; $j--)
      @if(strcmp($nivel[$i]->id_nivel,$result1[$j]->id_nivel)==0)
      @php($aux=$result1[$j]->cantmujeres)
      @endif
      @endfor
      @if($aux==0)
      <td>0</td>
      @else
      <td>{{$aux}}</td>
      @endif
      @endif

      @if(!$result1->has($i))
      <td>0</td>
      @else
      @php($aux=0)
      @for($j = count($result1)-1; $j >= 0; $j--)
      @if(strcmp($nivel[$i]->id_nivel,$result1[$j]->id_nivel)==0)
      @php($aux=$result1[$j]->canthombres)
      @endif
      @endfor
      @if($aux==0)
      <td>0</td>
      @else
      <td>{{$aux}}</td>
      @endif
      @endif
      <!-- fin resultado 1 -->

      <!-- resultado 2 -->
      @if(!$result2->has($i))
      <td>0</td>
      @else
      @php($aux=0)
      @for($j = count($result2)-1; $j >= 0; $j--)
      @if(strcmp($nivel[$i]->id_nivel,$result2[$j]->id_nivel)==0)
      @php($aux=$result2[$j]->cantmujeres)
      @endif
      @endfor
      @if($aux==0)
      <td>0</td>
      @else
      <td>{{$aux}}</td>
      @endif
      @endif

      @if(!$result2->has($i))
      <td>0</td>
      @else
      @php($aux=0)
      @for($j = count($result2)-1; $j >= 0; $j--)
      @if(strcmp($nivel[$i]->id_nivel,$result2[$j]->id_nivel)==0)
      @php($aux=$result2[$j]->canthombres)
      @endif
      @endfor
      @if($aux==0)
      <td>0</td>
      @else
      <td>{{$aux}}</td>
      @endif
      @endif
      <!-- fin resultado 2 -->

      <!-- resultado 3 -->
      @if(!$result3->has($i))
      <td>0</td>
      @else
      @php($aux=0)
      @for($j = count($result3)-1; $j >= 0; $j--)
      @if(strcmp($nivel[$i]->id_nivel,$result3[$j]->id_nivel)==0)
      @php($aux=$result3[$j]->cantmujeres)
      @endif
      @endfor
      @if($aux==0)
      <td>0</td>
      @else
      <td>{{$aux}}</td>
      @endif
      @endif

      @if(!$result3->has($i))
      <td>0</td>
      @else
      @php($aux=0)
      @for($j = count($result3)-1; $j >= 0; $j--)
      @if(strcmp($nivel[$i]->id_nivel,$result3[$j]->id_nivel)==0)
      @php($aux=$result3[$j]->canthombres)
      @endif
      @endfor
      @if($aux==0)
      <td>0</td>
      @else
      <td>{{$aux}}</td>
      @endif
      @endif
      <!-- fin resultado 3 -->

      <!-- resultado 4 -->
      @if(!$result4->has($i))
      <td>0</td>
      @else
      @php($aux=0)
      @for($j = count($result4)-1; $j >= 0; $j--)
      @if(strcmp($nivel[$i]->id_nivel,$result4[$j]->id_nivel)==0)
      @php($aux=$result4[$j]->cantmujeres)
      @endif
      @endfor
      @if($aux==0)
      <td>0</td>
      @else
      <td>{{$aux}}</td>
      @endif
      @endif

      @if(!$result4->has($i))
      <td>0</td>
      @else
      @php($aux=0)
      @for($j = count($result4)-1; $j >= 0; $j--)
      @if(strcmp($nivel[$i]->id_nivel,$result4[$j]->id_nivel)==0)
      @php($aux=$result4[$j]->canthombres)
      @endif
      @endfor
      @if($aux==0)
      <td>0</td>
      @else
      <td>{{$aux}}</td>
      @endif
      @endif
      <!-- fin resultado 4 -->
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