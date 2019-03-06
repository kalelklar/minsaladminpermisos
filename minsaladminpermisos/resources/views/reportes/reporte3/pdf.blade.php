<!DOCTYPE html>
<html>
<head>
	<title>Resumen de los Vehiculos que tienen permiso en el en el area de San Salvador</title>
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
            @if(is_file(public_path().'/logos/minsal_report.jpg'))
            <div class="foto1" >
                <img src="{{ public_path()}}/logos/minsal_report.jpg" height="110px" width="220px" class="img-thumbnail" align="left">
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
            <h2 style="line-height=0">Ministerio de Salud de El Salvador</h2>
            <h2 style="line-height=0">Unidad de Permisos Sanitarios</h2>
            <h3>Resumen de los Vehiculos que tienen permisos en el area de San Salvador</h3>
            <br>
            <h4><b>Periodo:</b>
        Desde: {{$fechaInicial}}
        Hasta:{{$fechaFinal}}</h4>
            <br>
            <h5 style="line-height=0">Generado: {{date("d-m-Y G:i:s")}} por: {{Auth::user()->name}}</h5>

    </div></center>
   
  
   </header>
   <table width="100%" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th >Fecha Ingreso de la Solicitud</th>
            <th >Vehiculo</th>
            <th>Placa</th>
            <th >Empresa</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          @php($total=0)

         @foreach($result as $res)
         @php($total=$total+1)
         <tr>
           <td>
             {{$res->fechaingreso}}
           </td>
          
            <td>
             {{$res->modelo}}

           </td>
            <td>
             {{$res->placa}}

           </td>
            <td>
             {{$res->nombreempresa}}

           </td>
             <td>
             {{$res->estado}}

           </td>
          
         </tr>
         @endforeach
         <tr>
           <td colspan="4">Total de Vehiculos</td>
           <td>{{$total}}</td>
         </tr>
        </tbody>
        <tfoot>
        
        </tfoot>
      </table>
      
</body>
</html>