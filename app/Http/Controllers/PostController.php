<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
//use App\Http\Controllers\Auth\LoginController;
//use AuthenticatesUsers;

//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function edit(Post $post)
    {
        return view('/posts/edit', ['post' => $post]);
    }



    public function update(Request $request, Post $post)
    {

        // Validate posted form data
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);

        if (!$validated) { return redirect()->back();}
        $post->update($request->all());

        //dd($post, $request->all());

        // Redirect the user to the created post woth an updated notification
        return redirect()->back();

    }

    public function destroy(Post $post)
    {
        // Delete the specified Post
        $post->delete();

        // Redirect user with a deleted notification
        return "Post successfully saved";
    }

    /*
    public function category(Request $Request, $category)
    {
        $category = Post::all().category;
        dd($Request, $category);
        //dd($post);


        return view('posts.category',   ['category' => $category]);
        //return view('posts.post', ['post' => $post]);
    }*/

   public function create(){

       $user = \Auth::user();
        if ($user->logincount > 5) {

            return view('posts/create');
        }
    }

    public function store(Request $request)
    {
        //dd($request);
        //this gives us the currently logged in user
        $user = $request->user();

        //this fetches all the post data from the form
        //we can post all the data from post and not get an error
        // because laravel handles this in Post model through fillable array
        //Laravel will only save the data from the key that is in the fillables array
        $formData = $request->all();

        // we need a seo bot readable url, this will create a slug based on title
        $formData['slug'] = Str::slug($request->get('title'));

        //this creates posts based on the relation from user to post
        //meaning the id of user is automatically populated and saved in the user_id column of posts table
        $user->posts()->create($formData);

        return "Post successfully saved";
    }

}
