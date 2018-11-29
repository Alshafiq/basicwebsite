@extends('layout.app')

@section('content')
<h1>Login</h1>

<div class="center">
	<br/>
	<form action="/login" method="post">
	   <input type="hidden" name="_token" value="{{ csrf_token() }}">
	   Username : <input type="text" name="name"><br/>
	   <br/>
	   Password : <input type="password" name="password"><br/>
	   <br/>
	   <input type="submit" name="login" value="Login">
	   <br/>
	</form>
</div>
@endsection