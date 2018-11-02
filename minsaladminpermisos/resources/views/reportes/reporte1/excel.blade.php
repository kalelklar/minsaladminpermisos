<!DOCTYPE html>
<html>
<head>
	<title>TemasComponente</title>

</head>
<body>
<div>
<header>
<center><div class="encabezado" id="encabezado">
            <table BORDER=1 WIDTH=100% class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                    <th colspan="4" align="center"> Ministerio de Trabajo y Previsión Social </th>
                    <th rowspan="4" WIDTH=100%>&nbsp;&nbsp;</th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="4" align="center"> Departamento de Recurso Humanos </th>
                  </tr>
                  <tr>
                    <th>&nbsp;&nbsp;</th>
                    <th colspan="4" align="center"> Generado: {{date("d-m-Y G:i:s")}} Por: {{Auth::user()->name}}</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
        </table>

        </div></center>
    
  
   </header>
<table  class="table table-bordered table-hover">
        <thead>
          <tr>
            <th colspan="6">Reporte Temas Clasificados Por Componente</th>
          </tr>
          <tr>
            <th colspan="6"><b>PERIODO:</b> desde {{$fechainicial}} hasta {{$fechafinal}}</th>
          </tr>
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
          @else
          <td>&nbsp;&nbsp;</td>
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
          @else
          <td>&nbsp;&nbsp;</td>
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
          @else
          <td>&nbsp;&nbsp;</td>
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
          @else
          <td>&nbsp;&nbsp;</td>
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


</body>
</html>
