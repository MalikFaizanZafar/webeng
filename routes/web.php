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

Route::get('/$blogId', function () {
    $blog = DB::select("select * from blogs where blog_id");
    return view('welcome',['blogs' => $blog]);
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $password =  $request->input('password');
    $role = $request->input('role');
    $picture = 'https://i.dailymail.co.uk/i/pix/2017/04/20/13/3F6B966D00000578-4428630-image-m-80_1492690622006.jpg';
    $info = $request->input('info');
    DB::insert('insert into users (name, email, password, picture, info, role) values (:name, :email, :password, :picture, :info, :role)', ['name' => $name, 'email' => $email, 'password' => $password, 'picture' => $picture, 'info' => $info, 'role' => $role]);
    $user = DB::table('users')->where('email', '=', $email)->get();
    return view('home', ['user' => $user[0]]);
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

Route::get('/test', function () {
    $user = DB::table('users')->where('email', '=', "malikfaizanzafar1993@gmail.cm")->get();
    return $user;
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/newblog', function () {
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