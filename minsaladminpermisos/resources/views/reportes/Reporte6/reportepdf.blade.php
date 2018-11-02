<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HorasdeCapxCompxPersona</title>
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
<table  page-break-after: always; class="table table-striped table-bordered">
<tbody>
    <tr>
      <td colspan="4"> Reporte de Horas de Capacitación por Componente por Persona </td>
    </tr>
    <tr>
      <td colspan="4">PERIODO: desde {{$fechainicial}}  hasta {{$fechafinal}}</td>
    </tr>
    <tr>
      <td>Nombre de la persona Empleada</td>
      <td>Número de registro de la persona empleada</td>
      <td>Cargo Funcional</td>
      <td>Dependencia</td>
    </tr>
    <tr>
        <td>{{$empleado[0]->nombre}}</td>
        <td>{{$empleado[0]->nr}} </td>
        <td>{{$empleado[0]->funcional}}</td>
        <td>{{$empleado[0]->nombre_seccion}}</td>
    </tr>
    <tr>
        <td>Componente</td>
        <td>Temas por componente</td>
        <td>Horas Capacitadas por tema</td>
        <td>Horas Capacitadas por componente</td>
    </tr>
    @php($i1=0)
    @foreach($result1 as $res1)                        
    <tr>
      @php($i1+=1)
      @if($i1===1)
      <th>{{$programas[3]->programa}}</th>
      @else
      <th>&nbsp;&nbsp;</th>
      @endif
      <td>{{$res1->tema}}</td>
      <td>{{$res1->horasportema}}</td>
      @if($i1===1)
      <td rowspan ="{{count($result1)}}">{{$hp1[0]->horasporcomponente}}</td>
      @endif
  </tr>
  @endforeach

  @php($i2=0)
  @foreach($result2 as $res2)                        
  <tr>
      @php($i2+=1)
      @if($i2===1)
      <th>{{$programas[4]->programa}}<br></th>
      @else
      <th>&nbsp;&nbsp;</th>
      @endif
      <td>{{$res2->tema}}</td>
      <td>{{$res2->horasportema}}</td>
      @if($i2===1)
      <td rowspan ="{{count($result2)}}">{{$hp2[0]->horasporcomponente}}</td>
      @endif
  </tr>
  @endforeach

  @php($i3=0)
  @foreach($result3 as $res3)                        
  <tr>
      @php($i3+=1)
      @if($i3===1)
      <th>{{$programas[5]->programa}}<br></th>
      @else
      <th>&nbsp;&nbsp;</th>
      @endif
      <td>{{$res3->tema}}</td>
      <td>{{$res3->horasportema}}</td>
      @if($i3===1)
      <td rowspan ="{{count($result3)}}">{{$hp3[0]->horasporcomponente}}</td>
      @endif
  </tr>
  @endforeach

  @php($i4=0)
  @foreach($result4 as $res4)                        
  <tr>
      @php($i4+=1)
      @if($i4===1)
      <th>{{$programas[6]->programa}}<br></th>
      @else
      <th>&nbsp;&nbsp;</th>
      @endif
      <td>{{$res4->tema}}</td>
      <td>{{$res4->horasportema}}</td>
      @if($i4===1)
      <td rowspan ="{{count($result4)}}">{{$hp4[0]->horasporcomponente}}</td>
      @endif
  </tr>
  @endforeach

</tbody>

</table>

</div>              
<!-- Fin panel-heading-->
</div>
<!-- Fin Contenido-->  
</body>
</html>   