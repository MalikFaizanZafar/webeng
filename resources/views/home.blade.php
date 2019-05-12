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
    <h4 class="display-6">My Blogs</h4>
    <div class="row mt-5">
      @foreach ($blogs as $blog)
      <div class="card col-md-3 mx-4 col-sm-6 col-xs-12 p-0 mb-5">
        <img class="card-img-top" src="{{$blog->image_url}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$blog->title}}</h5>
        </div>
        <div class=" mr-2 mb-2 text-muted d-flex justify-content-end">
          <a href="{{ URL::to('blog/' . $blog->blog_id) }}" class="btn btn-primary">View Blog</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</div>
</div>
@stop