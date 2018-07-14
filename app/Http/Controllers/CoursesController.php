<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    
    public function index()
    {
        
        return view('front_end.view.index');
    }

    public function about()
    {
        return view('front_end.view.about');
    }

    public function courses()
    {
        return view('front_end.view.courses');
    }

    public function contact()
    {
        return view('front_end.view.contact');
    }



}
