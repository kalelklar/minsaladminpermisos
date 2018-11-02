<div class="row">
	<div class="span12">

		<div id="target-1" class="widget">

			<div class="widget-content">

				<h1>Reporte de capacitación solicitadas por Dependencia (SEDP) </h1>
				<h6 class="bigstats">Es un reporte que se genera apartir de los datos registrados en el Sistema Evaluación de Desempeño del Personal(SEDP) que nos permite ver las capacitaciones solicitadas por componente, sus temas por componente, numero de capacitaciones solicitadas y la dependencia que corresponde ademas su detalle de las personas que asistieron.</h6>

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
                    <th> Componente</a></th>
                    <th> Tema</th>
                    <th> Numero de Capacitaciones Solicitadas</th>
                    <th> Dependencia</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($resultados as $depe)
                  <tr>
                    <td>
                    <a href="{{URL::action('RCapacitacionesSolicitadasController@detalleDependencia',[$depe->id_componente,$depe->id_seccion])}}">{{$depe->seccion}}</a>
                   	</td>
                    <td> {{$depe->cantmujeres}} </td>
                    <td> {{$depe->canthombres}} </td>
                    <td> {{$depe->prommujeres}}</td>
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
								"></i> <span class="value">PDF</span></a>
							</div>
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
