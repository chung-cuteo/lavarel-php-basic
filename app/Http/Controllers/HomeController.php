<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $title = 'hoc lap trinh web php';
        // return view('home', compact('title'));
        return view('home')->with('title', $title);
    }

    public function getId($id)
    {
        return 'get news ' . $id;
    }
}
