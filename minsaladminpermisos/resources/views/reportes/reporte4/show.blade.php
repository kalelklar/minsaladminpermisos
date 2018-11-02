@extends('layouts.admin')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h3>Ministerio de Trabajo y Previsión Social</h3>
		<h3>Departamento de Recursos Humanos</h3>  
		<h2>Reporte Estadístico de Participantes</h2></center>
		<TABLE  class="table table-bordered table-hover" >
			<thead>
				<tr>
					<th colspan="9">PERIODO: del {{$fechaInicial}}  al {{$fechaFinal}}</th>
				</tr>
				<tr>
					<th rowspan="3"><p>Criterios</p></th>
					<Th  align="center" Colspan="8"  >Componente</TD>
					</tr>
					<tr>
						<th colspan="2" >{{$programas[3]->programa}}</th>
						<th colspan="2" >{{$programas[4]->programa}}</th>
						<th colspan="2" >{{$programas[5]->programa}}</th>
						<th colspan="2" >{{$programas[6]->programa}}</th>
					</tr>
					<tr>
						<th>Nombre del Tema</th>
						<th>N° de personas</th>
						<th>Nombre del Tema</th>
						<th>N° de personas</th>
						<th>Nombre del Tema</th>
						<th>N° de personas</th>
						<th>Nombre del Tema</th>
						<th>N° de personas</th>

					</tr>
				</thead>
				<tbody>
					<TR><TD>Tema con mayor cantidad de personas participantes</TD>
						@if(count($result1)===0)
						<td><p>No hay registros</p></td>
						<td>0</td>
						@else
						@php($ParMayor=0)
						@php($TemaMayor='')
						@foreach($result1 as $res1)
						@if($res1->usuariosPorTema>=$ParMayor)
						@php($TemaMayor=$res1->tema)
						@php($ParMayor=$res1->usuariosPorTema)
						@endif
						@endforeach
						<TD>
							{{$TemaMayor}}
						</TD>
						<TD>
							{{$ParMayor}}
						</TD>
						@endif

						@if(count($result2)===0)
						<td><p>No hay registros</p></td>
						<td>0</td>
						@else
						@php($ParMayor=0)
						@php($TemaMayor='')
						@foreach($result2 as $res2)
						@if($res2->usuariosPorTema>=$ParMayor)
						@php($TemaMayor=$res2->tema)
						@php($ParMayor=$res2->usuariosPorTema)
						@endif
						@endforeach
						<TD>
							{{$TemaMayor}}
						</TD>
						<TD>
							{{$ParMayor}}
						</TD>
						@endif

						@if(count($result3)===0)
						<td><p>No hay registros</p></td>
						<td>0</td>
						@else
						@php($ParMayor=0)
						@php($TemaMayor='')
						@foreach($result3 as $res3)
						@if($res3->usuariosPorTema>=$ParMayor)
						@php($TemaMayor=$res3->tema)
						@php($ParMayor=$res3->usuariosPorTema)
						@endif
						@endforeach
						<TD>
							{{$TemaMayor}}
						</TD>
						<TD>
							{{$ParMayor}}
						</TD>
						@endif

						@if(count($result4)===0)
						<td><p>No hay registros</p></td>
						<td>0</td>
						@else
						@php($ParMayor=0)
						@php($TemaMayor='')
						@foreach($result4 as $res4)
						@if($res4->usuariosPorTema>=$ParMayor)
						@php($TemaMayor=$res4->tema)
						@php($ParMayor=$res4->usuariosPorTema)
						@endif
						@endforeach
						<TD>
							{{$TemaMayor}}
						</TD>
						<TD>
							{{$ParMayor}}
						</TD>
						@endif

					</TR>
					<TR><TD>Tema con menor cantidad de personas participantes</TD>
						@if(count($result1)===0)
						<td><p>No hay registros</p></td>
						<td>0</td>
						@else
						@php($ParMenor=10000)
						@php($TemaMenor='')
						@foreach($result1 as $res1)
						@if($res1->usuariosPorTema<$ParMenor)
						@php($TemaMenor=$res1->tema)
						@php($ParMenor=$res1->usuariosPorTema)
						@endif
						@endforeach
						<TD>
							{{$TemaMenor}}
						</TD>
						<TD>
							{{$ParMenor}}
						</TD>
						@endif

						@if(count($result2)===0)
						<td><p>No hay registros</p></td>
						<td>0</td>
						@else
						@php($ParMenor=10000)
						@php($TemaMenor='')
						@foreach($result2 as $res2)
						@if($res2->usuariosPorTema<$ParMenor)
						@php($TemaMenor=$res2->tema)
						@php($ParMenor=$res2->usuariosPorTema)
						@endif
						@endforeach
						<TD>
							{{$TemaMenor}}
						</TD>
						<TD>
							{{$ParMenor}}
						</TD>
						@endif

						@if(count($result3)===0)
						<td><p>No hay registros</p></td>
						<td>0</td>
						@else
						@php($ParMenor=10000)
						@php($TemaMenor='')
						@foreach($result3 as $res3)
						@if($res3->usuariosPorTema<$ParMenor)
						@php($TemaMenor=$res3->tema)
						@php($ParMenor=$res3->usuariosPorTema)
						@endif
						@endforeach
						<TD>
							{{$TemaMenor}}
						</TD>
						<TD>
							{{$ParMenor}}
						</TD>
						@endif

						@if(count($result4)===0)
						<td><p>No hay registros</p></td>
						<td>0</td>
						@else
						@php($ParMenor=10000)
						@php($TemaMenor='')
						@foreach($result4 as $res1)
						@if($res4->usuariosPorTema<$ParMenor)
						@php($TemaMenor=$res4->tema)
						@php($ParMenor=$res4->usuariosPorTema)

						@endif
						@endforeach
						<TD>
							{{$TemaMenor}}
						</TD>
						<TD>
							{{$ParMenor}}
						</TD>
						@endif
					</TR>
				</tbody>
			</table>
		</tbody>
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


									<div class="stat"><a href="{{URL::action('reporte4Controller@reportepdf',[$fechaInicialx,$fechaFinalx])}}"><i class="icon-large icon-file"></i> <span class="value">PDF</span></a></div>
									<!-- .stat -->

									<div class="stat"><a href="{{URL::action('reporte4Controller@reporteexcel',[$fechaInicialx,$fechaFinalx])}}"><i class="icon-large icon-table"></i> <span class="value">Excel</span> </a></div>
									<!-- .stat -->

									<div class="stat"> <a href="{{ URL::previous() }}"><i class=" icon-chevron-left"></i><span class="value">volver</span></a></div>
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

	</body>
	</html>

	






	@endsection