@extends('layouts.admin')
@section('contenido')
<!--Contenido -->
<div class="row">
  <div class="span12">

    <div id="target-1" class="widget">

        <div class="widget-content">

          <h1>Administrar Empresas y Vehiculos</h1>

      </div> <!-- /widget-content -->

  </div> <!-- /widget -->

</div> <!-- /span12 -->

</div>
<!-- /.row -->

<div class="row">  
  <div class="span12">
      <div class="form-actions">
      <a href="{{ url('/admin/empresa/create') }}" class="btn btn-success btn-lg" role="button"><i class="glyphicon glyphicon-plus"></i>Nueva Empresas</a>                   
      </div> <!-- /form-actions -->
      @include('reportes.alerts.messages')
  </div>
</div>  

<!-- /.row -->
<div class="row">  
    <div class="span12">            
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Listado de Empresas</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tablausuarios">
                                <thead>
                                    <tr>
                                        <th>IdEmpresa</th>
                                        <th>Nombre</th>
                                        <th>Razon Social</th>
                                        <th>Nombre de Cliente</th>
                                        <th>Dui</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($empresas as $emp)
                                    <tr>
                                    	<td>{{ $emp->idempresa }}</td>
                                        <td>{{ $emp->nombreempresa }}</td>
                                        <td>{{ $emp->razonsocial}}</td>
                                        <td>{{ $emp->nombre }}</td>
                                        <td>{{ $emp->dui }}</td>
                                        <td>
                                        <a href="" data-target="#modal-delete-{{$emp->idempresa}}" data-toggle="modal"><button  class="btn btn-xs btn-danger">Cambiar</button></a>
                                        <a href="{{URL::action('EmpresaController@edit',$emp->idempresa)}}"><button type="button" class="btn btn-xs btn-primary">Editar</button></a>
                                        <!--<a href=""><button type="button" class="btn btn-sm btn-info">Ficha</button></a></td>-->
                                        </td>
                                    </tr>
                                    @include('admin.empresa.modal')
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