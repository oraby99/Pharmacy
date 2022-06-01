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
                    <div class="table-title  p-3 "  style="background-color:gray;  ">
                        <div class="row d-flex justify-content-around align-items-center">
                            <div class="col-sm-4">
                                <h2>Manage <b>Sales</b></h2>
                            </div>
                            <div class="col-sm-4">
                                <form class="form-inline my-2 my-lg-0" action="{{url('/search2')}}" method="get" >
                                @csrf 
                                <input class="form-control mr-sm-2" name ="keyword" type="search " placeholder="number of sale" aria-label="Search">
                                    <button class="btn btn-success my-2 my-sm-0" type="submit">SEARCH</button>
                                  </form>

                            </div>
                            <div class="col-sm-4">
                                <a href="#addProductModal" class="btn btn-success" data-toggle="modal"> <span>Add New Sale</span></a>
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
                            <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @if(empty($sales))
                             <div></div> 
                             @else 
                                @foreach($sales as $sale) 
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

                                    @endforeach
                                    
                           @endif         
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

                    <p> {{$error}} </p>

                    @endforeach
                    @endif
                <form action="{{url('/sales/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Sales</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                      
                        <div class="form-group">
                            <label>Medicine</label>
                            <select class="form-control" name="product_id">
                            @foreach($products as $product)
                                <option value ="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                          
                            </select>
                        </div>
                        <div class="form-group">
                            <label>client</label>
                           
                            <select class="form-control" name="client_id">
                                @foreach($clients as $client)
                                <option value ="{{$client->id}}">{{$client->name}}</option>
                                @endforeach
                                </select><br>
                        </div>
                        <div class="form-group">
                            <label>number of pieces</label>
                            <input type="number" name="count" class="form-control"formGroupName="numberPieces" required>
                        </div>
                       
                        <div class="form-group">
                            <label>provider value</label>
                            <input type="number" name="provider" class="form-control"formGroupName="providerValue" required>
                        </div>
                       
                        <div class="form-group">
                            <label>type of installment</label>
                            <select class="form-control" name="insttype">
                                <option value ="Monthly">Monthly</option>   
                                <option value ="Weekly">Weekly</option>                          
                            </select>
                            <!-- <input type="text" name ="insttype" class="form-control"formGroupName="installmentType" required> -->
                        </div>
                        <div class="form-group">
                            <label>value of installment</label>
                            <input type="number" name="instprice" class="form-control"formGroupName="installmentValue" required>
                        </div>                                                

                        <div class="form-group">
                             
                                <!-- <label>installment period</label> -->
                                
                                <input type="hidden" value="0"
                                name="instperiod" class="form-control"formGroupName="installmentPeriod" >
                               
                            </div> 
                                
                                
                                <div class="form-group">
                               
                                    <!-- <label>rest</label> -->
                                    <input type="hidden" value="0" name="rest" class="form-control"formGroupName="installmentPeriod" >
                               
                                </div> 
                               
                           
                            <div class="form-group">
                           
                                <!-- <label>price</label> -->
                                <input type="hidden" value="0" name="price" class="form-control"formGroupName="price" >
                           
                            </div> 
                       
                    </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="Add" name="add">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Modal HTML -->
    
        <!-- Delete Modal HTML -->
        <!-- <div id="deleteProductModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Delete Product</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        
        <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  
</body>
</html>