<!DOCTYPE html>
<html>
<head>
	<title>PointsKeeda</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	{{HTML::style('/font-awesome/css/font-awesome.min.css')}}
	{{ HTML::style('/css/style.css') }}

</head>
<body>
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ URL::to('/') }}">PointsKeeda</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					@if (Auth::check())
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome {{ ucwords(Auth::user()->username) }} <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ URL::to('admin') }}">Admin Panel</a></li>
							<li><a href="{{ URL::to('logout') }}">Logout</a></li>
						</ul>
					@else
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin Panel <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="{{ URL::to('register') }}">Register</a></li>
						<li><a href="{{ URL::to('login') }}">Login</a></li>
					</ul>
					@endif
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
	@yield('content')
</div>
<!-- Page Specific Plugins -->
{{HTML::script('/js/tablesorter/jquery.tablesorter.js')}}
{{HTML::script('/js/tablesorter/tables.js')}}
</body>
</html>