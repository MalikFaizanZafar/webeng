@extends('layouts.app')
@section('content')
	<div class="signup-form rounded my-5 py-5" style="background-color:#ec2c2ce3;">
		<form action="/examples/actions/confirmation.php" method="post">
			<div class="form-header" style="background-color:#ec2c2ce3;">
				<h2>Sign Up</h2>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" required="required">
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="email" required="required">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" required="required">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="confirm_password" required="required">
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a
						href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
			</div>
		</form>
		<div class="text-center small" style="color:white">Already have an account? <a href="#"
				style="color:white">Login here</a></div>
	</div>
@stop