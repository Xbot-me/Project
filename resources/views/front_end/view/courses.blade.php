@extends('front_end.layouts.master')

@section('content')
<section class="SHtaken-banner-wells inner-spacing section-overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="SHtaken-wells-container">
                     <h2>The world’s largest selection of courses.</h2>
                     <p style="color:#fff">Choose from over 80,000 online video courses with new additions published every month.</p>
                     {{-- <nav>
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Courses grid</li>
                        </ol>
                     </nav> --}}
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End SHtaken Slider -->        
      <!-- Start SHtaken  Course-->
      <section class="SHtaken-Course section-spacing bg-color">
         <div class="container">
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
                     <div class="popular-course-thumb" style="background-image:url(storage/{{$url}});">
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

                             
                              <form  method="POST" action="/enroll">
                                @csrf
                                <input type="hidden" name="cid" value="{{ $course->id }}">
                                <button class="popular-course-enroll" type="submit">enroll now</button>
                            </form>
                              

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              @endforeach
                 
              
            </div>
			<nav class="SHtaken-pagination text-center">
			  <ul class="pagination">
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
			  </ul>
			</nav>
         </div>
      </section>
      <!-- End SHtaken Course -->             
      <!-- Start SHtaken Subscribe-->
      <section class="SHtaken-subscribe d-flex align-items-stretch SHtaken">
         <div class="subscribe-column section-spacing bg-color2 SHtaken">
            <div class="SHtaken-subscribe-wrapper">
               <h2>Subscribe For Letest News</h2>
               <form class="SHtaken-subscribe-form wow fadeIn"  data-wow-duration="2s" action="#">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Email Address" aria-label="Search" required="">
                     <span class="input-group-btn">
                     <button class="btn btn-secondary" type="submit"><i class="fa fa-paper-plane"></i></button>
                     </span>
                  </div>
               </form>
            </div>
            <div class="subscribe-triangle"></div>
         </div>
         <div class="subscribe-column SHtaken-subscribe-thumb bg-color SHtaken">
         </div>
      </section>
@endsection