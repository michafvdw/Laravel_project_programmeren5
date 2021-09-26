<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Mijn posts';
        //get data from the te model
        $posts = Posts::all();
        //dd($posts);

        return view('posts.index', compact('title', 'posts'));
    }
}
