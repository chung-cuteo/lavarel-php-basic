<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data= [];

    public function index()
    {
        $this->data['title'] = 'hoc lap trinh lavarel';
        return view('clients/home', $this->data);
    }
    public function products() {
        $this->data['title'] = "product title";
        return view('clients.product', $this->data);
    }
}
