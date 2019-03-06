<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ReportedeIngresodeSolicitudparalaconseciondelpermisoSanitariosenelareadeSanSalvador</title>
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
            @if(is_file(public_path().'/logos/minsal_report.jpg'))
            <div class="foto1" >
                <img src="{{ public_path().'/logos/minsal_report.jpg'}}" height="110px" width="220px" class="img-thumbnail" align="left">
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
            <h2 style="line-height=0">Ministerio de Salud de El Salvador</h2>
            <h2 style="line-height=0">Unidad de Permisos Sanitarios </h2>
            <br>
            <h5 style="line-height=0">Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}}</h5>

        </div></center>

        
</header>
</div>
<div class="panel-heading">
<br>
<br>            
<table WIDTH=100% class="table table-striped table-bordered">
    @for($i=0;$i < count($result); $i++)  
        <thead>
          <tr>
            <th colspan="4">Reporte de Ingreso de Solicitud para la consecion del permiso Sanitarios en el area de San Salvador</th>
          </tr>
          <tr>
            <th colspan="2">Fecha Ingreso de Solicitud: {{$result[$i]->fechaingreso}}</th>
            <th >Estado: {{$result[$i]->estado}}  </th>
            <th >Nombre de Empresa:{{$result[$i]->nombreempresa}} </th>
          </tr>
          <tr>
            <th>Direccion:</th>
            <th>{{$result[$i]->direccion}}</th>
            <th>Reprentante Legal: </th>
            <th>{{$result[$i]->representante}}</th>
          </tr>
        </thead>
        <tbody>
                              
        <tr>
            <td>
             Vehiculo: {{$result[$i]->modelo}}
            </td>
            <td>
             Tipo: {{$result[$i]->tipo}}
            </td>
            <td>
             Placa: {{$result[$i]->placa}}
            </td>
            <td>
             Capacidad: {{$result[$i]->capacidad}}
            </td>
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