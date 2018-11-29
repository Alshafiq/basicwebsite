@extends('layout.app')

@section('content')
<h1>Quick Note!</h1>
	<br/>
	<p>
		Quick Note is a website to store simple note.
		A note is a short letter.
	</p>
	<p>
		
	</p>
	<p>
		A note is something that you write down to remind yourself of something.
	</p>
	<p>
		In a book or article, a note is a short piece of additional information.
	</p>
@endsection

@section('sidebar')
@parent
<br/>
<h3>Extra Info</h3>
<p>
	Laravel 5.7 continues the improvements made in Laravel 5.6 by introducing Laravel Nova, optional email verification to the authentication scaffolding, support for guest users in authorization gates and policies, console testing improvements, Symfony dump-server integration, localizable notifications, and a variety of other bug fixes and usability improvements.
</p>
@endsection