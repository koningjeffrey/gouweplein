<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('front');
    }

    function stores(){
        return view('stores');
    }

    function map(){
        return view('map');
    }

    function news(){
        return view('news');
    }
}
