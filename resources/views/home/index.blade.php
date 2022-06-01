@extends('layout')
@section('content')
    
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

@endsection

@section('scripts')
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
@endsection