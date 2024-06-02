<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsiteController extends Controller
{
    public function home(){
        $title="Healet homepage";
        return view('home',compact('title'));
    }

    public function shop(){
        $title="shop";
        return view('shop',compact('title'));
    }

    public function blog(){
        $title="blog";
        return view('blog',compact('title'));
    }

    public function aboutus(){
        $title="aboutus";
        return view('aboutus',compact('title'));
    }

}
