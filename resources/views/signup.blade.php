@extends('layouts.app')
@section('content')
<div class="signup-form rounded my-5 py-5" style="background-color:#ec2c2ce3;">
	<form action="/signup" enctype="multipart/form-data" method="post">
	{{ csrf_field() }}
		<div class="form-header" style="background-color:#ec2c2ce3;">
			<h2>Sign Up</h2>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" required="required">
		</div>
		<div class="form-group">
			<label>Email Address</label>
			<input type="email" class="form-control" name="email" required="required">
		</div>
		<!-- <div class="form-group">
			<label for="role">Blog Topic</label>
			<select class="form-control" id="role" name="role">
				<option value="Author">Author</option>
				<option value="User">User</option>
			</select>
		</div> -->
		<div class="form-group">
    <label for="info">Basic Info</label>
    <textarea class="form-control" id="info" rows="3" name="info"></textarea>
  </div>
		<div class="form-group">
			<label for="image">Profile Picture</label>
			<input type="file" class="form-control-file" id="image" name="user_image" placeholder="Some Description Here">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" required="required">
		</div>
		<div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
		</div>
	</form>
	<div class="text-center small" style="color:white">Already have an account? <a href="{{url('signin')}}" style="color:white">Login here</a></div>
</div>
@stop