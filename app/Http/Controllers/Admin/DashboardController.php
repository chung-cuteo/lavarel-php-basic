<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //su dung session check login
    }
    public function index() {
        $html = '<h2>dashboard</h2>';
        return $html;
    }
}
