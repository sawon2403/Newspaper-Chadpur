<?php

namespace App\Http\Controllers;

use App\NewsPost;
use Illuminate\Http\Request;

class NewspaperWelcome extends Controller
{
    public function index()
    {
        $posts = NewsPost::all();
        return view('front_end.welcome.welcome',compact('posts'));
    }
}
