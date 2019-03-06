@extends('layouts.admin')
@section('contenido')
<!--Contenido -->
<div class="row">
  <div class="span12">

    <div id="target-1" class="widget">

        <div class="widget-content">

          <h1>Solicitudes para permisos sanitarios para vehiculos</h1>

      </div> <!-- /widget-content -->

  </div> <!-- /widget -->

</div> <!-- /span12 -->
</div>
<!-- /.row -->

<div class="row">  
  <div class="span12">
      <div class="form-actions">
      <a href="{{ url('/admin/solicitud/create') }}" class="btn btn-success btn-lg" role="button"><i class="glyphicon glyphicon-plus"></i>Nueva Solicitud</a>                   
      </div> <!-- /form-actions -->
      @include('reportes.alerts.messages')
  </div>
</div>  

<!-- /.row -->
<div class="row">  
    <div class="span12">            
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Listado de Solicitudes</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tablausuarios">
                                <thead>
                                    <tr>
                                        <th>IdSolicitud</th>
                                        <th>Fecha de ingreso</th>
                                        <th>Vehiculo</th>
                                        <th>Placa</th>
                                        <th>Empresa</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($solicitudes as $sol)
                                    <tr>
                                    	<td>{{ $sol->idsolicitud }}</td>
                                        <td>{{ $sol->fechaingreso }}</td>
                                        <td>{{ $sol->modelo}}</td>
                                        <td>{{ $sol->placa }}</td>
                                        <td>{{ $sol->nombreempresa }}</td>
                                        <td>
                                        <a href="" data-target="#modal-delete-{{$sol->idsolicitud}}" data-toggle="modal"><button  class="btn btn-xs btn-danger">Estado</button></a>

                                        <a href="{{URL::action('SolicitudController@edit',$sol->idsolicitud)}}"><button type="button" class="btn btn-xs btn-primary">Evaluar</button></a>
                                        <a href="{{URL::action('SolicitudController@show',$sol->idsolicitud)}}"><button  type="button" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-list-alt"></i> Detalles</button></a>
                                        <a href="{{URL::action('SolicitudController@show2',$sol->idsolicitud)}}"><button  type="button" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-list-alt"></i>Comprobante</button></a>
                                        <!--<a href=""><button type="button" class="btn btn-sm btn-info">Ficha</button></a></td>-->
                                        </td>
                                    </tr>
                                    @include('admin.solicitud.modal')
                                @endforeach 
                                </tbody>
                            </table>
                        </div>
    </div>
    <!-- /widget-content -->     
</div> <!-- /widget -->
</div><!-- /span12 -->
</div><!-- /row -->

@endsection