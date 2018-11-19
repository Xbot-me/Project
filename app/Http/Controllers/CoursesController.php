<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function contact()
    {


        return view('front_end.view.contact');
    }
    
    public function about()
    {


        return view('front_end.view.about');
    }

    public function index()
    {

        
        return view('front_end.view.index');
    }

    public function courses()
    {
        
        //DB::table('users')->join('courses','users.id', '=','courses.tech_id')->select('users.name')->get();
        $data = \DB::table('courses')->join('users','courses.tech_id', '=','users.id')->select('courses.*','users.name as name')->get();
        return view('front_end.view.courses',compact('data'));
    }

    
    public function info($id)
    {

        $data = \DB::table('courses')->where('id',$id)->first();
        $data2 = \DB::table('courses')->join('users','courses.tech_id','=','users.id')->select('users.name as name')->where('courses.id','=',$id)->get()->first();
      //$data = '<h2>Subscribe For Letest News</h2>';

      
        return view('front_end.view.course_info', compact('data','data2'));
    }
    public function instructor($id)
    {
       $data = \DB::table('courses')->join('users','courses.tech_id','=','users.id')->select('courses.*','users.name as name')->where('users.id','=',$id)->get();

        return view('front_end.view.instructors',compact('data'));
    }

    public function store(){
        $sid = Auth::user()->id;
        $temp=request()->input('cid');
        
        
         \DB::table('enroll')->insert(
            ['s_id' => $sid, 'c_id' => $temp]
        ); 
        return redirect('/courses');
    }

    public function message($id){
        $sid = Auth::user()->id;

       // $data = \DB::table('chat')->where('sender','=',$sid)->where('receiver','=',$id)->orderBy('created_at', 'desc')->get()->first();
        
     //  $data = \DB::table('chat')->join('users','chat.receiver','=','users.id')->select('users.name as name')->where($sid,'=','chat.receiver')->where('chat.sender','=',9)->distinct() ->first();
        return view('front_end.view.message',compact('id'));
    }
    public function messages(Request $request){
        $sid = Auth::user()->id;
        $message = $request->message;
        $tid = $request->tid;

         $success =  \DB::table('chat')->insert(
            ['sender' => $sid, 'receiver' => $tid,'message'=>$message]
        ); 
        
        if($success){
            $message = 'Sent';
            return response()->json(array('msg'=> $message), 200);
        }else{
            $message = 'Failed';
            return response()->json(array('msg'=> $message), 200);
        }
        
        
    }
    public function ajaxget($id){
        $sid = Auth::user()->id;
        $data2 = \DB::table('users')->select('name')->where('id','=','1')->get();
        $data = \DB::table('chat')->where('sender','=',$sid)->where('receiver','=',$id)->orWhere('sender','=',$id)->where('receiver','=',$sid)->orderBy('created_at', 'desc')->get();
       
       
        return response()->json(array('msg'=>$data,'receiver'=>$data2),200);
        
    }


}
