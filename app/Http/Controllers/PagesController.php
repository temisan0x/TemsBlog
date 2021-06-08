<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {   
        $title = "Hey Temisan, the richest man alive";
        return view('pages.home')->with('title', $title);
    }
    
    public function index()
    {
        $title = "What A Time To Be Alive";
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Welcome to Laravel';
        return view('pages.about')->with('title', $title);
    }
}
