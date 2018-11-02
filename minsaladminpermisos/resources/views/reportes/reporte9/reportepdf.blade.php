<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CumplimientodeMetaParticipantes</title>

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
<div class="container-fluid">
<!--Contenido -->
  <div class="col-lg-12">
      <div class="row-fluid">
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
<table  WIDTH=100% class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th colspan="7"> Reporte de Cumplimiento de Meta: Personas </th>
                  </tr>
                  <tr>
                    <th colspan="7"> PERIODO: desde {{$inicial}} hasta {{$final}}</th>
                  </tr>
                  <tr>
                    <th> Componente</a></th>
                    <th> N° de Mujeres</th>
                    <th> N° de Hombres</th>
                    <th> N° Total de Personas</th>
                    <th> N° Total de Personas capacitadas por componente</th>
                    <th> Meta Programada por componente</th>
                    <th> Resultado del Periodo(%)</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i=0)
                  @foreach ($result as $r)
                    <tr>
                      <td>{{$r->programa}}</td>
                      <td>{{$r->cantmujeres}}</td>
                      <td> {{$r->canthombres}} </td>
                      <td> {{$r->participaciones}} </td>
                      @php($i+=1)
                      @if($i===1)
                      <td rowspan="{{count($result)}}"> {{$resultp[0]->totalparticipaciones}}</td>
                      <td rowspan="{{count($result)}}"> {{$qmeta}}</td>
                      <td rowspan="{{count($result)}}"> {{$resultp[0]->porcentaje}} %</td>
                      @endif
                  </tr>
                  @endforeach 
                </tbody>
</table>
</div>
</div>
</div>              
<!-- Fin Contenido-->
</div>
</body>
</html>   