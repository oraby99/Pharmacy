@extends('layout')

@section('content')
            
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

@endsection