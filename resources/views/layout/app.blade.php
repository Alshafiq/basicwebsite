<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laravel</title>
		<link rel="stylesheet" href="/css/app.css">
		
		
		
	</head>
	<body>
		@include('inc.navbar')
		
		<div class="container">
		
			@if(Request::is('/'))
				@include('inc.showcase')
			@endif
			
			<div class="row">
				<div class="col-md-8 col-lg-8">
					
					@yield('content')
					<br/>
					@include('inc.messages')
				</div>
				
				@if(!Request::is('login') && !Request::is('contact') && !Request::is('messages'))
				<div class="col-md-4 col-lg-4">
					@include('inc.sidebar')
				</div>
				@endif
			</div>
		</div>
		
		<footer id="footerID" class="text-center">
			<p>
				Copyright 2018 &copy; Alshafiq Hasbi
			</p>
		
		</footer>
	</body>
</html>