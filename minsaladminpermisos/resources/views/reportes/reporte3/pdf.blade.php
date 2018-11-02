<!DOCTYPE html>
<html>
<head>
	<title>Memoria de Labores</title>
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
   <table width="100%" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th colspan="5">Reporte de Memoria de Labores</th>
          </tr>
          <tr>
            <th colspan="5"><b>PERIODO:</b>
        desde: {{$fechaInicial}}
        hasta:{{$fechaFinal}}</th>
          </tr>
          <tr>
            <th >Componente</th>
            <th >Mujeres por Componente</th>
            <th >Hombres por Componente</th>
            <th>Total de participantes por Componente</th>
            <th>Total de Horas Recibidas por Componente</th>
          </tr>
        </thead>
       <tbody>
          @php($totalmujeres=0)
          @php($totalhombres=0)
          @php($totalparticipantes=0)
          @php($totalhoras=0)
         @foreach($result as $res)
         <tr>
           <td>
             {{$res->programa}}
           </td>
          
            <td>
             {{$res->cantmujeres}}
             @php($totalmujeres+=$res->cantmujeres)
           </td>
            <td>
             {{$res->canthombres}}
             @php($totalhombres+=$res->canthombres)
           </td>
            <td>
             {{$res->participaciones}}
             @php($totalparticipantes+=$res->participaciones)
           </td>
             <td>
             {{$res->TotalHorasInvertidas}}
             @php($totalhoras+=$res->TotalHorasInvertidas)
           </td>
          
         </tr>
         @endforeach
         <tr>
           <td>Total</td>
            <td>{{$totalmujeres}}</td>
             <td>{{$totalhombres}}</td>
              <td>{{$totalparticipantes}}</td>
               <td>{{$totalhoras}}</td>
         </tr>
        </tbody>
        <tfoot>
        
        </tfoot>
      </table>
      
</body>
</html>