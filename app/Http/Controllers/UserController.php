<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */



    public function show()
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

    /*
    public function filter($id)
    {
        $user = User::find($id);
        $posts = $user->posts()->get();

        $posts = User::with('posts')->find($id)->$posts;

        return view('posts.filter', compact('posts', 'user'));
    }*/

    public function edit(User $user)
    {

        return view('/users/edit', ['user' => $user]);
    }



    public function update(Request $request) {

        /**
         * fetching the user model
         */
        $user = Auth::user();

        //dd($user);


        /**
         * Validate request/input
         **/
        $this->validate($request, [
            'name' => 'required|max:255|unique:users,name,'.$user->id,
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'about' => 'required|max:500|unique:users,about,'.$user->id,
        ]);

        /**
         * storing the input fields name & email & about in variable $input
         * type array
         **/
        $input = $request->only('name','email', 'about');



        /**
         * Accessing the update method and passing in $input array of data
         **/
        $user->update($input);
        //dd($input);

        /**
         * after everything is done return them pack to /profile/ uri
         **/
        return back();
    }

    public function index()
    {
        $users = User::get();
        return view('users',compact('users'));
    }
    public function change_status(Request $request, User $user)
    {
        //dd($user);

        // Validate posted form data
        $validated = $request->validate([
            'status' => 'integer|required',
        ]);

        if (!$validated) { return redirect()->back();}
        $user->update($request->all());


        return redirect()->back();

    }


}
