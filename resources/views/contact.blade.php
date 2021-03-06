@extends('layout.app')

@section('content')
<h1>Note</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
		{{Form::label('name', 'Name')}}
		{{Form::text('name', '',['class'=>'form-control','placeholder'=>'Enter name'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'E-Mail Address')}}
		{{Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter email address'])}}
	</div>
	<div class="form-group">
		{{Form::label('message', 'Message:')}}
		{{Form::textArea('message', '',['class'=>'form-control','placeholder'=>'Enter message'])}}
	</div>
	<div>
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	</div>
{!! Form::close() !!}
@endsection