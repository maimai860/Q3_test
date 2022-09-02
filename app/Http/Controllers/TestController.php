<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($text = "Hello World")
    {
        return $text;
    }
}
