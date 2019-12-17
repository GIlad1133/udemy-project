<?php
use App\Post;
use Illuminate\Support\Facades\Log;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/about/{id}/{name}', function($id, $name){
//    return "hi id " . $id . " " . $name;
//});
//
//Route::get('admin/posts', array( 'as' =>'admin.home', function(){
//    $url = route('admin.home');
//    return "this url is " . $url;
//}));

//
//Route::get('/', 'PostsController@index');
//Route::get('/contact', 'PostsController@showContactView');
//Route::get('post/{id}/{name}/{pass}', 'PostsController@showPost');
//Route::get('/insert', function (){
//
//    DB::insert('insert into posts(title, body) values(?, ?)', ['php with laravel1', 'nada nada nada nada1']);
//});
//
//Route::get('/read/{id}', function ($id){
//
//   $results = DB::select('select * from posts where id =?', [$id]);
//
//   foreach ($results as $result){
//
//       return $result->title;
//    }
//
//});
//Route::get('/read', function (){
//
//    $posts = Post::all();
//    foreach ($posts as $post){
//        echo   "<br>" . $post->title;
//
//    }
//
//});
//Route::get('/find', function (){
//
//    $posts = Post::find(1);
//
//        return $posts->title;
//
//});
Route::get('/thank', function(){
    $alltitles = Post::all();
    return view('posts.after-send-request', compact('alltitles'));
});
Route::resource('/posts', 'PostsController');
Route::get('posts/create', function(){
    return view('posts.create');
});



//Route::get('posts/thankyou2', function()
//{
//    return view('posts.after-send-request');
//});
