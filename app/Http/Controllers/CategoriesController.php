<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        return 'danh sach chuyen muc';
    }

    //hien thi danh sach
    public function index()
    {
        return view('client/category/list');
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
    public function handleAddcategory()
    {
        return 'dang xu ly chuyen muc';
    }
    //add data (post)
    public function addCategory()
    {
        return view('client/category/add');
    }

    //delete categoty

    public function deleteCategory($id)
    {
        return 'xoa 1 danh sach ' . $id;
    }
}
