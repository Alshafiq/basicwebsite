@extends('layout.app')

@section('content')
<h1>Notes</h1>
	@if(count($messages)>0)
		@foreach($messages as $message)
		<ul class="list-group">
			<li class="list-group-item">Name:<a href="/posts/{{$message->id}}/edit">{{$message->name}}</a></li>
			<li class="list-group-item">Email:{{$message->email}}</li>
			<li class="list-group-item">Message:{{$message->message}}</li>
		</ul>
		<br/>
		@endforeach
	@endif
@endsection
