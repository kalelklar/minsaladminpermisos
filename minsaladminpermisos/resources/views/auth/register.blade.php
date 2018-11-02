@extends('layouts.applogin')

@section('contenido')
<div class="account-container register">

    
    <div class="content clearfix">
        
        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
        
            <h1>Formulario de Registro</h1>            
            
            <div class="login-fields">
                
                <p>Crear Cuenta:</p>
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="field">
                <label for="name" class="col-md-4 control-label">Nombre:</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="field">
                    <label for="email" class="col-md-4 control-label">Usuario:</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="ejemplo@ejemplo.com">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                </div>
                

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="field">
                <label for="password" class="col-md-4 control-label">Contraseña:</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div> <!-- /field -->
                </div>

                <div class="form-group">
                    <div class="field">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Contraseña">
                            </div>
                    </div> <!-- /field -->
                </div>

                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <div class="field">
                <label for="tipo" class="col-md-4 control-label">Tipo de Usuario</label>
                <div class="col-md-6">
                    {!! Form::select('type',[''=>'Seleccione un tipo de usuario','adminsistema'=>'Administrador del Sistema','estrategico'=>'Estrategico','tactico'=>'Tactico'],null,['class'=>'form-control'])!!}
                </div>
                    @if ($errors->has('type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
                    @endif
                </div>
                </div>
                
            </div> <!-- /login-fields -->
            
            <div class="login-actions">
                
                <span class="login-checkbox">
                    <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
                    <label class="choice" for="Field">Aceptas los terminos y condiciones.</label>
                </span>
                                    
                <button type="submit" class="button btn btn-primary">Registrar</button>
                
            </div> <!-- .actions -->
            
        </form>
        
    </div> <!-- /content -->
    
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
    ya tienes cuenta? <a href="{{ route('login') }}"">Ingresa con tu cuenta</a>
</div> <!-- /login-extra -->
<div class="row">  
  <div class="span12">
      @include('reportes.alerts.messages')
  </div>
</div>  
@endsection
