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


  <div class="container-xl pt-5">

<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class= " text-center">SEARCH <b>RESULT</b></h2>
                </div>
            
            </div>
        </div>
<table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Medicine id</th>
                            <th>client id</th>
                            <th>number of pieces</th>
                            <th>price</th>
                            <th>provider value</th>
                            <th>rest</th>
                            <th>value of installment</th>
                            <th>type of installment</th>
                            <th>installment period  </th>
                            <th>date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sales as $sale) 

                            <tr>
                            <tr>
                                    <td>{{$sale->id}}</td>
                                    <td>{{$sale->product->name}}</td>
                                    <td>{{$sale->client->name}}</td>
                                    <td>{{$sale->count }}</td>
                                    <td>{{$sale->count * $sale->product->price}}</td>
                                    <td>{{$sale->provider}}</td>
                                    <td>{{$sale->count * $sale->product->price - $sale->provider}}</td>
                                    <td>{{$sale->instprice}}</td>
                                    <td>{{$sale->insttype}}</td>
                                    <td>
                                        @if("$sale->insttype" == "Monthly")
                                        {{($sale->count * $sale->product->price - $sale->provider) / $sale->instprice }}
                                        @else
                                        {{($sale->count * $sale->product->price - $sale->provider) / $sale->instprice  }}
                                        @endif
                                    </td>
                                    <td>{{$sale->created_at}}</td>
                                        <!-- <td>
                                            <a href='{{url("/sales/$sale->id/edit")}}' class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <form action='{{url("/sales/$sale->id")}}' method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="delete">
                                            </form>
                                        </td> -->
                                    </tr>
                            </tr>

                            @endforeach
                          
                        </tbody>
  
                    </table>


     


<script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  
</body>
</html>
