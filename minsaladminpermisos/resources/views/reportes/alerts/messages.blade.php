@if (Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
@if (Session::has('query'))
	<div class="alert alert-info alert-dismissable" role='alert'>
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

		<strong>{{Session::get('query')}}</strong>
	</div>
@endif
@if (Session::has('update'))
	<div class="alert alert-info alert-dismissable" role='alert'>
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

		<strong>{{Session::get('update')}}</strong>
	</div>
@endif
@if (Session::has('create'))
	<div class="alert alert-info alert-dismissable" role='alert'>
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

		<strong>{{Session::get('create')}}</strong>
	</div>
@endif

