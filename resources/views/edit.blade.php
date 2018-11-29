@extends('layout.app')

@section('content')
<h1>Edit Note</h1>
{!! Form::open(['action' => ['PostsController@update', $message->id], 'method'=>'POST']) !!}
    <div class="form-group">
		{{Form::label('name', 'Name')}}
		{{Form::text('name', $message->name,['class'=>'form-control','placeholder'=>'Enter name'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'E-Mail Address')}}
		{{Form::text('email', $message->email,['class'=>'form-control','placeholder'=>'Enter email address'])}}
	</div>
	<div class="form-group">
		{{Form::label('message', 'Message:')}}
		{{Form::textArea('message', $message->message,['class'=>'form-control','placeholder'=>'Enter message'])}}
	</div>
	<div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Edit', ['class'=>'btn btn-primary'])}}
	</div>
{!! Form::close() !!}

{!! Form::open(['action' => ['PostsController@destroy', $message->id], 'method'=>'POST']) !!}
	<br/>
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class'=>'btn btn-primary'])}}
	
{!! Form::close() !!}
			
@endsection