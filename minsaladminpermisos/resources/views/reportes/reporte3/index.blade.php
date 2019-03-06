
@extends('layouts.admin')
@section('contenido')
                 <!--Contenido -->
                <div class="row">
                  <div class="span12">
            
                    <div id="target-1" class="widget">
                
                    <div class="widget-content">
                  
                      <h1> Resumen de los Vehiculos que tienen permiso en el en el area de San Salvador</h1>
                      <h6 class="bigstats">Es un reporte que se genera apartir de los datos registrados en el Sistema que nos permite ver los Vehiculos que tienen permiso en el en el area de San Salvador</h6> 
                  
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
               
                {{ Form::open(array('action' => 'reporte3Controller@show')) }}
                  <fieldset>
                
                    
                    <div class="control-group">                     
                      <label class="control-label" for="fechainicial">Fecha Inicial</label>
                      <div class="controls">
                        <input type="date" class="span6" id="fechainicial" name="fechainicial">
                      </div> <!-- /controls -->   
                      <hr>
                       <label class="control-label" for="fechafinal">Fecha Final</label>
                      <div class="controls">
                        <input type="date" class="span6" id="fechafinal" name="fechafinal">
                      </div> 
                    </div> <!-- /control-group -->

                     <br />
            
                    <div class="form-actions">
                      {!!Form::submit('Consultar',['class'=>'btn btn-primary'])!!}
                      {{ Form::close() }}
                      
                     
                      
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
                </div>
                
              </div>
              @include('reportes.alerts.requests')   
              @include('reportes.alerts.messages')
              
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