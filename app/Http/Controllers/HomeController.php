<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return view('contents.index');
    }

    public function quanhuyen(){
        return view('contents.quanhuyen');
    }
}
