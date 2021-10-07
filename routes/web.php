<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/*Route::get ('/about', function () {
    echo "hello?";
});*/

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);


use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
/*Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'post'], function ()  {
    return view('posts.post');
});*/

//Route::get('/posts/{post}', 'PostsController@show');
//Route::get('/posts/{slug}', [UserController::class, 'show']);

/*Route::get('posts/{post}', function($slug) {
    //return $slug;
   $path = $post = file_get_contents(__DIR__ . "/../resources/posts/{$slug}.html");

   if(! file_exists($path)) {
       dd('not found');
   }
    return view('post', [
        'post' => $post
    ]);
});*/

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

//Route::get('/posts', [\App\Http\Controllers\PostController::class, 'posts.post'])->middleware('auth');

//Route::get('/posts2', [PostController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('categories/{category}', function(Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);



});

Route::get('title/{title}', function(Title $title) {
    return view('posts', [
        'posts' => $title->posts
    ]);

});

