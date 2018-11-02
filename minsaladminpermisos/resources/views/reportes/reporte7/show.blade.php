@extends('layouts.admin')
@section('contenido')

<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
<div id="imprimeme">

   <center><h3>Ministerio de Trabajo y Previsión Social</h3>
   <h3>Departamento de Recursos Humanos</h3>  
   <h2>Reporte de Capacitación por nivel organizacional</h2></center>
   <center>
   <table border="1" class="table table-bordered table-hover">
        <thead>
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
              <th >Niveles Organizacionales</th>
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
<div class="row">

  <div class="span8 offset2">
    <div class="widget widget-nopad">
      <div class="widget-header"> <i class="icon-large icon-paper-clip
        "></i>
        <h3> Exportar A:</h3>
      </div>
      <!-- /widget-header -->
      <div class="widget-content">
        <div class="widget big-stats-container">
          <div class="widget-content">
            <div id="big_stats" class="cf">

              <div class="stat"><a href="{{URL::action('RCapacitacionPorNivelOrganizacionalController@reportepdf',[$qfecha_inicial,$qfecha_final])}}"><i class="icon-large icon-file
                "></i> <span class="value">PDF</span></a>
              </div>
              <!-- .stat -->

              <div class="stat"><a href="{{URL::action('RCapacitacionPorNivelOrganizacionalController@reporteexcel',[$qfecha_inicial,$qfecha_final])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
              </div>
              <!-- .stat -->

              <div class="stat"> <a href="{{ URL::previous() }}"><i class=" icon-chevron-left"></i><span class="value">volver</span></a></div>
              <!-- .stat -->

            </div>
          </div>
            <!-- /widget-content --> 

        </div>
      </div>
    </div>
    <!-- /widget -->
  </div>
  <!-- /span8 -->
</div> <!-- /row -->
@endsection