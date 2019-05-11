@extends('layouts.app')
@section('content')
<div class="row my-5 py-5">
  <div class="col-md-4 border-right">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <img src="{{$user->picture}}" class="rounded-circle img-fluid ml-4" alt="Cinque Terre">
        <h3 class="h3 text-center mt-2">{{$user->name}}</h3>
        <h6 class="h6 text-center text-muted">{{$user->email}}</h6>
        <p class="lead text-center mt-5">
        {{$user->info}}
        </p>
        <h6 class="text-center mt-5 mb-5">
          <i class="fab fa-whatsapp fa-2x ml-3"></i>
          <i class="fab fa-facebook-f fa-2x ml-3"></i>
          <i class="fab fa-twitter fa-2x ml-3"></i>
        </h6>
      </div>
    </div>
  </div>


  <div class="col-md-8">
    <div class="d-flex justify-content-end">
      <a href="{{ url('/newblog')}}" class="btn btn-primary">Add Blog</a>
    </div>
    <h1 class="display-4">My Blogs</h1>
  </div>

</div>
</div>
@stop