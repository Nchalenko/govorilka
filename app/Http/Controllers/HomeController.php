<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }


    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function uploader()
    {
        return view('uploader');
    }

    public function save_image()
    {
        error_log(print_r($_POST,1));
        error_log(print_r($_FILES,1));
    }
}
