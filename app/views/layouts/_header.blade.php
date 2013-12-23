<header>
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Laravel Framework</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="nav-main">
			<ul class="nav navbar-nav">
				<li><a href="{{ route('home.overview') }}">Overview</a></li>
				<li><a href="{{ route('home.getting-started') }}">Getting started</a></li>
				<li><a href="{{ route('home.pricing') }}">Pricing</a></li>
				<li><a href="{{ route('home.about') }}">About</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ route('login') }}">Log in</a></li>
				@else
				<li>
					<div class="btn-group">
						<a href="{{ route('dashboard') }}" class="btn btn-danger">{{ Auth::user()->name }}</a>
							{{-- <img src="{{ Auth::user()->profilePhoto->link('micro') }}" alt="{{ Auth::user()->profilePhoto->description }}"> --}}
						<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('users.edit', [Auth::user()->id]) }}">Edit account</a></li>
							<li><a href="{{ route('home.help') }}">Help</a></li>
							<li><a href="{{ route('logout') }}">Logout</a></li>
						</ul>
					</div>
				</li>
				
					<li class="navbar-user-link">
						<a href="{{ route('dashboard') }}">
							{{ Auth::user()->name }}
						</a>
						
					</li>
				@endif
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</header>