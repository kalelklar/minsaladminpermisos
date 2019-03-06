@extends('layouts.admin')
@section('contenido')
<!--Contenido -->
<div class="row">
      <div class="span12">

          <div id="target-1" class="widget">

                <div class="widget-content">

                      <h1>Actualizar Usuario: {{$user->name}}</h1>

                </div> <!-- /widget-content -->

          </div> <!-- /widget -->

    </div> <!-- /span12 -->

    <div class="row">  
      <div class="span12">
            @include('reportes.alerts.messages')
      </div>
</div>  

</div>
<div class="row"> 
      <div class="span12">
            <div class="widget ">          
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Formulario</h3>
          </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
            
            
            <div class="tabbable">
                  <ul class="nav nav-tabs">
                      <li class="active">
                          <a href="#formcontrols" data-toggle="tab">Campos</a>
                    </li>
              </ul>

              <br>
              
              <div class="tab-content">
                    <div class="tab-pane active" id="formcontrols">

                      {!!Form::model($user,['method'=>'PATCH','route'=>['usuarios.update',$user->id]])!!}
                      {{Form::token()}} 
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                       <label for="name" class="col-md-6 control-label">Nombre</label>

                       <div class="controls">
                            <input id="name" type="text"  class="span6 form-control" name="name" value="{{ $user->name }}" disabled>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('name') }}</strong>
                           </span>
                           @endif
                     </div>
               </div>

               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <label for="email" class="col-md-6 control-label">Correo Electronico</label>

                 <div class="controls">
                      <input id="email" type="email" class="span6 form-control" name="email" value="{{ $user->email }}"
                      disabled>

                      @if ($errors->has('email'))
                      <span class="help-block">
                           <strong>{{ $errors->first('email') }}</strong>
                     </span>
                     @endif
               </div>
         </div>

         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
           <label for="password" class="col-md-6 control-label">Contraseña</label>

           <div class="controls">
                <input id="password" type="password" class="span6 form-control" name="password" >

                @if ($errors->has('password'))
                <span class="help-block">
                     <strong>{{ $errors->first('password') }}</strong>
               </span>
               @endif
         </div>
   </div>

   <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
     <label for="password-confirm" class="col-md-6 control-label">Confirmar Contraseña</label>

     <div class="controls">
          <input id="password-confirm" type="password" class="span6 form-control" name="password_confirmation">

          @if ($errors->has('password_confirmation'))
          <span class="help-block">
               <strong>{{ $errors->first('password_confirmation') }}</strong>
         </span>
         @endif
   </div>
</div>
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
     <label for="tipo" class="col-md-6 control-label">Tipo</label>

     <div class="controls">
          {!! Form::select('type',[''=>'Seleccione un tipo de usuario','adminsistema'=>'Administrador del Sistema','estrategico'=>'estrategico','tactico'=>'Tactico','operativo'=>'Operativo'],null,['class'=>'span6 form-control'])!!}
    </div>
    @if ($errors->has('type'))
    <span class="help-block">
         <strong>{{ $errors->first('type') }}</strong>
   </span>
   @endif
</div>
<div class="form-group">
     <div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn btn-primary">
               <i class="glyphicon glyphicon-refresh"></i> Actualizar
         </button>
         <a href="{{url('usuarios')}}"" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
   </div>
</div>

</div>    
</div>
{!!Form::close()!!}
</div> 
</div> <!-- /widget-content -->

</div> <!-- /widget -->
</div>
</div>

@endsection
