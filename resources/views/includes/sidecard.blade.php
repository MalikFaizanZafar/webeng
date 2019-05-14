<div class="card">
  <div class="card-header bg-dark text-white">
    Latest Blogs
  </div>
  <ul class="list-group list-group-flush">
    @foreach ($blogs as $blog)
    <li class="list-group-item d-flex justify-content-around"> <span class="font-weight-light w-75">{{$blog->title}}</span>
      <a href="{{ URL::to('blog/' . $blog->blog_id) }}" class="w-25">View Blog</a>
    </li>
    @endforeach
  </ul>
</div>