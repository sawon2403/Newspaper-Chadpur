<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewspaperWelcome extends Controller
{
    public function index()
    {
        return view('front_end.welcome.welcome');
    }
}
