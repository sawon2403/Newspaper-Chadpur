<?php

namespace App\Http\Controllers;

use App\NewsPost;
use Illuminate\Http\Request;

class NewspaperWelcome extends Controller
{
    public function index()
    {
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $posts = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        return view('front_end.welcome.welcome',compact(['time_line','title','posts']));
    }
}
