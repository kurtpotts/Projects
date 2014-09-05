@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-9 col-xs-12 pull-right img-rounded" style="padding:10px; background: rgba(255, 255, 255, .8);">
			<div><h1 style="margin-top:0px !important;">Welcome back.</h1></div>
				<div>
				<form id="signin" method="POST" action="/login" role="form">
				  <div class="form-group">
				    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
	 			  </div>
	 			  <button type="submit" class="btn btn-primary pull-right">Sign in</button>
	 			  <div class="checkbox" style="margin-bottom:25px;">
				  <label>
				    <input type="checkbox"> <storng>Remember me</strong> &middot; <a href="#">Forgot password</a>
				  </label>
  				  </div>
	 			</form>

	 			@if (Session::get('login'))
				<div class="alert alert-danger" role="alert">{{{ Session::get('login') }}}</div>
				@endif

	 			<hr>
	 			<div><h1>New around here?</h1></div>
				<div>
				<form id="signup" method="POST" action="/register" role="form">
				  <div class="form-group">
				    <input type="name" class="form-control" id="Inputfull_name1" name="full_name" placeholder="Full Name">
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="InputPassword1" name="password" placeholder="Password">
	 			  </div>
	 			  <button type="submit" class="btn btn-primary pull-right">Sign up</button>
	 			</form>
	 			
				<div style="margin-bottom:20px;">&nbsp;</div>
				@if (Session::get('register'))
				<div class="alert alert-danger" role="alert">{{{ Session::get('register') }}}</div>
				@endif
	 			</div>
		</div>

	</div>
@stop