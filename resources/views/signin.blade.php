@extends('layouts.app')
@section('content')
<div class="container h-100 my-5 py-5">
  <div class="d-flex justify-content-center h-100  my-5 py-5">
    <div class="user_card">
      <div class="d-flex justify-content-center">
        <div class="brand_logo_container">
          <img src="https://www.softmaker.com/images/ofahd/textmaker/textmaker.png" class="brand_logo" alt="Logo">
        </div>
      </div>
      <div class="d-flex justify-content-center form_container">
        <form action="/signin" method="post">
          {{ csrf_field() }}
          <div class="input-group mb-3">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="email" name="email" class="form-control input_user" value="" placeholder="Email">
          </div>
          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
          </div>
          @if($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong style="font-size: 12px;">{{$errors->first()}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <div class="d-flex justify-content-center mt-3 login_container">
            <button type="submit" class="btn login_btn">Login</button>
          </div>
        </form>
      </div>
      <div class="mt-4">
        <div class="d-flex justify-content-center links">
          Don't have an account? <a href="{{url('signup')}}" class="ml-2">Sign Up</a>
        </div>
        <!-- <div class="d-flex justify-content-center links">
          <a href="#">Forgot your password?</a>
        </div> -->
      </div>
    </div>
  </div>
</div>
@stop