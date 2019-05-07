<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $blogs = DB::select("select * from blogs");
    return view('welcome',['blogs' => $blogs]);
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/newblog', function () {
    // $image_url = 'https://images.pexels.com/photos/373543/pexels-photo-373543.jpeg';
    // $description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';
    // $title = 'Blog Title';
    // for ($x = 0; $x <= 5; $x++) {
    //     DB::insert('insert into blogs (title, image_url, description, author_id, date_created) values (:title, :image_url, :description, :author_id, :date_created)', ['title' => 'blog title', 'image_url' => $image_url, 'description' => $description, 'author_id' => 3, 'date_created' => '2019-05-10 23:59:59']);
    // }
    return view('createblog');
});

Route::post('/newblog', function (Request $request) {
    $title = $request->input('title');
    $topic = $request->input('topic');
    $description =  $request->input('description');
    $image_url = 'https://images.pexels.com/photos/373543/pexels-photo-373543.jpeg';
    DB::insert('insert into blogs (title, image_url, description, author_id, topic, date_created) values (:title, :image_url, :description, :author_id, :topic, :date_created)', ['title' => $title, 'image_url' => $image_url, 'description' => $description, 'author_id' => 3, 'topic' => $topic,'date_created' => '2019-05-10 23:59:59']);
    
    $blogs = DB::select("select * from blogs");
    return view('welcome',['blogs' => $blogs]);
});