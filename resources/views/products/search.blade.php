@extends('layout')
@section('content')
    
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
                  <th> Id</th>
                      <th> Medicine Name </th>
                      <th>Medicine Image</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th> Number of pieces</th>
                   
                  </tr>
              </thead>
              <tbody>
              @foreach($products as $product) 

                  <tr>
                      <td>{{$product->id}}</td>
                      <td>{{$product->name}}</td>
                      <td><img src="{{asset(str_replace('public/' , 'storage/' ,$product->img)) }}" style="width: 100px;height: 100px;"></td>
                      <td> {{$product->cat}}</td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->count}}</td>
                  </tr>

                  @endforeach
                
              </tbody>

</table>
</div>
</div>        
</div>
@endsection