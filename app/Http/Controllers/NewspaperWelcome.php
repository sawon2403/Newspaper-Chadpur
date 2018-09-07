<?php

namespace App\Http\Controllers;

use App\NewsPost;
use Illuminate\Http\Request;

class NewspaperWelcome extends Controller
{
    public function index()
    {
         $posts = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        return view('front_end.welcome.welcome',compact('posts'));
    }
}
