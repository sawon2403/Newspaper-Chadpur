<?php

namespace App\Http\Controllers\Front_end;

use App\NewsPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function jatio()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',8)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.jatio',compact('posts','time_line'));
    }

    public function antarjatik()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',1)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.antarjatik',compact(['posts','title','time_line']));
    }

    public  function chadpur()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',3)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.chadpur',compact(['posts','title','time_line']));
    }

    public  function khela()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',9)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.khela',compact(['posts','title','time_line']));
    }

    public  function rajniti()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',11)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.rajniti',compact(['posts','title','time_line']));
    }

    public  function binodon()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',2)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.binodon',compact(['posts','title','time_line']));
    }

    public function islam()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',7)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.Islam',compact(['posts','title','time_line']));
    }

    public function interview()
    {    $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',6)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.interview',compact(['posts','title','time_line']));
    }

    public function crime()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',4)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.crime',compact(['posts','title','time_line']));
    }

    public function motamot()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',10)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.motamot',compact(['posts','title','time_line']));
    }

    public function helth()
    {
        $time_line = NewsPost::orderBy('id', 'desc')->take(1)->limit(1)->offset(0)->where('status',1)->get();
        $title = NewsPost::orderBy('id', 'desc')->take(8)->limit(8)->offset(0)->where('status',1)->get();
        $posts = NewsPost::where('category_id',5)->limit(4)->offset(0)->where('status',1)->get();
        return view('front_end.category.helth',compact(['posts','title','time_line']));
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

        $spost = NewsPost::find($id);
       return view('front_end.partials.individual-post',compact('spost'));
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
