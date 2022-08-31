<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(Request $request)
    {
        if ($request->is('/caregory')) {
            echo 'day la category page';
        };
        return 'danh sach chuyen muc';
    }

    //hien thi danh sach
    public function index(Request $request)
    {
        // $allData = $request->all();

        // echo $request->path();

        // echo $request->url(); // ko lay dk query parameter

        // echo $request->fullUrl();
        // echo $request->method();
        // echo $request->isMethod('POST');
        // dd($request->server());
        // dd($request->header());
        // dd($request->input());
        // dd($request->input(id.name));
        // dd($request->name); // id, name ....

        // dd(request('id','gia tri mac dinh'));

        // $query = $request->query();
        // dd($query);


        return 'category';
    }

    //get one (get)
    public function getOneCategory($id)
    {
        return view('client/category/edit');
    }

    //update one (post)
    public function updateCategory($id)
    {
        return 'submid sua chuyen muc ' . $id;
    }

    // show handleAdd
    public function handleAddcategory(Request $request)
    {
        if ($request->has('category_name')) {
            $cateName = $request->category_name;
            $request->flash(); //set session clas
            return redirect(route('category.add'));
        } else {
            echo 'ko co category name';
        }
    }

    //add data (post)
    public function addCategory(Request $request)
    {
        $cateName = $request->old('category_name');
        return view('client/category/add');
    }

    //delete categoty

    public function deleteCategory($id)
    {
        return 'xoa 1 danh sach ' . $id;
    }

    // get form file
    public function getFormFile()
    {
        return view('client/category/file');
    }

    // xu lu lay thong tin file
    public function handleUploadFile(Request $request)
    {
        if($request->hasFile('photo')) {
            $file = $request->photo;
            // $path = $file->path();
            $file->store('file-images');

        } else {
            return 'da ton tai file';
        }
    }
}
