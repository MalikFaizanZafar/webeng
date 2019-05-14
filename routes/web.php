<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
    return view('welcome', ['blogs' => $blogs]);
});

Route::get('/$blogId', function () {
    $blog = DB::select("select * from blogs where blog_id");
    return view('welcome', ['blogs' => $blog]);
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $password =  $request->input('password');
    // $role = $request->input('role');
    $role = "Author";
    $filenameWithExt = $request->file('user_image')->getClientOriginalName();
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    $extension = $request->file('user_image')->getClientOriginalExtension();
    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
    $path = $request->file('user_image')->storeAs('/users', $fileNameToStore);
    $picture = 'http://127.0.0.1:8000/storage/users/' . $fileNameToStore;
    $info = $request->input('info');
    DB::insert('insert into users (name, email, password, picture, info, role) values (:name, :email, :password, :picture, :info, :role)', ['name' => $name, 'email' => $email, 'password' => $password, 'picture' => $picture, 'info' => $info, 'role' => $role]);
    $user = DB::table('users')->where('email', '=', $email)->get();
    $blogs = DB::table('blogs')->where('user_id', '=', $user[0]->user_id)->get();
    Session::put('userAuth', true);
    Session::put('userId', $user[0]->user_id);
    return view('home', ['user' => $user[0], 'blogs' => $blogs]);
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/home', function () {
    $user = DB::table('users')->where('user_id', '=', Session::get('userId'))->get();   
    if (count($user) == 0) {
        return view('signin');
    } else {
        $blogs = DB::table('blogs')->where('user_id', '=', $user[0]->user_id)->get();
        return view('home', ['user' => $user[0], 'blogs' => $blogs]);
    }
});

Route::get('/logout', function () {
    Session::forget('userAuth');
    Session::forget('userId');
    $blogs = DB::select("select * from blogs");
    return view('welcome', ['blogs' => $blogs]);
});

Route::post('/signin', function (Request $request) {
    $email = $request->input('email');
    $password =  $request->input('password');
    $user = DB::table('users')->where('email', '=', $email)->get();
    if (count($user) == 0) {
        return Redirect::back()->withErrors(['User Does not Exist. Please SignUp']);
    } else {
        if ($user[0]->password == $password) {
            Session::put('userAuth', true);
            Session::put('userId', $user[0]->user_id);
            $userAuth = Session::get('userAuth');
            $blogs = DB::table('blogs')->where('user_id', '=', $user[0]->user_id)->get();
            return view('home', ['user' => $user[0], 'blogs' => $blogs]);
        } else {
            return Redirect::back()->withErrors(['Incorrect Password. Please Try Again']);
        }
    }
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog/{blogId}', function ($blogId) {
    $blog = DB::table('blogs')->where('blog_id', '=', $blogId)->get();
    $comments = DB::table('comments')->join('users', 'comments.user_id', '=', 'users.user_id')->where('blog_id', '=', $blogId)->get();
    return view('blog', ['blog' => $blog[0], 'comments' => $comments]);
});

Route::post('/blog', function (Request $request) {
    $user_id = $request->input('user');
    $blog_id = $request->input('blog');
    $comment =  $request->input('comment');
    DB::insert('insert into comments (user_id, description, blog_id) values (:user_id, :description, :blog_id)', ['user_id' => $user_id, 'description' => $comment, 'blog_id' => $blog_id]);
    return redirect('blog/' . $blog_id);
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
    $user = $request->input('user');
    $description =  $request->input('description');
    $filenameWithExt = $request->file('blog_image')->getClientOriginalName();
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    $extension = $request->file('blog_image')->getClientOriginalExtension();
    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
    $path = $request->file('blog_image')->storeAs('/blogs', $fileNameToStore);
    $image_url = 'http://127.0.0.1:8000/storage/blogs/' . $fileNameToStore;
    DB::insert('insert into blogs (title, image_url, description, user_id, topic, date_created) values (:title, :image_url, :description, :user_id, :topic, :date_created)', ['title' => $title, 'image_url' => $image_url, 'description' => $description, 'user_id' => $user, 'topic' => $topic, 'date_created' => '2019-05-10 23:59:59']);

    $blogs = DB::select("select * from blogs");
    return view('welcome', ['blogs' => $blogs]);
});
