<header class="SHtaken-header">
         <div class="SHtaken-header-top bg-color2">
            <div class="container">
               <div class="d-flex justify-content-between SHtaken">
                  <div class="SHtaken-top-bar-left">
                     <p class="top-content"><a href="mailto:support@SHtaken.com">unified.support@gmail.com</a></p>
                  </div>
                  <div class="SHtaken-top-bar-right">

                      @guest
                      <a class="top-sign-btn" href="/login" ><i class="fa fa-user"></i>Sign In</a>
                      <a class="top-sign-btn" href="/register" ><i class="fa fa-user"></i>Sign Up</a>
                  @else
                      <li class="nav-item dropdown" style="list-style: none;">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">Profile</a>
                              <hr>
                              <a class="dropdown-item" href="/message/{{ Auth::user()->id }}">Messages</a>
                              <hr>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
                    
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal -->
         {{-- <div class="top-login-modal modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="tmx-loginform" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="tmx-loginform">Login Area</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="login-form-modal"><form action="#" method="get">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="text" class="form-control" placeholder="Username">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="password" class="form-control" placeholder="Pasword">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary login-btn">Login</button>
                                 </div>
                              </div>
                           </div>
                        </div>
<p class="message">Not registered?
  <a href="contact.html" data-toggle="modal" data-target="#login-modal">Create an account</a>
</p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="top-login-modal modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="tmx-loginform" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="tmx-loginform">Sign Up Here</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="login-form-modal">
                         <form action="{{ route('register') }}" method="POST">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="text" class="form-control" placeholder="First Name" name="name" equired>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="text" class="form-control" placeholder="Last Name" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="number" class="form-control" placeholder="Phone Number" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="password" class="form-control" name="password" placeholder="Pasword" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Pasword" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary login-btn">Sign Up</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <p class="message">Already Registered? <a href="#">Log In</a></p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
         <!-- modal end -->
         <div class="SHtaken-header-navigation bg-color">
            <div class="container">
               <div class="d-flex justify-content-between SHtaken">
                  <div class="SHtaken-logo">
                     <a class="SHtaken-brand" href="{{'/'}}"><img src="/images/logo.png" alt="logo here" ></a>
                  </div>
                  <nav class="SHtaken-menu">
                     <ul id="navigation-menu" class="slimmenu">
                        <li><a href="{{"/"}}">Home</a></li>
                        <li><a href="{{"/about"}}">About</a></li>
                        <li>
                           <a href="{{"/courses"}}">Courses </a>   
                        </li>


                        <!-- <li>
                           <a href="#">Lesson </a>
                           <ul>
                              <li><a href="1lesson-right-sidebar.html">Lesson Right Sidebar</a></li>
                              <li><a href="1lesson-left-sidebar.html">Lesson Left Sidebar</a></li>
                              <li><a href="1lesson-full-width.html">Lesson Full Width</a></li>
                           </ul>
                        </li> -->
                        <!-- <li>
                           <a href="#">Pages</a>
                           <ul>
                              <li><a href="event.html">Event</a></li>
                              <li><a href="event-details.html">Event Details</a></li>
                              <li><a href="forum.html">Forum</a></li>
                              <li><a href="gallery-v1.html">Gallery V1</a></li>
                              <li><a href="gallery-v2.html">Gallery V2</a></li>
                              <li><a href="instructors.html">Instructors</a></li>
                              <li><a href="instructors-details.html">Instructor Details</a></li>

                              <li><a href="checkout.html">Checkout</a></li>
                              <li><a href="404.html">404 Page</a></li>
                           </ul>
                        </li> -->
                        <!-- <li>
                           <a href="#">Blog</a>
                           <ul>
                              <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                              <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                              <li><a href="single.html">Blog Details</a></li>
                              <li><a href="author.html">Author</a></li>
                              <li><a href="tag.html">Tag</a></li>
                           </ul>
                        </li> -->
                        <li><a href="{{"/contact"}}">Contact</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </header>