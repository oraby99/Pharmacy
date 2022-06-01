<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width , initial-scale =1.0" >
    <title> Sales Management Company</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/A.style.css.pagespeed.cf.mMBCBFkmOw.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  
<div class="container-xl ">

            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-4">
                                <h2 class= " text-center">SHOW <b>PRODUCTS</b></h2>
                            </div>
                            <!-- <div class="col-sm-4">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                                  </form>
                            </div> -->
                            <!-- <div class="col-sm-4">
                                <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New paroduct</span></a>
                                <a href="#deleteProductModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
                            </div> -->
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th> Id</th>
                                <th> Product Name </th>
                                <th>Product Image</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th> Number of pieces</th>
                             
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                               <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td><img src="{{asset(str_replace('public/' , 'storage/' ,$product->img)) }}" style="width: 100px;height: 100px;"></td>
                                <td> {{$product->cat}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->count}}</td>

                    
                                <!-- <td>
                                    <a href='{{ url("/products/$product->id/edit") }}' class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <form action='{{url("/products/$product->id")}}' method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete">
                                    </form>                                
                                </td> -->
                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>        
        </div>
        <script src="stylesheet" href="{{ asset('js/index.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="stylesheet" href="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  
</body>
</html>