<?php

namespace App\Http\Controllers;
use App\Models\Post;
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
        $posts = Post::all();
        //dd($posts);

        return view('posts.index', compact('name', 'posts'));
    }

    public function show(Post $post)
    {
        //dd($Request, $id);
        //dd($post);

        return view('posts.post', ['post' => $post]);
    }

    public function category(Request $Request, $category)
    {
        $category = Post::all().category;
        dd($Request, $category);
        //dd($post);


        return view('posts.category',   ['category' => $category]);
        //return view('posts.post', ['post' => $post]);
    }

    public function create(){
        return view('posts.create');
    }

}
