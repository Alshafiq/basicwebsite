@extends('layout.app')

@section('content')
<h1>Home</h1>
	<h2>
		Just sample of text.
	</h2>
	<p>
		Expressive, beautiful syntax.
		Value elegance, simplicity, and readability? You’ll fit right in. Laravel is designed for people just like you. If you need help getting started, check out Laracasts and our great documentation.
	</p>
	<p>
		Tailored for your team.
		Whether you're a solo developer or a 20 person team, Laravel is a breath of fresh air. Keep everyone in sync using Laravel's database agnostic migrations and schema builder.
	</p>
	<p>
		Modern toolkit. Pinch of magic.
		An amazing ORM, painless routing, powerful queue library, and simple authentication give you the tools you need for modern, maintainable PHP. We sweat the small stuff to help you deliver amazing applications.
	</p>
@endsection

@section('sidebar')
@parent
<br/>
<p>This is appended outside of parent sidebar(shared file). This text is defined under sidebar 'section' in this home view.</p>
@endsection