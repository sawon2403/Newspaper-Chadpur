<?php

namespace App\Http\Controllers\Front_end;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function jatio()
    {
        return view('front-end.category.jatio');
    }

    public function antarjatik()
    {
        return view('front-end.category.antarjatik');
    }

    public  function chadpur()
    {
        return view('front-end.category.chadpur');
    }

    public  function khela()
    {
        return view('front-end.category.khela');
    }

    public  function rajniti()
    {
        return view('front-end.category.rajniti');
    }

    public  function binodon()
    {
        return view('front-end.category.binodon');
    }

    public function islam()
    {
        return view('front-end.category.Islam');
    }

    public function interview()
    {
        return view('front-end.category.interview');
    }

    public function crime()
    {
        return view('front-end.category.crime');
    }

    public function motamot()
    {
        return view('front-end.category.motamot');
    }

    public function helth()
    {
        return view('front-end.category.helth');
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
