@extends('layouts.applogin')

@section('contenido')
<div class="account-container">
    
    <div class="content clearfix">
        
        <form  role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
        
            <h1>Ingresar</h1>       
            
            <div class="login-fields">
                
                <p>Por favor Identificate</p>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="field">
                        <label for="username">Usuario</label>
                        <input id="email" type="email" class="login username-field" name="email" value="{{ old('email') }}" required autofocus placeholder="usuario">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div> <!-- /field -->
                </div>


                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="field">
                    <label for="password">Contraseña:</label>
                    <input id="password" type="password" class="login password-field" name="password" required placeholder="contraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div> <!-- /password -->
                </div>
                
            </div> <!-- /login-fields -->
            
            <div class="login-actions">
            <span class="login-checkbox">
                    <input id="Field" type="checkbox" class="field login-checkbox" for="Field" tabindex="4"  name="remember" {{ old('remember') ? 'checked' : '' }}> 
                    <label class="choice" for="Field">Recordar</label>
                </span>

                <button type="submit" class="button btn btn-success btn-large">Entrar</button>
                
            </div> <!-- .actions -->
            
            
            
        </form>
        
    </div> <!-- /content -->
    
</div> <!-- /account-container -->



<div class="login-extra">
    <a href="{{ route('password.request') }}">Olvidastes la contraseña ?</a>
</div> <!-- /login-extra -->

@endsection
