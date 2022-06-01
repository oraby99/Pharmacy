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


    <script>
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
            
            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){
                if(this.checked){
                    checkbox.each(function(){
                        this.checked = true;                        
                    });
                } else{
                    checkbox.each(function(){
                        this.checked = false;                        
                    });
                } 
            });
            checkbox.click(function(){
                if(!this.checked){
                    $("#selectAll").prop("checked", false);
                }
            });
        });
        </script>
   
        
        <div class="container-xl p-5">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title p-3 "  style="background-color:gray;  ">
                        <div class="row d-flex justify-content-around align-items-center">
                            <div class="col-sm-4">
                                <h2>Manage <b>Medicines</b></h2>
                            </div>
                            <div class="col-sm-4">
                                <form class="form-inline my-2 my-lg-0" action="{{url('/search1')}}" method="get" >
                                @csrf 
                                <input class="form-control mr-sm-2" name ="keyword" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-success my-2 my-sm-0" type="submit">SEARCH</button>
                                  </form>
                     
                            </div>
                            <div class="col-sm-4">
                                <a href="#addProductModal" class="btn btn-success" data-toggle="modal"> <span>Add New Medicine</span></a>
                            </div>
                        </div>
                    </div>
                  
                       
                    <table class="table table-striped table-hover">
                        
                        <thead>
                            <tr>
                                <th> Id</th>
                                <th> Medicine Name </th>
                                <th> cat</th>
                                <th> Price</th>
                                <th> Count</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product) 
                        
                            <tr>
                                <td>{{$product->id}}</td>
                                <td><a href='{{ url("/products/$product->id") }}'>{{$product->name}}</a></td>
                                <td>{{$product->cat}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->count}}</td>
                                <td>
                                    <!-- <button  class="edit btn btn-info my-2 rounded-lg edit-product"  onclick="viewEditPage('{{$product->id}}')"  > edit</button> -->
                                    <p>
                                    <a href='{{url("/products/$product->id/edit")}}' class="btn btn-primary" >Edit</a>
                                    </p>
                                    <form action='{{url("/products/$product->id")}}' method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>        
        </div>

        <!-- ADD Modal HTML -->
        <div id="addProductModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                @if($errors->any())

                    @foreach( $errors->all() as $error)

                        <p style="color: red"> {{$error}} </p>

                    @endforeach
                    @endif
                <form action="{{url('/products/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Medicine</h4>
                            <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label> Medicine Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                           
                           
                            <div class="form-group">
                                <label>Medicine Image</label>
                                <input type="file" class="form-control" name="img">
                            </div>		
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" class="form-control" name="cat" required >
                            </div>		
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price" required >
                            </div>	
                            <div class="form-group">
                                <label>Number OF pieces</label>
                                <input type="number" class="form-control" name="count" required >
                            </div>					
                        </div>
                        <div class="modal-footer">
                            <input type="submit" onclic= addStyle() class="btn btn-success" value="Add" name="add">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    
        {{$products->links()}}
        <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        
        
        
     
</body>

</html>