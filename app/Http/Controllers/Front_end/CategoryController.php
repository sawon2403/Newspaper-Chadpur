<?php

namespace App\Http\Controllers\Front_end;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function jatio()
    {
        return view('front_end.category.jatio');
    }

    public function antarjatik()
    {
        return view('front_end.category.antarjatik');
    }

    public  function chadpur()
    {
        return view('front_end.category.chadpur');
    }

    public  function khela()
    {
        return view('front_end.category.khela');
    }

    public  function rajniti()
    {
        return view('front_end.category.rajniti');
    }

    public  function binodon()
    {
        return view('front_end.category.binodon');
    }

    public function islam()
    {
        return view('front_end.category.Islam');
    }

    public function interview()
    {
        return view('front_end.category.interview');
    }

    public function crime()
    {
        return view('front_end.category.crime');
    }

    public function motamot()
    {
        return view('front_end.category.motamot');
    }

    public function helth()
    {
        return view('front_end.category.helth');
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
