@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
		{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success">
	{{session('success')}}
	</div>
@elseif(session('fail'))
	<div class="alert alert-danger">
	{{session('fail')}}
	</div>
@elseif(session('logout'))
	<div class="alert alert-success">
	{{session('logout')}}
	</div>
@endif