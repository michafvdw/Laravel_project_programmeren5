<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function index()
    {
        $name = 'Mijn posts';
        //get data from the te model
        $posts = Posts::all();
        //dd($posts);

        return view('posts.index', compact('name', 'posts'));
    }

    public function show(Posts $post)
    {
        //dd($Request, $id);
        //dd($post);

        return view('posts.post', ['post' => $post]);
    }
}
