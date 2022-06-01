@extends('layout')
@section('content')
<div class="container-xl p-5">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title p-3 "  style="background-color:gray;  ">
                <div class="row d-flex justify-content-around align-items-center">
                    <div class="col-sm-4">
                        <h2>Manage <b>Clients</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <form class="form-inline my-2 my-lg-0" action="{{url('/search3')}}" method="get" >
                        @csrf 
                        <input class="form-control mr-sm-2" name ="cli" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">SEARCH</button>
                          </form>
    
                    </div>
                    <div class="col-sm-4">
                        <a href="#addClientModal" class="btn btn-success" data-toggle="modal"> <span>Add New Client</span></a>
                    </div>
                </div>
            </div>
          
               
            <table class="table table-striped table-hover">
                
                <thead>
                <tr>
                        
                        <th> ID</th>
                        <th>Client Name  </th>
                        <th>Address</th>
                        <th>Phone</th>
                       <th> National Id </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clients as $client) 
                
                    <tr>
                        <td>{{$client->id}}</td>
                        <td><a href='{{ url("/clients/$client->id") }}'>{{$client->name}}</a></td>
                        <td>{{$client->address}}</td>
                        <td>{{$client->phone}}</td>
                        <td>{{$client->nationalid}}</td>

                        <td>
                            <p>
                            <a href='{{url("/clients/$client->id/edit")}}' class="btn btn-primary" >Edit</a>
                            </p>
                            <form action='{{url("/clients/$client->id")}}' method="POST" >
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  <hr>      
</div>

<!-- ADD Modal HTML -->
<div id="addClientModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        @if($errors->any())

            @foreach( $errors->all() as $error)

            <p> {{$error}} </p>

            @endforeach
            @endif
        <form action="{{url('/clients/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">						
                    <h4 class="modal-title">Add Client</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name='name' class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>National iD</label>
                        <input type="text" name='nationalid' class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name='address' required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name='phone' class="form-control" required>
                    </div>		
                                       
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Add" name="add">
                </div>
            </form>
        </div>
    </div>
</div>


{{$clients->links()}}
@endsection