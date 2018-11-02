<!DOCTYPE html>
<html>
<head>
  <title>Reporte de Participaciones por Tema</title>
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
   <br>
   <br>
   <br>
   <br>
   </header>

<table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th colspan="4">Reporte de Participantes por Tema</th>
          </tr>
          <tr>
            <th colspan="2">Tema de Capacitación: {{$tema[0]->tema}} </th>
            <th >Horas Duracion: {{$tema[0]->horas_numerico}} </th>
            <th >Fecha: {{$fecha_inicial}}</th>
          </tr>
          <tr>
            <th>NOMBRE DE LA 
DEPENDENCIA</th>
            <th>NR</th>
            <th>NOMBRE COMPLETO</th>
            <th>CARGO FUNCIONAL</th>
          </tr>
        </thead>
        <tbody>
        @for($i=0;$i < count($result); $i++)                        
        <tr>
            <td>
             {{$result[$i]->nombre_seccion}}
            </td>
            <td>
             {{$result[$i]->nr}}
            </td>
            <td>
             {{$result[$i]->nombre}}
            </td>
            <td>
             {{$result[$i]->funcional}}
            </td>
        </tr>
         @endfor
            
        </tbody>
      </table>
</body>
</html>