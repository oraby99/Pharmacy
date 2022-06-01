@extends('layout')
@section('content')
<div class="container-xl pt-5">

    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class= " text-center">SHOW <b>MEDICINE</b></h2>
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

                    <tr>
                       <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td><img src='/images/products/{{$product->img}}' style="width: 100px;height: 100px;"></td>
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
@endsection