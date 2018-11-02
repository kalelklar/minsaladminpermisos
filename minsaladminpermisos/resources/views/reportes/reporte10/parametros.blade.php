<div class="row"> 
<div class="span12">

{!! Form::open(array('url'=>'reporte10','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

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
                <form id="edit-profile" class="form-horizontal">
                  <fieldset>

                    <div class="control-group">                     
                		<label for="id_edicion" class="col-md-4 control-label">Edicion de Evaluacion</label>
                		<div class="controls" class="col-md-6">
                    	<select name="id_edicion" required class="span8 form-control" class="form-control selectpicker" id="id_edicion" value="{{old('id_edicion')}}">
                   		@foreach ($ediciones as $edic)
                         <option value="{{$edic->id_edicion}}">{{$edic->nombre}}</option>
                   		@endforeach
                  		</select>  
               			 </div><!-- /controls --> 
                    	@if ($errors->has('type'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('type') }}</strong>
	                    </span>
                    	@endif
                    </div> <!-- /control-group -->
                    <div class="control-group">                     
                		<label for="id_dependencia" class="col-md-4 control-label">Dependencia</label>
                		<div class="controls" class="col-md-6">
                    	<select name="id_dependecia" required class="span8 form-control" class="form-control selectpicker" id="id_dependecia" value="{{old('id_dependecia')}}">
                   		@foreach ($dependencias as $depe)
                         <option value="{{$depe->id_seccion}}">{{$depe->nombre_seccion}}</option>
                   		@endforeach
                  		</select>  
               			 </div><!-- /controls -->  
                    	@if ($errors->has('type'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('type') }}</strong>
	                    </span>
                    	@endif
                    </div> <!-- /control-group -->

                     <br />
            
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Consultar</button> 
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