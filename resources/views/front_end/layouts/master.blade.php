
<!DOCTYPE HTML>
<html lang="en-US">
   

<head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="SHtaken is A Responsive HTML5 template for Blog site etc website." />
      <meta name="author" content="SHtaken" />
      <title>Online Learning Platform!!</title>
      <!--  Add Favicon Icon-->
      <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
      <link rel="icon" href="/images/favicon.png" type="image/x-icon">
      <!-- Add All Style -->
      <link rel="stylesheet" href="/css/bootstrap.min.css" />
      <link rel="stylesheet" href="/css/font-awesome.min.css" />
      <link rel="stylesheet" href="/css/slimmenu.min.css" />
      <link rel="stylesheet" href="/css/owl.carousel.min.css" />
      <link rel="stylesheet" href="/css/animate.min.css" />
      <!-- <link rel="stylesheet" href="css/zabuto_calendar.min.css" /> -->
      <link rel="stylesheet" href="/css/styles.css" />
      <link rel="stylesheet" href="/css/responsive.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Poppins Google Font -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRoboto+Slab" rel="stylesheet">
   </head>







   <body>





    @include('front_end.layouts.header')
    

    @yield('content')

    
    @include('front_end.layouts.footer')







      
      <!-- Add Javascript File -->
      <script src="/js/jquery-3.2.1.min.js"></script>
      
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/jquery.slimmenu.min.js"></script>
      <script src="/js/wow.min.js"></script>
      <script src="/js/jquery.counterup.min.js"></script>
      <script src="/js/owl.carousel.min.js"></script>
      <script src="/js/zabuto_calendar.min.js"></script>
      <script src="/js/isotope.pkgd.min.js"></script>
      <script src="/js/waypoint.min.js"></script>
     
      <script src="/js/custom.js"></script>




   </body>


</html>