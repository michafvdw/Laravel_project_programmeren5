<?php

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
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
//Route::get('/posts2', [PostController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
