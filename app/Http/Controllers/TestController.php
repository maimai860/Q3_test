<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($param)
    {
        $item = ['param' => $param];
        return view('index',$item);
    }
}