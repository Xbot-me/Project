@extends('front_end.layouts.master')


@section('content')

    


      <!-- Start SHtaken Slider -->
      <section class="SHtaken-slider section-overlay  bg-color">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="SHtaken-slider-content">
                     <h1> Teach the world online </h1>
                     <p>Share your knowledge and reach millions of students across the globe.</p>
                     <div class="SHtaken-slider-btn">
                     <a class="SHtaken-btn btn btn-primary" href="{{"/courses"}}">Our Course</a>
                        <a class="SHtaken-btn2 btn btn-primary" href="{{"/contact"}}">Contact Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End SHtaken Slider -->    





      
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
            </div>
         </div>
      </section>
      <!-- End SHtaken Popular -->    









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
                     <p>Countries Reached</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End SHtaken Counter -->    




      <!-- Start SHtaken Resgister -->
    {{--   <section class="SHtaken-resgister bg-color4">
         <div class="SHtaken-resgister-wrapper section-spacing">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <form class="resgister-form wow fadeIn"  data-wow-duration="2s">
                        <div class="resgister-form-text">
                           <h2>Register Now</h2>
                           <p>Create your account and browse <br/>thousand of courses!!</p>
                           <div class="resgister-form-triangle"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Your Phone">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Choose a password">
                        </div>
                        <button type="submit" class="btn-style1 btn-color1 btn btn-primary">Sign Up Now!</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- End SHtaken Resgister -->  




      <!-- Start SHtaken Testimonial-->
      <section class="SHtaken-testimonial section-spacing bg-color clearfix">
         <div class="container">
            <div class="row">
               <div class="col-md-8 m-auto">
                  <div class="SHtaken-section-title text-center">
                     <h2>Our Instructor</h2>
                     <div class="section-border"></div>
                     <p></p>
                  </div>
               </div>
            </div>
            <div class="testimonial-instructor-carousel owl-carousel">
               <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                  <div class="testimonial-info">
                     <div class="testimonial-info-thumb"><img src="images/akter.jpg" alt="testimonial author img" /></div>
                     <div class="testimonial-info-content">
                        <a href="author.html">
                           <h5>Dr. Syed Akhter Hossain</h5>
                        </a>
                        <p>Department Head </p>
                     </div>
                  </div>
                  <div class="testimonial-hover">
                     <div class="testimonial-hover-wrap">
                        <ul class="testimonial-hover-social list-inline">
                           <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="author.html">
                           <h5>Dr. Syed Akhter Hossain</h5>
                        </a>
                        <p>Department of Computer Science and Engineering</p>
                     </div>
                  </div>
               </div>
               <div class="testimonial-instructor wow fadeIn"  data-wow-duration="3s">
                  <div class="testimonial-info">
                     <div class="testimonial-info-thumb"><img src="images/teacher1.png" alt="testimonial author img" /></div>
                     <div class="testimonial-info-content">
                        <a href="author.html">
                           <h5>Dr. Neil Perez Balba</h5>
                        </a>
                        <p>Visiting Professor</p>
                     </div>
                  </div>
                  <div class="testimonial-hover">
                     <div class="testimonial-hover-wrap">
                        <ul class="testimonial-hover-social list-inline">
                           <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="author.html">
                           <h5>Dr. Neil Perez Balba</h5>
                        </a>
                        <p>
                          Department of Computer Science and Engineering</p>
                     </div>
                  </div>
               </div>
               <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                  <div class="testimonial-info">
                     <div class="testimonial-info-thumb"><img src="images/teacher3.jpg" alt="testimonial author img" /></div>
                     <div class="testimonial-info-content">
                        <a href="author.html">
                           <h5>Mr. Arif Mahmud</h5>
                        </a>
                        <p>Assistant Professor</p>
                     </div>
                  </div>
                  <div class="testimonial-hover">
                     <div class="testimonial-hover-wrap">
                        <ul class="testimonial-hover-social list-inline">
                           <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="author.html">
                           <h5>Mr. Arif Mahmud</h5>
                        </a>
                        <p>Department of Computer Science and Engineering</p>
                     </div>
                  </div>
               </div>
               <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                  <div class="testimonial-info">
                     <div class="testimonial-info-thumb"><img src="images/teacher5.jpg" alt="testimonial author img" /></div>
                     <div class="testimonial-info-content">
                        <a href="author.html">
                           <h5>Rezwana Sultana</h5>
                        </a>
                        <p>Assistant Professor</p>
                     </div>
                  </div>
                  <div class="testimonial-hover">
                     <div class="testimonial-hover-wrap">
                        <ul class="testimonial-hover-social list-inline">
                           <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="author.html">
                           <h5>Rezwana Sultana</h5>
                        </a>
                        <p>Department of Computer Science and Engineering</p>
                     </div>
                  </div>
               </div>
               <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                  <div class="testimonial-info">
                     <div class="testimonial-info-thumb"><img src="images/teacher6.jpg" alt="testimonial author img" /></div>
                     <div class="testimonial-info-content">
                        <a href="author.html">
                           <h5>Shah Md Tanvir Siddique</h5>
                        </a>
                        <p>Assistant Professor</p>
                     </div>
                  </div>
                  <div class="testimonial-hover">
                     <div class="testimonial-hover-wrap">
                        <ul class="testimonial-hover-social list-inline">
                           <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="author.html">
                           <h5>Shah Md Tanvir Siddique</h5>
                        </a>
                        <p>Department of Computer Science and Engineering</p>
                     </div>
                  </div>
               </div>
               <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                  <div class="testimonial-info">
                     <div class="testimonial-info-thumb"><img src="images/teacher2.jpg" alt="testimonial author img" /></div>
                     <div class="testimonial-info-content">
                        <a href="author.html">
                           <h5>Ms. Subhenur Latif</h5>
                        </a>
                        <p>
                          Assistant Professor</p>
                     </div>
                  </div>
                  <div class="testimonial-hover">
                     <div class="testimonial-hover-wrap">
                        <ul class="testimonial-hover-social list-inline">
                           <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="author.html">
                           <h5>Ms. Subhenur Latif</h5>
                        </a>
                        <p>Department of Computer Science and Engineering</p>
                     </div>
                  </div>
               </div>
               {{-- <div class="testimonial-instructor wow fadeIn"  data-wow-duration="3s">
                  <div class="testimonial-info">
                     <div class="testimonial-info-thumb"><img src="images/testimonial-author5.jpg" alt="testimonial author img" /></div>
                     <div class="testimonial-info-content">
                        <a href="author.html">
                           <h5>Jaxon Tucker</h5>
                        </a>
                        <p>Instructor</p>
                     </div>
                  </div>
                  <div class="testimonial-hover">
                     <div class="testimonial-hover-wrap">
                        <ul class="testimonial-hover-social list-inline">
                           <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="author.html">
                           <h5>Michael Morrill</h5>
                        </a>
                        <p>Instructor</p>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </section>
      <!-- End SHtaken Testimonial-->   
      
      








      <!-- Start SHtaken About Author -->
     {{--  <section class="SHtaken-about-author section-spacing section-overlay clearfix">
         <div class="container">
            <div class="row">
               <div class="col-md-8 m-auto">
                  <div class="SHtaken-section-title SHtaken-title-inverse text-center">
                     <h2>What People Say</h2>
                     <div class="section-border"></div>
                     <p>Enim semper, gravida interdum null pellentesque adipiscing scelerisque vitae magnis platea. Ac sagittis ridiculus  pellentesque. Est ac sollicitudin varius integer laoreet morbi porta </p>
                  </div>
               </div>
            </div>
            <div class="owl-carousel about-author-info-carousel">
               <div class="about-author-info">
                  <div class="about-author-thumb"><img src="images/about-author.png" alt="testimonial author img" /></div>
                  <div class="about-author-content">
                     <a href="author.html">Professor Claire Bradin Siskin </a>
                     <span>Company of Nation</span>
                     <p>What I will remember about Daffodil International University is the tremendous spirit of students, faculty, and staff. People are constantly coming up with new ideas, programs, and activities. There is a keen interest in what is happening beyond the borders of Bangladesh, for which DIU truly deserves the “International” in its name. The staff – in particular the IT staff – is willing to give assistance. DIU provides a supportive atmosphere for learning and teaching.</p>
                     <img src="images/about-author-sign.png" alt="about-author img" />
                  </div>
               </div>
               <div class="about-author-info">
                  <div class="about-author-thumb"><img src="images/about-author2.png" alt="testimonial author img" /></div>
                  <div class="about-author-content">
                     <a href="author.html">Takayoshi Suzuki</a>
                     <span>Company of Nation</span>
                     <p>I am deeply impressed by the serious look of the students during the lecture, and the politeness that everyone stands up when I was introduced at the class at DIU. Role of DIU is praiseworthy for promoting the study of power generation in the country for the future. Bangladeshi children with a lovely smile, as long as they are exposed to heart aching environment, I always face towards Bangladesh through Daffodil.</p>
                     <img src="images/about-author-sign2.png" alt="about-author img" />
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- End SHtaken Testimonial -->     
      
      








      <!-- Start SHtaken Feature-->
      <!-- <section class="latest-news-box section-spacing bg-color">
         <div class="container">
             <div class="row">
               <div class="col-md-8 m-auto">
                  <div class="SHtaken-section-title text-center">
                     <h2>Latest News</h2>
                     <div class="section-border"></div>
                     <p>Enim semper, gravida interdum nullam, pellentesque adipiscing scelerisque vitae dui, magnis platea. Ac sagittis ridiculus Est ac sollicitudin varius integer laoreet morbi porta</p>
                  </div>
                  </div>
               </div>
            <div class="blog-post-wrapper-1">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="SHtaken-blog-post wow fadeIn"  data-wow-duration="2s">
                        <div class="SHtaken-blog-thumb"><a href="single.html"><img src="images/blog-img.jpg" alt="blog img" /></a></div>
                        <div class="SHtaken-blog-details">
                           <a href="#">
                              <h5>The Certificate giving ceremonyin.</h5>
                           </a>
                           <ul class="SHtaken-blog-meta list-inline">
                              <li class="list-inline-item">
                                 <a href="author.html"><i class="fa fa-user-o"></i> hinox mox</a>
                              </li>
                              <li class="list-inline-item">
                                 <i class="fa fa-comment-o"></i> 03 comments
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="SHtaken-blog-post wow fadeIn"  data-wow-duration="2s">
                        <div class="SHtaken-blog-thumb"><a href="single.html"><img src="images/blog-img2.jpg" alt="blog img" /></a></div>
                        <div class="SHtaken-blog-details">
                           <a href="#">
                              <h5>Education is the Powerful Weapon.</h5>
                           </a>
                           <ul class="SHtaken-blog-meta list-inline">
                              <li class="list-inline-item">
                                 <a href="author.html"><i class="fa fa-user-o"></i> hinox mox</a>
                              </li>
                              <li class="list-inline-item">
                                 <i class="fa fa-comment-o"></i>  07 comments
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="SHtaken-blog-post wow fadeIn"  data-wow-duration="2s">
                        <div class="SHtaken-blog-thumb"><a href="single.html"><img src="images/blog-img3.jpg" alt="blog img" /></a></div>
                        <div class="SHtaken-blog-details">
                           <a href="#">
                              <h5>Tellus at vulputate nulla commodo. </h5>
                           </a>
                           <ul class="SHtaken-blog-meta list-inline">
                              <li class="list-inline-item">
                                 <a href="author.html"><i class="fa fa-user-o"></i> hinox mox</a>
                              </li>
                              <li class="list-inline-item">
                                 <i class="fa fa-comment-o"></i>  01 comment
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- End SHtaken Feature-->









      <!-- Start SHtaken Subscribe-->
     <!--  <section class="SHtaken-subscribe d-flex align-items-stretch SHtaken">
         <div class="subscribe-column section-spacing bg-color2 SHtaken">
            <div class="SHtaken-subscribe-wrapper">
               <h2>Subscribe For Letest News</h2>
               <form class="SHtaken-subscribe-form wow fadeIn"  data-wow-duration="2s" action="#" method="#">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Email Address" aria-label="Search" required>
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
      </section> -->
      <!-- End SHtaken Subscribe -->    


      
        
          <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                    <button type="button" class="close ml-auto " style="margin-top:-25px" data-dismiss="modal">&times;</button>
              
               
            
                
                <!-- Modal body -->
                <div class="modal-body embed-responsive embed-responsive-16by9" >

                        <video width="100vw" controls autoplay>
                                <source src="videos/Home_work.mp4" type="video/mp4">
                                
                              </video>
                  
                </div>
                
           
               
                
              </div>
            </div>
          </div>
      
      

@endsection