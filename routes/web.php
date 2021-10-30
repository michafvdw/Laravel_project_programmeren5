<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
//use Illuminate\Http\Request;
//use App\Models\User;
use App\Models\Post;
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

Route::any ( '/search', function () {
    $q = Request::input ( 'q' );
    $post = Post::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'body', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $post ) > 0)
        return view ( '/posts/search' )->withDetails ( $post )->withQuery ( $q );
    else
        return view ( '/posts/search' )->withMessage ( 'No Details found. Try to search again !' );
} );



Route::get('/about', [AboutController::class, 'index']);


use App\Http\Controllers\UserController;

//Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/usershow', [UserController::class, 'show']);
Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/userpost/{post}', [UserController::class, 'view_post'])->name('users.view_post');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::patch('/update/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('/edit/{post}', [PostController::class, 'edit'])->name('posts.edit')->middleware('admin');
Route::get('/delete/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


