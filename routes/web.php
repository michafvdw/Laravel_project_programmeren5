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
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

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

