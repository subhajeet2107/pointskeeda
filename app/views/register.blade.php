@extends('layout')

@section('content')
<div class="container">
	<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" action="">
			<fieldset>
				<h2>Register On PointsKeeda</h2>
				<hr class="colorgraph">
				@if (!empty($errors))
					<ul>
					@foreach ($errors->all() as $message)
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>{{$message}}</strong> 
						</div>
					@endforeach
					</ul>
				@endif
				@if (!empty($auth_errors))
					<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>{{$auth_errors}}</strong> 
					</div>
				@endif
				<div class="form-group">
                    <input type="text" name="username" id="name" class="form-control input-lg" placeholder="Username">
				</div>

				
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				<div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
				</div>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" name="register" value="Register">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="{{ URL::to('login') }}" class="btn btn-lg btn-primary btn-block">Already Registered</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
@stop