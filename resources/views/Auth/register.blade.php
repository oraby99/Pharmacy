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


<body style="background-color:gray;">
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
          <a class="nav-link" href="{{url('login')}}"><span class="fas fa-sign-in-alt"></span> Login</a>
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




    <section class="bg-image">

<div class="signup-form text-center">
    <form   action="{{url('register')}}" method="POST">
      @csrf
        <h2>Register</h2>
        <p class="hint-text-register " style="font-size:18px; font-weight:bold; color:white;">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control w-25 m-auto" name="name" formControlName="firstName" placeholder="First Name" required="required"></div>
            </div>    
        </div>
        <div class="form-group">
            <input type="text" class="form-control w-25 m-auto" name="phone" placeholder="Phone Number"  formControlName="phone" >
        </div>
       
        <div class="form-group">
            <input type="number" class="form-control w-25 m-auto" name="salary" placeholder="salary"  formControlName="salary" required="required">
        </div>
     
        <div class="form-group">
            <input type="number" class="form-control w-25 m-auto" name="clientsNumber"   formControlName="clientNumbers" placeholder="Clients Number" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control w-25 m-auto" name="rate" formControlName="CommistionRate" placeholder="Commition Rate" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control w-25 m-auto" name="email" placeholder="Email" formControlName="email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control w-25 m-auto" name="password" formControlName="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control w-25 m-auto" name="password_confirmation"  placeholder="Confirm Password" required="required">
        </div>        
      
        <div class="form-group">
            <button type="submit" class="btn btn-success w-25 m-auto btn-lg btn-block" >Register Now</button>
        </div>
    </form>
    <!-- <div class="text-center">Already have an account? <a routerLink="/login">Sign in</a></div> -->
</div>

</section>

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