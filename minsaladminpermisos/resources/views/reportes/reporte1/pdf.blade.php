<!DOCTYPE html>
<html>
<head>
	<title>Temas Clasificados Por Componente</title>
  <link href="{{ public_path()}}/plantilla/css/cssreportes/estiloreportes.css" rel="stylesheet">
</head>
<body>
<script type="text/php">
    if ( isset($pdf) ) {
            // OLD 
            // $font = Font_Metrics::get_font("helvetica", "bold");
            // $pdf->page_text(72, 18, "{PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(255,0,0));
            // v.0.7.0 and greater
            $x = 695;
            $y = 575;
            $text = "Pagina {PAGE_NUM} de {PAGE_COUNT}";
            $font = $fontMetrics->get_font("helvetica", "bold");
            $size = 8;
            $color = array(0,0,0);
            $word_space = 0.0;  //  default
            $char_space = 0.0;  //  default
            $angle = 0.0;   //  default
            $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>
<div>
    <header>
           <div id="logo" >
            @if(is_file(public_path().'/logos/mtps_report.jpg'))
            <div class="foto1" >
                <img src="{{ public_path()}}/logos/mtps_report.jpg" height="110px" width="220px" class="img-thumbnail" align="left">
            </div>
            @else
            <div class="foto">
                <img src=""  class="img-thumbnail">
            </div>
            @endif

            @if(is_file(public_path().'/logos/escudo.jpg'))
            <div class="foto" >
                <img src="{{ public_path()}}/logos/escudo.jpg" height="110px" width="110px" class="img-thumbnail" align="right">
            </div>
            @else
            <div class="foto">
                <img src=""  class="img-thumbnail">
            </div>
            @endif

</div>
<center><div class="encabezado" id="encabezado">
            <h2 style="line-height=0">Ministerio de Trabajo y Previsión Social</h2>
            <h2 style="line-height=0">Departamento de Recurso Humanos </h2>
            <br>
            <h5 style="line-height=0">Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}}</h5>

</div></center>
   </header>
<table  class="table table-bordered table-hover">
        <thead>
          <tr>
            <th colspan="6">Reporte de Temas Clasificados Por Componente</th>
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
          <td>{{$programas[3]->programa}}</td>
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
          <td>{{$programas[4]->programa}}</td>
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
          <td>{{$programas[5]->programa}}</td>
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
          <td>{{$programas[6]->programa}}</td>
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
