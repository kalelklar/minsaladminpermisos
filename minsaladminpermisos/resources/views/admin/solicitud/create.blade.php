
@extends('layouts.admin')
@section('contenido')
                 <!--Contenido -->
                <div class="row">
                  <div class="span12">
            
                    <div id="target-1" class="widget">
                
                    <div class="widget-content">
                  
                      <h1>Crear Solicitud</h1>
                      <h6 class="bigstats">En Este Formulario se registra solicitud para el permiso sanitario</h6> 
                  
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
                <h3>Formularios</h3>

            </div> <!-- /widget-header -->
           
          <div class="widget-content">
            
         
            
            <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#formcontrols" data-toggle="pill">Datos de la Solicitud</a>
              </li>
            </ul>

            
            <br>
            
              <div class="tab-content">
              	<!--Primero-->
                <div class="tab-pane in active" id="formcontrols">
            {!!Form::open(array('url'=>'admin/solicitud','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

                  <fieldset>
                
                    
                    <div class="control-group">                     
                      <label class="control-label" for="idexpediente">Vehiculo</label>
                      <div class="controls">
                        <select name="idexpediente"  class="span6">
		                   @foreach ($vehiculos as $ve)
		                         <option value="{{$ve->idexpediente}}">Vehiculo: {{$ve->modelo}} Empresa: {{$ve->nombreempresa}}</option>
		                   @endforeach
		                 </select>  
                      </div>    
            		</div> <!-- /controls -->   
                      <hr>
                       <label class="control-label" for="fechaingreso">Fecha Ingreso</label>
                      <div class="controls">
                        <input type="date" class="span6" id="fechaingreso" name="fechaingreso">
                      </div> <!-- /controls --> 
                        <hr>
                       <label class="control-label" for="fecharesolucion">Fecha Resolución</label>
                      <div class="controls">
                        <input type="date" class="span6" id="fecharesolucion" name="fecharesolucion">
                      </div> <!-- /controls -->  
                        <hr>
                       <label class="control-label" for="estado">Estado</label>
                      <div class="controls">
                        <input type="text" class="span6" id="estado" name="estado">
                      </div> <!-- /controls -->   
                    </div> <!-- /control-group -->

                     <br />
            
                    <div class="form-actions">
                    <div class="form-group">
            	          <button class="btn btn-primary" type="submit">Guardar</button>
            	          <button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>

                      {{ Form::close() }}
                    

                    </div> <!-- /form-actions -->

                  </fieldset>
                
                </div>
                <!-- class="tab-pane in active"-->

                @include('reportes.alerts.requests')   
                @include('reportes.alerts.messages')
              </div>
              <!-- class="tab-content"-->

                
              </div>
            <!-- Fin "tabbable"-->
              
            
          </div> <!-- /widget-content -->

            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
@endsection
