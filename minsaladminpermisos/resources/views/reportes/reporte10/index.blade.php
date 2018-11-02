
@extends('layouts.admin')
@section('contenido')
                 <!--Contenido -->
                <div class="row">
                  <div class="span12">
            
                    <div id="target-1" class="widget">
                
                    <div class="widget-content">
                  
                      <h1>Reporte de Nota promedio por  Dependencia (SEDP) </h1>
                      <h6 class="bigstats">Es un reporte que se genera apartir de los datos registrados en el Sistema Evaluación de Desempeño del Personal(SEDP) que nos permite ver el promedio de notas de mujeres y hombre ademas la nota individual por persona segun la version de la evaluacion y la dependencia.</h6>
                  
                    </div> <!-- /widget-content -->
                
                    </div> <!-- /widget -->
            
                  </div> <!-- /span12 -->
                </div>
                <!-- /.row -->
                @include('reportes.reporte10.parametros')
                <div class="row">  
                <div class="span12">   
                @include('reportes.alerts.messages')
                </div>
                </div>
                @if(count($resultados)!=0)
                @include('reportes.reporte10.resultados')
                @endif
@endsection