<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width , initial-scale =1.0" >
    <title> ELEZAPY PHARMACY </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/A.style.css.pagespeed.cf.mMBCBFkmOw.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="{{ asset('css/pogo-slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>


<body>
<section class="ftco-section ">
    <div class="main-top">
     <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="wel-nots">
            <p style=" font-size:20px;">WELCOME TO ELEZAPY PHARMACY !</p>
          </div>
        </div>
        <div class="col-6 d-flex   justify-content-end">
        <ul class="nav navbar-nav ml-auto">
        @guest
        <li class="nav-item">
          <a class="nav-link"style="color:black; font-size:18px; font-weight:bold" href="{{url('login')}}"><span class="fas fa-sign-in-alt"></span> Login</a>
        </li>
        @endguest
        @auth
        <li class="nav-item" >
          <a style="color:black; font-size:18px; font-weight:bold" class="nav-link"  href="{{url('logout')}}"><span  class="fas fa-sign-in-alt" ></span> LOG OUT</a>
        </li>
        @endauth
       </ul>
       </div>
      </div>
    </div>
  </div>
</section>
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="{{url('/home')}}"><span>ELEZAPY</span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
         
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
        
          @auth
          <li class="nav-item">
              <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/manager')}}">Manger</a>
            </li>
            @endauth
          
            @auth
    
            <li class="nav-item">
              <a class="nav-link" href="{{url('/products')}}">Medicines</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/clients')}}">Clients</a>
            </li> 

            <li class="nav-item">
              <a class="nav-link" href="{{url('/sales')}}">Sales</a>
            </li>
          
          
           
           
            @endauth
    
          </ul>
        
        
        </div>
            </div>
        </nav>
</header>

<div class="ulockd-home-slider">
    <div class="container-fluid">
      <div class="row">
        <div class="pogoSlider" id="js-main-slider">
          <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
            <div class="lbox-caption pogoSlider-slide-element">
              <div class="lbox-details">
                <h1>Welcome to Pharmacy </h1>
                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
                <a href="#" class="btn">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
            <div class="lbox-caption pogoSlider-slide-element">
              <div class="lbox-details">
                <h1>We are Expert in The Field of Pharmacy</h1>
                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum</p>
                <a href="#appointment" class="btn">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
            <div class="lbox-caption pogoSlider-slide-element">
              <div class="lbox-details">
                <h1>Welcome to Pharmacy</h1>
                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
                <a href="#" class="btn">Contact Us</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
</div>
<div id="about" class="about-box">
    <div class="about-a1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-box">
              <h2>About Us</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row align-items-center about-main-info">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <h2> Welcome to Pharmacy </h2>
                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
                <a href="#" class="new-btn-d br-2">Read More</a>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about-m">
                  <ul id="banner">
                    <li>
                      <img src="images/about-img-01.jpg" alt="">
                    </li>
                    <li>
                      <img src="images/about-img-02.jpg" alt="">
                    </li>
                    <li>
                      <img src="images/about-img-03.jpg" alt="">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End About us -->
  <div id="team" class="team-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title-box">
            <h2>Our Doctor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
          </div>
        </div>
      </div>
      
      <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post"></span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">kristina</h3>
                            <span class="post"></span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post"></span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
      
    </div>
  </div>
  
   <!-- Start Footer -->
  <footer class="footer-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="footer-company-name"><a href="Home.html"> Pharmacy </a><br> Design By : TEAM A4 (kottp ba4a)</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>
 

<script>
  var txt = $('.writer').text();
  var timeOut;
  var txtLen = txt.length;
  var char = 0;
  $('.writer').text('|');
  (function typeIt() {   
      var humanize = Math.round(Math.random() * (200 - 30)) + 30;
      timeOut = setTimeout(function() {
          char++;
          var type = txt.substring(0, char);
          $('.writer').text(type + '|');
          typeIt();

          if (char == txtLen) {
              $('.writer').text($('.writer').text().slice(0, -1)); // remove the '|'
              clearTimeout(timeOut);
          }

      }, 15);
    }());
</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.ShDXkdKWrZ.js"></script><script>eval(mod_pagespeed_H0qN4W9wXo);</script>
    <script>eval(mod_pagespeed_WmiCx0VWp6);</script>
    <script>eval(mod_pagespeed_JBM6ZoM8er);</script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7080d759de77d785","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous">
    </script>
    <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script> 
    <script src="js/images-loded.min.js"></script>  
    <script src="js/custom.js"></script>
</body>
</html>