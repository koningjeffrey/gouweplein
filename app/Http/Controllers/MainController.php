<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('front');
    }

    function stores(){
    /*
     * I would make a model and migration for a Store table.
     * Collect data from that store. With the $id for the route and the image url with extension
     * $shops = Store::where('type', 'shop')->get();
     * $cafes = Store::where('type', 'cafe')->get();
     */
        return view('stores', ['stores'=>[1=>'Bakker Ameland', 2=>'Kees Bakfietsen', 3=>'Café de Plee']]);
    }

    function store($id){
        // $store = Store::findOrFail($id);
        // add store var to return
        return view('store');
    }

    function map(){
        return view('map');
    }

    function news(){
        return view('news');
    }
}
