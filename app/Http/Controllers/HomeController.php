<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];

    public function index()
    {
        $this->data['title'] = 'hoc lap trinh lavarel';
        return view('clients/home', $this->data);
    }

    public function products()
    {
        $this->data['title'] = "product title";
        return view('clients.product', $this->data);
    }

    public function getAddForm()
    {
        $this->data['title'] = "them san pham";
        return view('clients.add', $this->data);
    }

    public function handleAddproduct(Request $request)
    {
        dd($request);
    }

    public function handlePutproduct(Request $request)
    {
        dd($request);
    }

    public function getDemoResponse()
    {
        $response = response('message', 200);

        $response->header('Content-Type', 'text/plain');
        dd($response);
    }

    public function downloadImg(Request $request)
    {
       if(!empty($request->image)) {
        $img = trim($request->image);
        // return response()->download($img); // danh cho file noi bo
        $filename = 'img'.uniqid().'jpg';
        return response()->streamDownload(function() use ($img) {
          $imgContent = file_get_contents($img);
          echo  $imgContent;
        }, $filename);
       }
    }
}
