@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="span12">

		<div id="target-1" class="widget">

			<div class="widget-content">

				<h1>Reporte de Cumplimiento de Meta: Personas</h1>
				<h6 class="bigstats">Es un reporte que se genera apartir de los datos registrados en el Sistema de Fichas de Empleado que nos permite ver las capacitaciones por dos componentes  especificos Ténico Especializado y habilidades Sociales estos desagregado por mujeres, hombres en un periodo y una meta programada.</h6>

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
                    <th colspan="7"> PERIODO: del {{$inicial}} al {{$final}}</th>
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

							<div class="stat"><a href="{{URL::action('RCumplimientoDeMetaPersonasController@reportepdf',[$qfecha_inicial,$qfecha_final,$qmeta])}}"><i class="icon-large icon-file
								"></i> <span class="value">PDF</span></a>
							</div>
							<!-- .stat -->

							<div class="stat"><a href="{{URL::action('RCumplimientoDeMetaPersonasController@reporteexcel',[$qfecha_inicial,$qfecha_final,$qmeta])}}"><i class="icon-large icon-table"></i><span class="value">Excel</span></a>
							</div>
							<!-- .stat -->

							<div class="stat"> <a href="{{ URL::previous() }}"><i class=" icon-chevron-left"></i> <span class="value">volver</span></a></div>
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
@endsection
