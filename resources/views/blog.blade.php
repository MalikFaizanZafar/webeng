@extends('layouts.app')
@section('content')

    <!-- Carousel -->
    <div class="container myContainer my-5 py-5">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h1 id="heading">THIS IS THE BLOG HEADING</h1>

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
                            <img src="https://guardian.ng/wp-content/uploads/2017/09/technology-news-4_0-e1504777797563-1062x596.jpg"
                                alt="Los Angeles" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="https://roarmedia.com/wp-content/uploads/2011/01/FreeGreatPicture.com-32253-technology-news.jpg"
                                alt="Chicago" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="https://techstory.in/wp-content/uploads/2018/08/245511e13ecc1888b3cf9bdc3d1c8218.jpg"
                                alt="New York" width="1100" height="500">
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
                    Subheading 1
                </h2>
                <p class="pText text-justify">
                    This is the text of first subheading.This is the text of first subheading.
                    This is the text of first subheading.This is the text of first subheading.
                    This is the text of first subheading.This is the text of first subheading.
                    This is the text of first subheading.This is the text of first subheading.
                    This is the text of first subheading.This is the text of first subheading.
                </P>
                <h3 id="blogSubHeading2">
                    Subheading 2
                </h3>
                <p class="pText text-justify">
                    This is the text of second subheading.This is the text of second subheading.
                    This is the text of second subheading.This is the text of second subheading.
                    This is the text of second subheading.This is the text of second subheading.
                    This is the text of second subheading.This is the text of second subheading.
                    This is the text of second subheading.This is the text of second subheading.
                </p>
                <h3 id="blogSubHeading2">
                    Subheading 2
                </h3>
                <p class="pText text-justify">
                    This is the text of second subheading.This is the text of second subheading.
                    This is the text of second subheading.This is the text of second subheading.
                    This is the text of second subheading.This is the text of second subheading.
                    This is the text of second subheading.This is the text of second subheading.
                    This is the text of second subheading.This is the text of second subheading.
                </p>

                <h4 id="blogSubHeading3">
                    Subheading 3
                    </h3>
                    <p class="pText text-justify">
                        This is the text of third subheading.This is the text of third subheading.
                        This is the text of third subheading.This is the text of third subheading.
                        This is the text of third subheading.This is the text of third subheading.
                        This is the text of third subheading.This is the text of third subheading.
                        This is the text of third subheading.This is the text of third subheading.
                    </p>
            </div>
        </div>
    </div>

    <!--This is comment form-->


@stop