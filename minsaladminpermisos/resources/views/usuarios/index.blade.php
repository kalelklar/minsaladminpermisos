@extends('layouts.admin')
@section('contenido')
<!--Contenido -->
<div class="row">
  <div class="span12">

    <div id="target-1" class="widget">

        <div class="widget-content">

          <h1>Administrar Usuarios</h1>

      </div> <!-- /widget-content -->

  </div> <!-- /widget -->

</div> <!-- /span12 -->
</div>
<!-- /.row -->

<div class="row">  
  <div class="span12">
      <div class="form-actions">
      <a href="{{ route('register') }}" class="btn btn-success btn-lg" role="button"><i class="glyphicon glyphicon-plus"></i>Registrar Usuarios</a>                   
      </div> <!-- /form-actions -->
      @include('reportes.alerts.messages')
  </div>
</div>  

<!-- /.row -->
<div class="row">  
    <div class="span12">            
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Listado de usuarios</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tablausuarios">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>email</th>
                            <th>Tipo</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $u)
                       <tr>
                           <td>{{ $u->id}}</td>
                           <td>{{ $u->name }}</td>
                           <td>{{ $u->email }}</td>
                           @if($u->type=='adminsistema')
                           <td>Administrador del Sistema</td>
                           @endif
                           @if($u->type=='estrategico')
                           <td>Estrategico</td>
                           @endif
                           @if($u->type=='tactico')
                           <td>Tactico</td>
                           @endif
                           <td>
                            <a href="{{URL::action('HomeController@edit',$u->id)}}"><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
                            <a href="" data-target="#modal-delete-{{$u->id}}" data-toggle="modal"><button  class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove-circle"></i> Eliminar</button></a>
                        </td>
                    </tr>
                    @include('usuarios.modal')
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