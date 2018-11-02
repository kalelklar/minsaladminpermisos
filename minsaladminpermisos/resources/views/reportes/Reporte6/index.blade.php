@extends('layouts.admin')
@section('contenido')
                 <!--Contenido -->
                <div class="row">
                  <div class="span12">
            
                    <div id="target-1" class="widget">
                
                    <div class="widget-content">
                  
                      <h1>Reporte de Horas de Capacitación por Componente por Persona</h1>
                      <h6 class="bigstats">Es un reporte que se genera apartir de los datos registrados en el Sistema fichas de Empleados que nos permite ver las capacitaciones por componente de una persona, sus temas por componente, numero de horas por tema y el total de horas por componente.</h6>
                  
                    </div> <!-- /widget-content -->
                
                    </div> <!-- /widget -->
            
                  </div> <!-- /span12 -->
                </div>
                <!-- /.row -->

                {{ Form::open(array('action' => 'reporte6Controller@show')) }}
<div class="row"> 
<div class="span12">
<div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Formulario de Parametros</h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
            
            
            <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#formcontrols" data-toggle="tab">Parametros</a>
              </li>
            </ul>
            
            <br>
            
              <div class="tab-content">
                <div class="tab-pane active" id="formcontrols">

                <form id="edit-profile" class="form-horizontal" method="post">
                  <fieldset>

                    <div class="control-group">                     
                      <label class="control-label" for="fecha_inicial">Fecha Inicial</label>
                      <div class="controls">
                        <input type="date" class="span4" id="fecha_inicial" name="fecha_inicial" value="{{old('fecha_inicial')}}">
                      </div> <!-- /controls -->
                      @if ($errors->has('fecha_inicial'))
                      <span class="help-block">
                          <strong>{{ $errors->first('fecha_inicial') }}</strong>
                      </span>
                      @endif   
                    </div> <!-- /control-group -->
                      <hr>
                    <div class="control-group"> 
                       <label class="control-label" for="fecha_final">Fecha Final</label>
                      <div class="controls">
                        <input type="date" class="span4" id="fecha_final" name="fecha_final" value="{{old('fecha_final')}}">
                      </div>
                      @if ($errors->has('fecha_final'))
                      <span class="help-block">
                          <strong>{{ $errors->first('fecha_final') }}</strong>
                      </span>
                      @endif 
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                    <label for="nr" class="col-md-4 control-label">NR</label>
                    <div class="controls" class="col-md-6">
                      <input type="tex" maxlength="4" class="span4" id="nr" name="nr" value="{{old('nr')}}"> 
                     </div><!-- /controls --> 
                      @if ($errors->has('nr'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nr')}}</strong>
                      </span>
                      @endif
                    </div> <!-- /control-group -->

                     <br />
            
                    <div class="form-actions">
                      {!!Form::submit('Consultar',['class'=>'btn btn-primary'])!!}
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
                </div>   
              </div>  
            </div> 
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
</div>
</div>
{{Form::close()}}

                <div class="row">  
                <div class="span12">   
                @include('reportes.alerts.messages')
                </div>
                </div>
@endsection