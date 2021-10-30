<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use Illuminate\View\View;

class UserController extends Controller
{



    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $posts = User::find(1)->posts;
        $name = 'Mijn posts';
        //get data from the te model
        $users = User::all();
        //$user = User::find($id);
        //$posts = $user->posts()->get();
        //$posts = $users->posts()->get();
        //dd($posts);

        return view('users.usershow', compact('name', 'users', 'posts'));
    }

    public function view_post($id){
        $user = User::find($id);
        $posts = $user->posts()->get();

        return view('posts/userpost', [
            'user' => $user, "posts" => $posts
            ]
        );
            //->with(array("user" => $user, "posts" => $posts));
    }

    public function filter($id)
    {
        $user = User::find($id);
        $posts = $user->posts()->get();

        $posts = User::with('posts')->find($id)->$posts;

        return view('posts.filter', compact('posts', 'user'));
    }
}
