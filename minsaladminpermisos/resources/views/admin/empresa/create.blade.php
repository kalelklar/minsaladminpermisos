
@extends('layouts.admin')
@section('contenido')
                 <!--Contenido -->
                <div class="row">
                  <div class="span12">
            
                    <div id="target-1" class="widget">
                
                    <div class="widget-content">
                  
                      <h1>Crear Empresa</h1>
                      <h6 class="bigstats">En Este Formulario se registra la empresa para la gestion de la solicitud</h6> 
                  
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
                <a href="#formcontrols" data-toggle="pill">Datos de Representante</a>
              </li>
              <li >
                <a href="#formcontrols1" data-toggle="pill">Datos de Empresa</a>
              </li>
              <li >
                <a href="#formcontrols2" data-toggle="pill">Vehiculos</a>
              </li>
            </ul>

            
            <br>
            
              <div class="tab-content">
              	<!--Primero-->
                <div class="tab-pane in active" id="formcontrols">
            {!!Form::open(array('url'=>'admin/empresa','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

                  <fieldset>
                
                    
                    <div class="control-group">                     
                      <label class="control-label" for="nombre">Nombre</label>
                      <div class="controls">
                        <input type="text" class="span6" id="nombre" name="nombre">
                      </div> <!-- /controls -->   
                      <hr>
                       <label class="control-label" for="apellido">Apellidos</label>
                      <div class="controls">
                        <input type="text" class="span6" id="apellido" name="apellido">
                      </div> <!-- /controls --> 
                        <hr>
                       <label class="control-label" for="dui">Dui</label>
                      <div class="controls">
                        <input type="text" class="span6" id="dui" name="dui">
                      </div> <!-- /controls -->  
                        <hr>
                       <label class="control-label" for="nit">Nit</label>
                      <div class="controls">
                        <input type="text" class="span6" id="nit" name="nit">
                      </div> <!-- /controls -->
                        <hr>
                       <label class="control-label" for="cargo">Cargo</label>
                      <div class="controls">
                        <input type="text" class="span6" id="cargo" name="cargo">
                      </div> <!-- /controls -->     
                    </div> <!-- /control-group -->

                     <br />
            
                    <div class="form-actions">

                      <a href="#formcontrols1" data-toggle="pill"> <button type="button" class="btn btn-primary">Siguiente</button></a>
                          
                    </div> <!-- /form-actions -->

                  </fieldset>
                
                </div>
                <!--Segundo-->

                <div class="tab-pane" id="formcontrols1">
                
                  <fieldset>
                
                    
                    <div class="control-group">                     
                      <label class="control-label" for="nombreempresa">Nombre de la Empresa</label>
                      <div class="controls">
                        <input type="text" class="span6" id="nombreempresa" name="nombreempresa">
                      </div> <!-- /controls -->   
                      <hr>
                       <label class="control-label" for="razonsocial">Razon Social</label>
                      <div class="controls">
                        <input type="text" class="span6" id="razonsocial" name="razonsocial">
                      </div> <!-- /controls -->
                      <hr>
                       <label class="control-label" for="municipio">Municipio</label>
                      <div class="controls">
                        <input type="text" class="span6" id="municipio" name="municipio">
                      </div> <!-- /controls --> 
                      <hr>
                       <label class="control-label" for="direccion">Direccion</label>
                      <div class="controls">
                        <input type="text" class="span6" id="direccion" name="direccion">
                      </div> <!-- /controls -->
                      <hr>  
                       <label class="control-label" for="capital">Capital</label>
                      <div class="controls">
                        <input type="text" class="span6" id="capital" name="capital">
                      </div> <!-- /controls --> 
                      <hr> 
                       <label class="control-label" for="emplfemenino">Empleados Femeninos</label>
                      <div class="controls">
                        <input type="number" class="span6" id="emplfemenino" name="emplfemenino">
                      </div> <!-- /controls -->
                       <hr>  
                       <label class="control-label" for="emplmasculino">Empleados Masculinos</label>
                      <div class="controls">
                        <input type="number" class="span6" id="emplmasculino" name="emplmasculino">
                      </div> <!-- /controls -->   
                    </div> <!-- /control-group -->

                     <br />
            
                    <div class="form-actions">

                      <a href="#formcontrols2" data-toggle="pill"> <button type="button" class="btn btn-primary">Siguiente</button></a>
                          
                    </div> <!-- /form-actions -->


                  </fieldset>
                
                </div>

                <!-- /ultimo-->
                <div class="tab-pane" id="formcontrols2">
                
                  <fieldset>
                
                    
                    <div class="control-group">                     
                      <label class="control-label" for="modelo">Modelo</label>
                      <div class="controls">
                        <input type="text" class="span6" id="modelo" name="modelo">
                      </div> <!-- /controls -->   
                      <hr>
                       <label class="control-label" for="placa">Placa</label>
                      <div class="controls">
                        <input type="text" class="span6" id="placa" name="placa">
                      </div> <!-- /controls -->
                      <hr>
                       <label class="control-label" for="ano">Año</label>
                      <div class="controls">
                        <input type="number" class="span6" id="ano" name="ano">
                      </div> <!-- /controls --> 
                      <hr>
                       <label class="control-label" for="capacidad">Capacidad</label>
                      <div class="controls">
                        <input type="text" class="span6" id="capacidad" name="capacidad">
                      </div> <!-- /controls -->
                      <hr>  
                       <label class="control-label" for="tipo">Tipo</label>
                      <div class="controls">
                        <input type="text" class="span6" id="tipo" name="tipo">
                      </div> <!-- /controls --> 
                      <hr> 

                       
                      <div class="controls">
                        <label class="control-label" for="refrigeracion">Refrigerado</label> <input type="checkbox" class="form-check-input" id="refrigeracion" name="refrigeracion">
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

                
              </div>
              @include('reportes.alerts.requests')   
              @include('reportes.alerts.messages')

                
              </div>
            <!-- Fin "tabbable"-->
              
            
          </div> <!-- /widget-content -->

            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->

@endsection
