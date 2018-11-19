@extends('front_end.layouts.master')


@section('content')


<section class="SHtaken-banner-wells inner-spacing section-overlay">
    <div class="container">
       <div class="row">
          <div class="col">
             <div class="SHtaken-wells-container">
                    @if(Auth::user()->role_id == 2 ) 
                    
                    <h2>Instructor Details</h2>



                    @elseif(Auth::user()->role_id == 3 )

                    <h2>Student Details</h2>

                    @endif
                
               
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End SHtaken Slider -->
 <!-- Start SHtaken Feature-->
 <div class="SHtaken-feature  bg-color">
    <div class="container">
       <div class="row">
          <div class="col-md-4">
              <img src=" {{ "uploads/files/".Auth::user()->avatar }}" alt="Profile image">
          </div>
          <div class="col-md-8">
             <div class="instructors-details  section-spacing">
                 @php
                    $user_name = Auth::user()->name;
                    $uper_name =strtoupper($user_name);
                 @endphp
                <h2>Hi I am {{ $uper_name  }} </h2>
                @if( Auth::user()->role_id === 2)
                <h6>Instructor</h6>
                @elseif(Auth::user()->role_id === 3)
                <h6>Student</h6>
                @endif
                <p>At the age of 17 I began a 6th month internship with an animation studio out of Utah. After my internship was up, I was hired on to build backgrounds and to design props and characters for animation projects. I then began to do my own freelance work on the side through networking and using online freelancing sites. Now I work as a freelance Illustrator and designer working on my own time from where ever I want. 
                </p>
                <ul class="instructors-details-review  list-inline">
                   <li class="list-inline-item">
                      <h4>2154</h4>
                      <h5>Students</h5>
                   </li>
                   <li class="list-inline-item">
                      <h4>546</h4>
                      <h5>Total Courses</h5>
                   </li>
                   <li class="list-inline-item">
                      <h4>4.9</h4>
                      <ul class="instructors-details-star list-inline">
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      </ul>
                   </li>
                </ul>
                <ul class="instructors-details-social list-inline">
                   <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                   <li class="list-inline-item"><a href="#"><i class="fa fa-github"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>

 <section class="SHtaken-Course section-spacing bg-color">
     
    <div class="container">
            @if(Auth::user()->role_id == 2 ) 
                    
                    <h2>Courses:-</h2>



                    @elseif(Auth::user()->role_id == 3 )

                    <h2>Enrolled Courses:-</h2>

                    @endif
       <div class="row">
        
         @foreach ($data as $course)

         <?php 
         
         $str = $course->image;
             $url = str_replace('\\','/' , $str);

         $temp = $course->short_des;
           //$des = strlen($temp);
          $des=substr($temp,0,100).'...';
             
         
         ?>
            
       
         <div class="col-md-4">
             <div class="popular-course-post wow fadeIn"  data-wow-duration="1s">
                <div class="popular-course-thumb" style="background-image:url(/storage/{{$url}});">
                   <div class="popular-course-teacher popular-color2">
                   <a href="{{"/course_info/".$course->id}}">{{$course->name}}</a>
                      <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                   </div>
                </div>
                <div class="popular-course-content ">
                   <a href="{{"/course_info/".$course->id}}">
                      <h5>{{$course->title}} </h5>
                   </a>
                   <div class="SHtaken-rating-area">
                      <ul class="popular-course-review list-inline">
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                         <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      </ul>
                      {{-- <ul class="popular-course-student list-inline">
                         <li class="list-inline-item">
                            <i class="fa fa-user"></i> 230
                         </li>
                         <li class="list-inline-item">
                            <i class="fa fa-comments"></i> 05
                         </li>
                      </ul> --}}
                   </div>
                 <p>{{$des}}</p>
                   <div class="popular-course-meta">
                      <div class="SHtaken-course-action">
                         <a class="popular-course-price popular-color1" href="course-details.html">free</a>
                      <a class="popular-course-enroll" href="/enroll/{{$course->id}}">enroll now</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
         @endforeach
            
         
       </div>
       
    </div>
 </section>

 @endsection