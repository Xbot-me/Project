@extends('front_end.layouts.master')

@section('content')
<section class="SHtaken-banner-wells inner-spacing section-overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="SHtaken-wells-container">
                     <h2>we’re improving lives through learning.</h2>
                     <p style="color:#fff">Join millions of students and instructors in the world’s largest online learning marketplace</p>
                     {{-- <nav>
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active">About</li>
                        </ol>
                     </nav> --}}
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End SHtaken Slider -->    
      <!-- Start SHtaken Feature-->
      <section class="SHtaken-feature section-spacing bg-color">
         <div class="container">
            <div class="services-container">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="services-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="services-logo"><img src="images/video-logo.png" alt="services img" /></div>
                        <div class="services-details">
                           <h5>Best Multi-Tier Courses</h5>
                           <p>Education System</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                     <div class="services-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="services-logo"><img src="images/video-logo2.png" alt="services img" /></div>
                        <div class="services-details">
                           <h5>Easy to Use Video Panels</h5>
                           <p>Best LMS Systeam</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                     <div class="services-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="services-logo"><img src="images/video-logo3.png" alt="services img" /></div>
                        <div class="services-details">
                           <h5>Easy Communication System</h5>
                           <p>Online Education</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-5">
                  <div class="SHtaken-section-title">
                     <h2>Why Choose Us</h2>
                     <div class="section-border left-border"></div>
                     <p>We've changed lives by connecting instructors with students around the world.</p>
                  </div>
                  <div class="SHtaken-video-details wow fadeIn"  data-wow-duration="1s">
                     <div class="SHtaken-video-logo"><img src="images/video-logo.png" alt="video logo" /></div>
                     <div class="SHtaken-video-content">
                        <h5>Best Education System</h5>
                        <p>Advance Education Management</p>
                     </div>
                  </div>
                  <div class="SHtaken-video-details wow fadeIn"  data-wow-duration="2s">
                     <div class="SHtaken-video-logo"><img src="images/video-logo2.png" alt="video logo" /></div>
                     <div class="SHtaken-video-content">
                        <h5>Learning Management</h5>
                        <p>LMS Integration</p>
                     </div>
                  </div>
                  <div class="SHtaken-video-details wow fadeIn"  data-wow-duration="3s">
                     <div class="SHtaken-video-logo"><img src="images/video-logo3.png" alt="video logo" /></div>
                     <div class="SHtaken-video-content">
                        <h5>Online Certification</h5>
                        <p>Performance Based Certificate</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-7">
                  <div class="picture-module d-flex align-items-center">
                     <img src="images/courses-details-img.jpg" alt="Picture"/>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End SHtaken Feature -->    
      <!-- Start SHtaken Counter-->
      <section class="SHtaken-counter section-spacing section-overlay">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="SHtaken-counter-wrapper wow zoomIn"  data-wow-duration="2s">
                     <h3>3265</h3>
                     <p>Passed Graduates</p>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="SHtaken-counter-wrapper wow zoomIn"  data-wow-duration="2s">
                     <h3>256 +</h3>
                     <p>Courses Published</p>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="SHtaken-counter-wrapper wow zoomIn"  data-wow-duration="2s">
                     <h3>256</h3>
                     <p>Qualified Staff</p>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="SHtaken-counter-wrapper wow zoomIn"  data-wow-duration="2s">
                     <h3>155</h3>
                     <p>Countries Reachd</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End SHtaken Counter -->       
      <!-- Start SHtaken Popular-->
      <section class="SHtaken-popular section-spacing bg-color">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 m-auto">
                     <div class="SHtaken-section-title text-center">
                        <h2>Our Popular Courses</h2>
                        <div class="section-border"></div>
                        <p></p>
                     </div>
                  </div>
               </div>
               <div class="scb-minus-30">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="popular-course-post wow fadeIn"  data-wow-duration="2s">
                           <div class="popular-course-thumb" style="background-image:url(images/popular-course.jpg);">
                              {{-- <div class="popular-course-teacher popular-color1">
                                 <a href="{{"/course_info"}}">Jhon Doe</a>
                                 <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                              </div> --}}
                           </div>
                           <div class="popular-course-content ">
                              <a href="{{"/course_info"}}">
                                 <h5>Operating system</h5>
                              </a>
                              <div class="SHtaken-rating-area">
                                 <ul class="popular-course-review list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                 </ul>
                                 <ul class="popular-course-student list-inline">
                                    <li class="list-inline-item">
                                       <i class="fa fa-user"></i> 230
                                    </li>
                                    <li class="list-inline-item">
                                       <i class="fa fa-comments"></i> 05
                                    </li>
                                 </ul>
                              </div>
                              <p>Eget nonummy ultrices magna ornare tellus molestie.</p>
                              <div class="popular-course-meta">
                                 <div class="SHtaken-course-action">
                                    <a class="popular-course-price popular-color1" href="course-details.html">free</a>
                                    <a class="popular-course-enroll" href="course-details.html">enroll now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="popular-course-post wow fadeIn"  data-wow-duration="3s">
                           <div class="popular-course-thumb" style="background-image:url(images/popular-course2.jpg);">
                             {{--  <div class="popular-course-teacher popular-color2">
                                 <a href="{{"/course_info"}}">jon rock</a>
                                 <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                              </div> --}}
                           </div>
                           <div class="popular-course-content ">
                              <a href="{{"/course_info"}}">
                                 <h5>Object Oriented Programming  </h5>
                              </a>
                              <div class="SHtaken-rating-area">
                                 <ul class="popular-course-review list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                 </ul>
                                 <ul class="popular-course-student list-inline">
                                    <li class="list-inline-item">
                                       <i class="fa fa-user"></i> 230
                                    </li>
                                    <li class="list-inline-item">
                                       <i class="fa fa-comments"></i> 05
                                    </li>
                                 </ul>
                              </div>
                              <p>Vitae Eget ultrices magna ornare tellus molestie.</p>
                              <div class="popular-course-meta">
                                 <div class="SHtaken-course-action">
                                    <a class="popular-course-price popular-color1" href="course-details.html">free</a>
                                    <a class="popular-course-enroll" href="course-details.html">enroll now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="popular-course-post wow fadeIn"  data-wow-duration="1s">
                           <div class="popular-course-thumb" style="background-image:url(images/popular-course3.jpg);">
                              {{-- <div class="popular-course-teacher popular-color3">
                                 <a href="{{"/course_info"}}">jon rock</a>
                                 <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                              </div> --}}
                           </div>
                           <div class="popular-course-content ">
                              <a href="{{"/course_info"}}">
                                 <h5>Artificial Itelligence</h5>
                              </a>
                              <div class="SHtaken-rating-area">
                                 <ul class="popular-course-review list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                 </ul>
                                 <ul class="popular-course-student list-inline">
                                    <li class="list-inline-item">
                                       <i class="fa fa-user"></i> 230
                                    </li>
                                    <li class="list-inline-item">
                                       <i class="fa fa-comments"></i> 05
                                    </li>
                                 </ul>
                              </div>
                              <p>Auctor eleifend egestas felis a suscipit, amet ultricies.</p>
                              <div class="popular-course-meta">
                                 <div class="SHtaken-course-action">
                                    <a class="popular-course-price popular-color1" href="course-details.html">free</a>
                                    <a class="popular-course-enroll" href="course-details.html">enroll now</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              {{--  <div class="row">
                  <div class="col-md-6 col-lg-5">
                     <div class="SHtaken-section-title">
                        <h2>Why Choose Us</h2>
                        <div class="section-border left-border"></div>
                        <p>We've changed lives by connecting instructors with students around the world.</p>
                     </div>
                     <div class="SHtaken-video-details wow fadeIn"  data-wow-duration="1s">
                        <div class="SHtaken-video-logo"><img src="images/video-logo.png" alt="video logo" /></div>
                        <div class="SHtaken-video-content">
                           <h5>Best Education System</h5>
                           <p>Advance Education Management</p>
                        </div>
                     </div>
                     <div class="SHtaken-video-details wow fadeIn"  data-wow-duration="2s">
                        <div class="SHtaken-video-logo"><img src="images/video-logo2.png" alt="video logo" /></div>
                        <div class="SHtaken-video-content">
                           <h5>Learning Management</h5>
                           <p>LMS Integration</p>
                        </div>
                     </div>
                     <div class="SHtaken-video-details wow fadeIn"  data-wow-duration="3s">
                        <div class="SHtaken-video-logo"><img src="images/video-logo3.png" alt="video logo" /></div>
                        <div class="SHtaken-video-content">
                           <h5>Online Certification</h5>
                           <p>Performance Based Certificate</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-7">
                     <div class="SHtaken-video-thumb section-overlay" style="background-image:url(images/video-bg.jpg);">
                       
                        <a class="SHtaken-video-play" href="" data-toggle="modal" data-target="#myModal">
                           <i class="fa fa-play" aria-hidden="true"></i> 
                           <div class="iq-waves">
                              <div class="waves wave-1"></div>
                              <div class="waves wave-2"></div>
                              <div class="waves wave-3"></div>
                           </div>
                        </a>
                       
                     </div>
                  </div>
               </div> --}}
            </div>
         </section>
      <!-- End SHtaken Popular -->     
      <!-- Start SHtaken Testimonial-->
  
      <!-- End SHtaken Testimonial-->          
      <!-- Start SHtaken Feature-->
      <div class="SHtaken-feature section-spacing bg-color">
         <div class="container">
            <div class="SHtaken-client-carousel owl-carousel">
               <div class="SHtaken-client-logo">
                  <a href="#"><img src="images/client-logo.png" alt="client ads img" /></a>
               </div>
               <div class="SHtaken-client-logo">
                  <a href="#"><img src="images/client-logo2.png" alt="client ads img" /></a>
               </div>
               <div class="SHtaken-client-logo">
                  <a href="#"><img src="images/client-logo3.png" alt="client ads img" /></a>
               </div>
            </div>
         </div>
      </div>
      <!-- End SHtaken Feature-->
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