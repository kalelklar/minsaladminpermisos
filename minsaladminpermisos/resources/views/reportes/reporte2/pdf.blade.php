<!DOCTYPE html>
<html>
<head>
  <title>Reporte de Capacitaciones por Dependencia</title>
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

<table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th colspan="8">Reporte de Capacitaciones por Dependencia</th>
          </tr>
          <tr>
            <th colspan="8"><b>Periodo:</b> desde {{$fechaInicial}} hasta {{$fechaFinal}}</th>
          </tr>
          <tr>
            <th >Dependencia</th>
            <th >Cargo Funcional</th>
            <th >Componente</th>
            <th >Tema</th>
            <th >Horas</th>
            <th>Cantidad de Mujeres</th>
            <th>Cantidad de Hombres</th>
            <th>Total de Participantes</th>
          </tr>
        </thead>
        <tbody>
        @php($totalhombres=0)
        @php($totalmujeres=0)
        @php($totalhoras=0)
        @php($totalparticipaciones=0)
        @php($filas=0)
        @php($i=0)
        @foreach($result as $res)                        
        <tr>
          @php($i+=1)
          @if($i===1)
          <td>{{$seccion->nombre_seccion}}</td>
          @else
          <td>&nbsp;&nbsp;</td>
          @endif
           <td>
               {{$res->CargoFuncional}}
            <td>
             {{$res->Componente}}
           </td>
           <td>
             {{$res->Tema}}
           </td>
           <td>
             {{$res->horas_numerico}}
             @php($totalhoras+=$res->horas_numerico)
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
             @php($totalparticipaciones+=$res->participaciones)
           </td>
          
         </tr>
         @endforeach
        
         
         <tr>
         <td colspan="4">Total</td>
         <td>{{$totalhoras}}</td>
         <td>{{$totalmujeres}}</td>
         <td>{{$totalhombres}}</td>
         <td>{{$totalparticipaciones}}</td>
         </tr>

    
        </tbody>
      </table>

      
</body>
</html>