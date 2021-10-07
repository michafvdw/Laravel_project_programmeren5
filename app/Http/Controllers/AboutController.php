<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'awserdtfgw';
        return view('about', compact('title'));
    }
}
