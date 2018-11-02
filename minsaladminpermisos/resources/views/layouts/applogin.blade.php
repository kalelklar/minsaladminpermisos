<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>SIMPSV-MINSAL | Ministerio de Salud de El Salvador </title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{asset('plantilla/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('plantilla/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
<link href="{{asset('plantilla/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('plantilla/css/style.css')}}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="{{asset('plantilla/css/pages/signin.css')}}" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="{{url('/')}}">
				SIMPSV-MINSAL | Ministerio de Salud de El Salvador 			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
				
					<li class="">						
						<a href="{{url('usuarios')}}" class="">
							<i class="icon-chevron-left"></i>
							Regresar
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



@yield('contenido')


<!-- Placed at the end of the document so the pages load faster --> 
@stack('scripts')
<script src="{{asset('plantilla/js/jquery-1.7.2.min.js')}}"></script> 
<script src="{{asset('plantilla/js/bootstrap.js')}}"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Scripts -->
<script>
  window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
  ]) !!};
</script>
<script src="{{asset('plantilla/js/signin.js')}}"></script>

</body>

</html>
