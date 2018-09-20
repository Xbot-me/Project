@extends('front_end.layouts.master')

@section('content')
<section class="SHtaken-banner-wells inner-spacing section-overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="SHtaken-wells-container">
                        <h2>Contact Us</h2>
                        {{-- <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End SHtaken Slider -->
    <!-- Start SHtaken Feature-->
    <div class="SHtaken-feature section-spacing bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="contact-info wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-info-logo">
                            <img src="images/contact-info-logo4.png" alt="" />
                        </div>
                        <div class="contact-info-content">
                            <h4>Office Address</h4>
                            <p>DIU Library 3rd Floor<br>Dhanmondi 32 Road , Dhaka, Bangladesh </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="contact-info wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-info-logo">
                            <img src="images/contact-info-logo6.png" alt="" />
                        </div>
                        <div class="contact-info-content">
                            <h4>Email Address</h4>
                            <p>thahia15-4804@diu.edu.bd<br>tahia15-4824@diu.edu.bd <br> naeem15-4823@diu.edu.bd</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="contact-info m-0 wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-info-logo">
                            <img src="images/contact-info-logo5.png" alt="" />
                        </div>
                        <div class="contact-info-content">
                            <h4>Office Time</h4>
                            <p>Mon - Sat 9:00 - 5:00<br>Sunday - Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End SHtaken Feature-->
    <!-- Start SHtaken Contact-->
    <section class="SHtaken-contact bg-color4 section-spacing clearfix">
        <div class="container">
            <div class="d-flex align-items-stretch SHtaken">
                <div class="contact-column bg-color SHtaken">
                    <form class="contact-resgister-form wow fadeIn"  data-wow-duration="2s">
                        <h2>Register Now</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Password" required>
                        </div>
                        <button type="submit" class="btn-style1 btn-color1 btn btn-primary">Register Now !</button>
                    </form>
                </div>
                <div class="contact-resgister-info contact-column bg-color2">
                    <h2>Get in Touch</h2>
                    <div class="contact-resgister-info-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-resgister-info-logo"><img src="images/contact-info-logo.png" alt="" /></div>
                        <div class="contact-resgister-info-content">
                            <p>  <br> </p>
                        </div>
                    </div>
                    <div class="contact-resgister-info-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-resgister-info-logo"><img src="images/contact-info-logo2.png" alt="" /></div>
                        <div class="contact-resgister-info-content">
                            <p>+880  <br> +880 </p>
                        </div>
                    </div>
                    <div class="contact-resgister-info-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-resgister-info-logo"><img src="images/contact-info-logo3.png" alt="" /></div>
                        <div class="contact-resgister-info-content">
                            <p> <br> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection