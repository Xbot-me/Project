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
              <img src=" {{ "uploads/files/".Auth::user()->avatar }}" alt="">
          </div>
          <div class="col-md-8">
             <div class="instructors-details  section-spacing">
                <h2>Hi i am {{ Auth::user()->name }} </h2>
                <h6>UI/UX Designer</h6>
                <p>Hachabitasse platea dictumst. Pellentesque a urna nisi. Mauris ac euismod ipsum. Aenean faucibus sapien odio, ut condimentum dolor imperdiet id. Nam tristique dolor non ex faucibus consequat. Sed maximus sapien purus, eget pellentesque
                   quam dapibus eget. Praesent sodales mauris a sapien vehicula, ac sodales odio volutpat. Etiam tristique orci odio, a bibendum odio convallis id. Morbi quis tempor velit. Nullam suscipit pellentesque quam, id maximus nulla iaculis
                   commodo. In id fermentum sem. Phasellus non hendrerit metus. Etiam ultrices ipsum ut ipsum condimentum tristique.
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

 @endsection