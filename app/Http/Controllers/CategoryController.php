<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id)
    {
        //dd($Request, $id);
        //dd($post);

        $posts = Category::with('posts')->find($id)->posts;
    }
}
