<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $message = "Hello world";
        return view('index',compact('message'));
    }
}