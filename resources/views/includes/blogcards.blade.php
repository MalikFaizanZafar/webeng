<div class="row">
@foreach ($blogs as $blog)
<div class="card col-md-3 mx-5 col-sm-6 col-xs-12 p-0 mb-5">
    <img class="card-img-top" src="{{$blog->image_url}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$blog->title}}</h5>
      <p class="card-text">{{substr($blog->description, 0, 100)}}</p>
    
    </div>
    <div class=" mr-2 mb-2 text-muted d-flex justify-content-end">
    <a href="{{ URL::to('blog/' . $blog->blog_id) }}" class="btn btn-primary">View Blog</a>
  </div>
  </div>
@endforeach
</div>