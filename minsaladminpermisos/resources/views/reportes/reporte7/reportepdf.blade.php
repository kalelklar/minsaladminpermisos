<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reporte_de_Capacitación_por_nivel_organizacional</title>
    <!-- Bootstrap Core CSS -->
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
<div class="page-break">
<!--Contenido -->
<div>
    <header>
           <div id="logo" >
            @if(is_file(public_path().'/logos/mtps_report.jpg'))
            <div class="foto1" >
                <img src="{{ public_path().'/logos/mtps_report.jpg'}}" height="110px" width="220px" class="img-thumbnail" align="left">
            </div>
            @else
            <div class="foto">
                <img src=""  class="img-thumbnail">
            </div>
            @endif

            @if(is_file(public_path().'/logos/escudo.jpg'))
            <div class="foto" >
                <img src="{{ public_path().'/logos/escudo.jpg'}}" height="110px" width="110px" class="img-thumbnail" align="right">
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
</div>
<div class="panel-heading">
<br>
<br>            
<table page-break-after: always; class="table table-striped table-bordered">
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
      <th>Niveles Organizacionales</th>
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
<!-- Fin panel-heading-->
</div>
<!-- Fin Contenido-->  
</body>
</html>   