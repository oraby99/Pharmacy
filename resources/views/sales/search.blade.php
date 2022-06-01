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
  
  
       
  
      </div>
  </div>
  </div>
@endsection