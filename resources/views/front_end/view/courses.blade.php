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
                  <div class="col-md-4">
                     <div class="popular-course-post wow fadeIn"  data-wow-duration="1s">
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>Digital Marketing Strategy </h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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
                     <div class="popular-course-post wow fadeIn"  data-wow-duration="2s">
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course2.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>WordPress Plugin Dev </h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course3.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>Woocommerce Development </h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course4.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>Digital Strategy </h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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
                     <div class="popular-course-post wow fadeIn"  data-wow-duration="2s">
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course5.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>Shopify Course</h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course6.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>Androind Marketing </h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course7.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>Graphics Design </h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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
                     <div class="popular-course-post wow fadeIn"  data-wow-duration="2s">
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course8.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>Yotube Marketing </h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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
                        <div class="popular-course-thumb" style="background-image:url(images/popular-course9.jpg);">
                           <div class="popular-course-teacher popular-color2">
                              <a href="{{"/course_info"}}">jon rock</a>
                              <img src="images/popular-course-teacher.png" alt="popular course teacher img" />
                           </div>
                        </div>
                        <div class="popular-course-content ">
                           <a href="{{"/course_info"}}">
                              <h5>Photo Editing</h5>
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
                           <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
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