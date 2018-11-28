<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	

	<a class="navbar-brand" href="/">
	
	@if(session('username')!='')
	{{session('username')}}
	@else
		Guest
	@endif
	
	</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="{{Request::is('/') ? 'active':''}}">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="{{Request::is('about') ? 'active':''}}">
					<a class="nav-link" href="/about">About</a>
				</li>
				<li class="{{Request::is('contact') ? 'active':''}}">
					<a class="nav-link" href="/contact">Form</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Extra</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="/messages">Messages</a>
					</div>
				</li>
				
				<button class="btn btn-outline-success my-2 my-sm-0" onclick="location.href='/logout'">Logout</button>
				
			</ul>
		
	</div>
</nav>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>