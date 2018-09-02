<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function addCategory()
    {
        return view('dashboard.add-post.addCategory');
    }

     public function post()
     {
         $data = Category::all();
         return view('dashboard.add-post.post',compact('data'));
     }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

//        $data = Category::created($request->all());
        $data = new Category();
        $data->name = $request->name;
        $data->save();

        flash("{$data->name} successfully insert")->success();
        return redirect()->back();
    }


    public function show($id)
    {

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
