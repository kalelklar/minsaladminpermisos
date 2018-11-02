
@extends('layouts.admin')
@section('contenido')
                 <!--Contenido -->
                <div class="row">
                  <div class="span12">
            
                    <div id="target-1" class="widget">
                
                    <div class="widget-content">
                  
                      <h1>Reporte de Notas por Persona por Dependencia (SEDP) </h1>
                      <h2>{{$seccion->nombre_seccion}} </h2>
                      <h6 class="bigstats">Es un reporte que se genera apartir de los datos registrados en el Sistema Evaluación de Desempeño del Personal(SEDP) y El sistema de Fichas de Empleado que nos permite ver el detalle de notas individual por persona segun la version de la evaluacion y la dependencia.</h6>
                  
                    </div> <!-- /widget-content -->
                
                    </div> <!-- /widget -->
            
                  </div> <!-- /span12 -->
                </div>
                <!-- /.row -->
                        <div class="row">  
        <div class="span12">            
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Resultados</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th colspan="4"> Reporte de Notas por Persona por Dependencia (SEDP): 
 {{$seccion->nombre_seccion}}</a></th>
     </tr>
                  <tr>
                    <th> NR</a></th>
                    <th> Nombre</th>
                    <th> Cargo Funcional</th>
                    <th> Nota por persona</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($detalle as $det)
                  <tr>
                    <td> {{$det->nr}} </td>
                    <td> {{$det->nombre}} </td>
                    <td> {{$det->funcional}}</td>
                    <td> {{$det->nota}} </td>
                  </tr>
                  @endforeach  
                </tbody>
              </table>
            </div>
            <!-- /widget-content -->     
        </div> <!-- /widget -->
</div><!-- /row -->

<div class="row">

                <div class="span8 offset2">
                  <div class="widget widget-nopad">
                    <div class="widget-header"> <i class="icon-large icon-paper-clip
        "></i>
                      <h3> Exportar A:</h3>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                      <div class="widget big-stats-container">
                        <div class="widget-content">
                          <div id="big_stats" class="cf">

                            <div class="stat"><a href="{{URL::action('RNotaPromedioPorDependenciaController@reportedetallepdf',[$id_edicion,$id_seccion])}}"><i class="icon-large icon-file
        "></i> <span class="value">PDF</span></a></div>
                            <!-- .stat -->
                            
                            <div class="stat"><a href="{{URL::action('RNotaPromedioPorDependenciaController@reportedetalleexcel',[$id_edicion,$id_seccion])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a> </div>
                            <!-- .stat -->

                            <div class="stat"> <a href="{{ URL::previous() }}"><i class=" icon-chevron-left"></i> <span class="value">volver</span></a></div>
                          </div>
                        </div>
                        <!-- /widget-content --> 
                        
                      </div>
                    </div>
                  </div>
                  <!-- /widget -->
                </div>
                <!-- /span8 -->
</div> <!-- /row -->
@endsection