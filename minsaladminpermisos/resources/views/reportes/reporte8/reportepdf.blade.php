<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reporte_de_Horas_de_Capacitación_por_Componente_por_Persona</title>
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
  <table page-break-after: always;  class="table table-bordered table-hover">
    <thead>
        <tr>
        <th colspan="7">Reporte de participaciones por Tema de Capacitación</th>
      </tr>
      <tr>
        <th colspan="7">PERIODO: del {{$fechainicial}}  al {{$fechafinal}}</th>
      </tr>
      <tr>
        <th colspan="7">Componente: {{$componente->programa}}</th>
      </tr>
      <tr>
        <th>Tema de Capacitación</th>
        <th>Dirigido a</th>
        <th>Impartido por</th>
        <th>N° Horas recibidas</th>
        <th>N° Mujeres</th>
        <th>N° Hombres</th>
        <th>N° Participaciones</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < count($result1); $i++)
      <tr>
        <td>{{$result1[$i]->tema}}</td>
        <td>{{$result1[$i]->nombre_seccion}}</td>
        <td>{{$result1[$i]->impartido_por}}</td>
        <td>{{$result1[$i]->horas_numerico}}</td>
        <td>{{$result1[$i]->cantmujeres}}</td>
        <td>{{$result1[$i]->canthombres}}</td>
        <td>{{$result1[$i]->participaciones}}</td>
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