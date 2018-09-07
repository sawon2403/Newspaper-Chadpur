<?php

namespace App\Http\Controllers\Front_end;

use App\NewsPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function jatio()
    {
        $posts = NewsPost::where('category_id',8)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.jatio',compact('posts'));
    }

    public function antarjatik()
    {
        $posts = NewsPost::where('category_id',1)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.antarjatik',compact('posts'));
    }

    public  function chadpur()
    {
        $posts = NewsPost::where('category_id',3)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.chadpur',compact('posts'));
    }

    public  function khela()
    {
        $posts = NewsPost::where('category_id',9)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.khela',compact('posts'));
    }

    public  function rajniti()
    {
        $posts = NewsPost::where('category_id',11)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.rajniti',compact('posts'));
    }

    public  function binodon()
    {
        $posts = NewsPost::where('category_id',2)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.binodon',compact('post'));
    }

    public function islam()
    {
        $posts = NewsPost::where('category_id',7)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.Islam',compact('posts'));
    }

    public function interview()
    {
        $posts = NewsPost::where('category_id',6)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.interview',compact('posts'));
    }

    public function crime()
    {
        $posts = NewsPost::where('category_id',4)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.crime',compact('posts'));
    }

    public function motamot()
    {
        $posts = NewsPost::where('category_id',10)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.motamot',compact('posts'));
    }

    public function helth()
    {
        $posts = NewsPost::where('category_id',5)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.helth',compact('posts'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
