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
                  <tr><th colspan="5"> Reporte de Nota promedio por  Dependencia (SEDP): 
     {{$seccion->nombre_seccion}}</th><tr>
                  <tr>
                    <th> Dependencia</a></th>
                    <th> Evaluados Mujeres</th>
                    <th> Evaluados Hombres</th>
                    <th> Nota Mujeres</th>
                    <th> Nota Hombres</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($resultados as $depe)
                  <tr>
                    <td>
                    <a href="{{URL::action('RNotaPromedioPorDependenciaController@detalleDependencia',[$depe->id_edicion,$depe->id_seccion])}}">{{$depe->seccion}}</a>
                   	</td>
                    <td> {{$depe->cantmujeres}} </td>
                    <td> {{$depe->canthombres}} </td>
                    <td> {{$depe->prommujeres}}</td>
                    <td> {{$depe->promhombres}} </td>
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

                            <div class="stat"><a href="{{URL::action('RNotaPromedioPorDependenciaController@reportepdf',[$id_edicion,$id_seccion])}}"><i class="icon-large icon-file
        "></i> <span class="value">PDF</span></a></div>
                            <!-- .stat -->
                            
                            <div class="stat"><a href="{{URL::action('RNotaPromedioPorDependenciaController@reporteexcel',[$id_edicion,$id_seccion])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
                            </div>
                            <!-- .stat -->

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