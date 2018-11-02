@extends('layouts.admin')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<title>Temas Clasificados Por Componente</title>
</head>
<body>

   <header>
    
   <center><div><h4>Ministerio de Trabajo y Previsión Social</h4>
   <h4>Departamento de Recursos Humanos</h4>  
   <h3>Temas Clasificados por Componentes</h3>
 <h4><b>Periodo:</b>
        Desde: {{$fechainicial}}
        Hasta:{{$fechafinal}}</h4>
   </div></center>
   
  
   </header>
   <table border="1" class="table table-bordered table-hover">
        <thead>
       
          <tr>
            <th >Componente</th>
            <th >Temas</th>
            <th >Duracion(horas)</th>
            <th>Cantidad de Mujeres</th>
            <th>Cantidad de Hombres</th>
            <th>Total de participantes</th>
          </tr>
        </thead>
        <tbody>
        <!--total-->
        @php($totaltemas=0)
        @php($totalhoras=0)
        @php($totalmujeres=0)
        @php($totalhombres=0)
        @php($totalparticipaciones=0)
        <!--total Fin-->
        <!--Subtotal result1-->
        @php($subtotaltemas=0)
        @php($subtotalhoras=0)
        @php($subtotalmujeres=0)
        @php($subtotalhombres=0)
        @php($subtotalparticipaciones=0)
        @php($i=0)
        @foreach($result1 as $res1)                        
        <tr>
          @php($i+=1)
          @if($i===1)
          <td rowspan ="{{count($result1)}}">{{$programas[3]->programa}}</td>
          @endif
          <td>{{$res1->tema}}</td>
          <td>{{$res1->horas_numerico}}@php($subtotalhoras+=$res1->horas_numerico)</td>
          <td>{{$res1->cantmujeres}}@php($subtotalmujeres+=$res1->cantmujeres)</td>
          <td>{{$res1->canthombres}}@php($subtotalhombres+=$res1->canthombres)
          </td>
          <td>{{$res1->participaciones}}
              @php($subtotalparticipaciones+=$res1->participaciones)
          </td>
        </tr>
        @endforeach
        <tr>
          <td>SubTotal {{$programas[3]->programa}} </td>
          <td>{{count($result1)}}@php($totaltemas+=count($result1))</td>
          <td>{{$subtotalhoras}}@php($totalhoras+=$subtotalhoras)</td>
          <td>{{$subtotalmujeres}}@php($totalmujeres+=$subtotalmujeres)</td>
          <td>{{$subtotalhombres}}@php($totalhombres+=$subtotalhombres)</td>
          <td>{{$subtotalparticipaciones}}@php($totalparticipaciones+=$subtotalparticipaciones)</td>
        </tr>
        <!--subtotal result1 Fin-->
        <!--Subtotal result2-->
        @php($subtotaltemas=0)
        @php($subtotalhoras=0)
        @php($subtotalmujeres=0)
        @php($subtotalhombres=0)
        @php($subtotalparticipaciones=0)
        @php($i=0)
        @foreach($result2 as $res2)                        
        <tr>
          @php($i+=1)
          @if($i===1)
          <td rowspan ="{{count($result2)}}">{{$programas[4]->programa}}</td>
          @endif
          <td>{{$res2->tema}}</td>
          <td>{{$res2->horas_numerico}}@php($subtotalhoras+=$res2->horas_numerico)</td>
          <td>{{$res2->cantmujeres}}@php($subtotalmujeres+=$res2->cantmujeres)</td>
          <td>{{$res2->canthombres}}@php($subtotalhombres+=$res2->canthombres)
          </td>
          <td>{{$res2->participaciones}}
              @php($subtotalparticipaciones+=$res2->participaciones)
          </td>
        </tr>
        @endforeach
        <tr>
          <td>SubTotal {{$programas[4]->programa}} </td>
          <td>{{count($result2)}}@php($totaltemas+=count($result2))</td>
          <td>{{$subtotalhoras}}@php($totalhoras+=$subtotalhoras)</td>
          <td>{{$subtotalmujeres}}@php($totalmujeres+=$subtotalmujeres)</td>
          <td>{{$subtotalhombres}}@php($totalhombres+=$subtotalhombres)</td>
          <td>{{$subtotalparticipaciones}}@php($totalparticipaciones+=$subtotalparticipaciones)</td>
        </tr>
        <!--subtotal result2 Fin-->
        <!--Subtotal result3-->
        @php($subtotaltemas=0)
        @php($subtotalhoras=0)
        @php($subtotalmujeres=0)
        @php($subtotalhombres=0)
        @php($subtotalparticipaciones=0)
        @php($i=0)
        @foreach($result3 as $res3)                        
        <tr>
          @php($i+=1)
          @if($i===1)
          <td rowspan ="{{count($result3)}}">{{$programas[5]->programa}}</td>
          @endif
          <td>{{$res3->tema}}</td>
          <td>{{$res3->horas_numerico}}@php($subtotalhoras+=$res3->horas_numerico)</td>
          <td>{{$res3->cantmujeres}}@php($subtotalmujeres+=$res3->cantmujeres)</td>
          <td>{{$res3->canthombres}}@php($subtotalhombres+=$res3->canthombres)
          </td>
          <td>{{$res3->participaciones}}
              @php($subtotalparticipaciones+=$res3->participaciones)
          </td>
        </tr>
        @endforeach
        <tr>
          <td>SubTotal {{$programas[5]->programa}} </td>
          <td>{{count($result3)}}@php($totaltemas+=count($result3))</td>
          <td>{{$subtotalhoras}}@php($totalhoras+=$subtotalhoras)</td>
          <td>{{$subtotalmujeres}}@php($totalmujeres+=$subtotalmujeres)</td>
          <td>{{$subtotalhombres}}@php($totalhombres+=$subtotalhombres)</td>
          <td>{{$subtotalparticipaciones}}@php($totalparticipaciones+=$subtotalparticipaciones)</td>
        </tr>
        <!--subtotal result3 Fin-->
        <!--Subtotal result4-->
        @php($subtotaltemas=0)
        @php($subtotalhoras=0)
        @php($subtotalmujeres=0)
        @php($subtotalhombres=0)
        @php($subtotalparticipaciones=0)
        @php($i=0)
        @foreach($result4 as $res4)                        
        <tr>
          @php($i+=1)
          @if($i===1)
          <td rowspan ="{{count($result4)}}">{{$programas[6]->programa}}</td>
          @endif
          <td>{{$res4->tema}}</td>
          <td>{{$res4->horas_numerico}}@php($subtotalhoras+=$res4->horas_numerico)</td>
          <td>{{$res4->cantmujeres}}@php($subtotalmujeres+=$res4->cantmujeres)</td>
          <td>{{$res4->canthombres}}@php($subtotalhombres+=$res4->canthombres)
          </td>
          <td>{{$res4->participaciones}}
              @php($subtotalparticipaciones+=$res4->participaciones)
          </td>
        </tr>
        @endforeach
        <tr>
          <td>SubTotal {{$programas[6]->programa}} </td>
          <td>{{count($result4)}}@php($totaltemas+=count($result4))</td>
          <td>{{$subtotalhoras}}@php($totalhoras+=$subtotalhoras)</td>
          <td>{{$subtotalmujeres}}@php($totalmujeres+=$subtotalmujeres)</td>
          <td>{{$subtotalhombres}}@php($totalhombres+=$subtotalhombres)</td>
          <td>{{$subtotalparticipaciones}}@php($totalparticipaciones+=$subtotalparticipaciones)</td>
        </tr>
        <!--subtotal result3 Fin-->
        <tr>
          <td>Total</td>
          <td>{{$totaltemas}}</td>
          <td>{{$totalhoras}}</td>
          <td>{{$totalmujeres}}</td>
          <td>{{$totalhombres}}</td>
          <td>{{$totalparticipaciones}}</td>
        </tr>
        </tbody>
      </table>

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

                            <div class="stat"><a href="{{URL::action('reporte1Controller@reportepdf',[$qfecha_inicial,$qfecha_final])}}"><i class="icon-large icon-file
        "></i> <span class="value">PDF</span></a></div>
                            <!-- .stat -->
                               <div class="stat"><a href="{{URL::action('reporte1Controller@reporteexcel',[$qfecha_inicial,$qfecha_final])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
                          </div>
                        
                            <!-- .stat -->
<div class="stat"> <a href="{{ URL::previous() }}"><i class=" icon-chevron-left"></i> <span class="value">volver</span></a></div>
                         
                        </div>
                        <!-- /widget-content --> 
                        
                      </div>
                    </div>
                  </div>
                  <!-- /widget -->
                </div>
                <!-- /span8 -->
</div> <!-- /row -->

</body>
</html>
@endsection