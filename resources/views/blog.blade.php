@extends('layouts.app')
@section('content')

<!-- Carousel -->
<div class="container myContainer my-5 py-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <h1 id="heading">{{$blog->title}}</h1>

            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{$blog->image_url}}" alt="Los Angeles" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="https://roarmedia.com/wp-content/uploads/2011/01/FreeGreatPicture.com-32253-technology-news.jpg" alt="Chicago" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="https://techstory.in/wp-content/uploads/2018/08/245511e13ecc1888b3cf9bdc3d1c8218.jpg" alt="New York" width="1100" height="500">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- Blog paragraph -->
<div class="container myContainer">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h2 id="blogSubHeading1">
                {{$blog->topic}}
            </h2>
            <p class="pText text-justify">
                {{$blog->description}}
            </P>
        </div>
    </div>
</div>
<!--This is comment form-->
@if(Session::has('userAuth'))
<div class="container mt-5">
    <h4>Have a Say About This Blog</h4>
    <form action="/blog" method="post">
        {{ csrf_field() }}
        <div class="form-group" style="display:none;">
            <label>User</label>
            <input type="text" class="form-control" name="user" value="10" required="required">
        </div>
        <div class="form-group" style="display:none;">
            <label>Blog</label>
            <input type="text" class="form-control" name="blog" value="{{$blog->blog_id}}" required="required">
        </div>
        <div class="form-group">
            <label for="comment">Your Comment:</label>
            <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
        </div>
        <div class="form-group d-flex justify-content-end">
            <button type="submit" class="btn btn-primary btn-block w-25">Submit</button>
        </div>
    </form>
</div>
@endif
<div class="container mt-5">
<h3>What People are Saying About This Blog</h3>
    <div class="row mt-5">
        @foreach ($comments as $comment)
        <div class="col-md-12 my-2">
            <div class="card">
                <div class="card-body">
                    
                    <blockquote class="blockquote text-left">
                    <footer class="blockquote-footer">{{ $comment->name }}</footer>
                        <p class="mt-2">{{ $comment->description }}</p>
                    </blockquote>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop