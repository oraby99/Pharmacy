@extends('layout')

@section('content')
       
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

@endsection