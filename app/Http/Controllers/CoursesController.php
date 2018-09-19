<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    
    

    

    public function courses()
    {


        return view('front_end.view.courses');
    }

    
    public function info()
    {


        return view('front_end.view.course_info');
    }
    public function instructor()
    {


        return view('front_end.view.instructors');
    }



}
