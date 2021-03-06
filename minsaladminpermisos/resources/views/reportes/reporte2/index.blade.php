@extends('layouts.admin')
@section('contenido')
                 <!--Contenido -->
                <div class="row">
                  <div class="span12">
            
                    <div id="target-1" class="widget">
                
                    <div class="widget-content">
                  
                      <h1>Reporte de capacitaciones por dependencia</h1>
                      <h6 class="bigstats">Es un reporte que se genera apartir de los datos registrados en el Sistema fichas de Empleados que nos permite ver los diferentes temas clasifica por componente</h6> 
                  
                    </div> <!-- /widget-content -->
                
                    </div> <!-- /widget -->
            
                  </div> <!-- /span12 -->
                </div>
                <!-- /.row -->
               
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
               
                {{ Form::open(array('action' => 'reporte2Controller@show')) }}
                  <fieldset>
                
                    
                    <div class="control-group">                     
                      <label class="control-label" for="fechaInicial">Fecha Inicial</label>
                      <div class="controls">
                        <input type="date" class="span6" id="fechaInicial" name="fechaInicial">
                      </div> <!-- /controls -->   
                      <hr>
                       <label class="control-label" for="fecha">Fecha Final</label>
                      <div class="controls">
                        <input type="date" class="span6" id="fechaFinal" name="fechaFinal">
                      </div> 
                      <hr>
                      <div class="controls">
                        <label class="control-label" for="id_dependencia">Dependencia</label>
                        <select name="id_seccion" required class="span6 form-control" class="form-control selectpicker" id="id_dependecia" value="{{old('id_dependecia')}}">
                      @foreach ($secciones as $seccion)
                         <option value="{{$seccion->id_seccion}}">{{$seccion->nombre_seccion}}</option>
                      @endforeach
                      </select>
                      </div> 
                    </div> <!-- /control-group -->

                     <br />
            
                    <div class="form-actions">
                      {!!Form::submit('Consultar',['class'=>'btn btn-primary'])!!}
                      {{ Form::close() }}
                      
                     
                      
                    </div> <!-- /form-actions -->
                  </fieldset>
               
                </div>
                
              </div>
              
              
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
   <div class="row">  
      <div class="span12">
        @include('reportes.alerts.requests')   
        @include('reportes.alerts.messages')
      </div>
    </div>                
    </div>
@endsection