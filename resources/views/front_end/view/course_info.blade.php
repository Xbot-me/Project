

@extends('front_end.layouts.master')

@section('content')

<section class="SHtaken-banner-wells inner-spacing section-overlay">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="SHtaken-wells-container">
                    <h2>Media planning dlobrt thus dey rudffe iuort</h2>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Courses Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End SHtaken Slider -->
<!-- Start SHtaken Course Info -->
<section class="SHtaken-course-info">
<div class="container">
        <div class="course-info-wrapper d-flex align-items-stretch SHtaken">
            <div class="course-info SHtaken wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                <div class="course-logo"><img src="/images/course-info-instructor.png" alt="course info img"></div>
                <div class="course-meta-content light-text">
                                  
                                    <p>Instructor</p>
                                   
                                   
                <a href="course-grid-autor-right-sidebar.html">
                <h5>{{$data2->name}}</h5>
                </a>
                
                </div>
            <a href="/message/{{$data->tech_id}}"> Message</a>

            </div>
            <div class="course-info SHtaken wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                <div class="course-logo"><img src="/images/course-info-logo.png" alt="course info img"></div>
<div class="course-meta-content">                   
               <p>Duration</p>
                <h5>18 Class - 36 Houre </h5>
            </div>
            </div>
            <div class="course-info SHtaken wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                <div class="course-logo"><img src="/images/course-info-logo2.png" alt="course info img"></div>
<div class="course-meta-content">                   
               <p>Student</p>
                <h5>21589</h5>
            </div>
            </div>
            <div class="course-info SHtaken wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                <div class="course-logo"><img src="/images/course-info-logo3.png" alt="course info img"></div>
<div class="course-meta-content">                  
              <p>Course Fee</p>
                <h5>$ 456</h5>
            </div>
            </div>
            <div class="course-info SHtaken">
                    <a class="popular-course-enroll" href="/enroll/{{$data->id}}">enroll now</a>
            </div>
        </div>
    </div>
</section>

<section class="SHtaken-course-info">
    <div class="container">
      <div class="row">
<div class="col-lg-8 col-md-7">
<div class="SHtaken-single">
        <?php 
              
        $str = $data->image;
            $url = str_replace('\\','/' , $str);
            $temp = $data->body;
            $body = str_replace(array('<p>','</p>'),' ',$temp);
            function video_url($video){
               
            $xf=explode(',',$video);
            $xf[1]='';
            $xv=implode(' ',$xf);
            $xc=explode(':',$xv);
            $xc[0]="";
            $xa=implode(' ',$xc);
            $xc=explode('\\',$xa);
            unset($xc[1]);
            unset($xc[3]);


            return trim(str_replace('"','',implode('/',$xc)));
            }

            $xd=$data->lesson_1;
            $xc=$data->lesson_2;
            $xa=$data->lesson_3;

            $xt=video_url($xd);
            $xy=video_url($xc);
            $xz=video_url($xa);
            

            
            

        
        
        ?>
<div class="SHtaken-single-thumb"><img src="/storage/{{$url}}" alt="courses details img" /></div>
<p>{{$body}}</p>

<h5>Lesson</h5>
<div id="SHtaken-lesson-accordion">
<div class="SHtaken-card wow fadeIn" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;" data-wow-duration="2s">
<div id="headingOne" class="card-header"><button class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne" aria-expanded="false"> Lesson A </button></div>
<div id="collapseOne" class="collapse" data-parent="#SHtaken-accordion">
<div class="card-body">
        <video width="690" height="400" controls>
                <source src="/storage/{{$xt}}" type="video/mp4">
                
              Your browser does not support the video tag.
              </video> 
</div>
</div>
</div>
<div class="SHtaken-card wow fadeIn" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;" data-wow-duration="2s">
<div id="headingTwo" class="card-header"><button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-controls="collapseTwo" aria-expanded="false"> Lesson B </button></div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#SHtaken-accordion">
<div class="card-body">
        <video width="690" height="400" controls>
                <source src="/storage/{{$xy}}" type="video/mp4">
                
              Your browser does not support the video tag.
              </video>
</div>
</div>
</div>
<div class="SHtaken-card wow fadeIn" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;" data-wow-duration="2s">
<div id="headingThree" class="card-header"><button class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree" aria-expanded="false"> Lesson C </button></div>
<div id="collapseThree" class="collapse" data-parent="#SHtaken-accordion">
<div class="card-body">
        <video width="690" height="400" controls>
                <source src="/storage/{{$xz}}" type="video/mp4">
                
              Your browser does not support the video tag.
              </video>
</div>
</div>
</div>
</div>
<h5>Review</h5>
<div class="SHtaken-review wow fadeIn" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;" data-wow-duration="2s">
<div class="SHtaken-review-circle">
<div class="SHtaken-progress">
<div class="progress-value">4.8</div>
</div>
<h5>Avarage rating</h5>
</div>
<div class="SHtaken-review-progress">
<div class="SHtaken-prograss">
<div class="progress-label">5 Star</div>
<div class="progress">
<div class="progress-bar" style="width: 85%;" role="progressbar">85%</div>
</div>
</div>
<div class="SHtaken-prograss">
<div class="progress-label">3 Star</div>
<div class="progress">
<div class="progress-bar" style="width: 65%;" role="progressbar">65%</div>
</div>
</div>
<div class="SHtaken-prograss">
<div class="progress-label">4 Star</div>
<div class="progress">
<div class="progress-bar" style="width: 70%;" role="progressbar">70%</div>
</div>
</div>
<div class="SHtaken-prograss">
<div class="progress-label">1 Star</div>
<div class="progress">
<div class="progress-bar" style="width: 20%;" role="progressbar">20%</div>
</div>
</div>
<div class="SHtaken-prograss">
<div class="progress-label">2 Star</div>
<div class="progress">
<div class="progress-bar" style="width: 35%;" role="progressbar">35%</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-5">
<div class="SHtaken-sidebar-left"><form class="sidebar-search sidebar-widget" action="#">
<div class="input-group"><input type="text" class="form-control" placeholder="Search course" /> <button class="btn btn-secondary" type="submit"></button></div>
</form>

@if (Auth::user()->role_id == 2)
<div class="sidebar-widget">
<h4 class="sidebar-title">Students</h4>
@foreach ($data3 as $st)

<ul class="sidebar-category sidebar-widget list-group">
<li class="list-group-item d-flex justify-content-between"><a href="/message/{{$st->id}}">{{$st->name}}</a></li>
    
    
    </ul>
@endforeach
</div>



@endif
    
   

 







<div class="sidebar-widget">
<h4 class="sidebar-title">Featured Course</h4>
<div class="popular-course-post wow fadeIn" style="visibility: visible; animation-duration: 3s; animation-name: fadeIn;" data-wow-duration="3s">
<div class="popular-course-thumb" style="background-image: url('images/popular-course.jpg');">
<div class="popular-course-teacher popular-color2"><a href="course-grid.html">jon rock</a> <img src="images/popular-course-teacher.png" alt="popular course teacher img" /></div>
</div>
<div class="popular-course-content ">
<h5>Digital Marketing Strategy</h5>
<div class="SHtaken-rating-area">
<ul class="popular-course-student list-inline">
<li class="list-inline-item">230</li>
<li class="list-inline-item">05</li>
</ul>
</div>
<p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
<div class="popular-course-meta">
<div class="SHtaken-course-action"><a class="popular-course-price popular-color1" href="course-details.html">free</a> <a class="popular-course-enroll" href="course-details.html">enroll now</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    </div>
</section>
<!-- End SHtaken Single -->
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