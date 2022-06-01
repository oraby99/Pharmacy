@extends('layout')
      
@section('content')
          
      <div class="container-xl p-5 ">
            <div class="table-responsive">
                <div class="table-wrapper ">
                    <div class="table-title p-3 "  style="background-color:gray;  ">
                        <div class="row d-flex justify-content-around align-items-center">
                            <div class="col-sm-4">
                                <h2>Manage <b>Pharmacists</b></h2>
                            </div>
                            <div class="col-sm-4">
                            <form class="form-inline my-2 my-lg-0" action="{{url('/search4')}}" method="get" >
                                @csrf 
                                <input class="form-control mr-sm-2" name ="keyword" type="search" placeholder="Search" aria-label="Search">
                                    <!-- <button class="btn btn-success my-2 my-sm-0" type="submit">SEARCH</button> -->
                                  </form> 
                            </div>
                            <div class="col-sm-4 ">
                                <a href="{{url('register')}}" class="btn btn-success "> <span>Add New Pharmacist</span></a>
                            </div>
                        </div>
                    </div>
        
        <table class="table table-striped table-hover ">
            <thead >
                    <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Salary</th>
                                <th>Clients Number</th>
                                <th>commistion Rate</th>
                                <th>Actions</th>
                    </tr>
            </thead>
        
            <tbody>
                            @foreach($users as $user) 

                          <tr>
                                <td>{{$user->id}}</td>
                                <td><a href='{{ url("/empolyee/$user->id") }}'>{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->salary}}</td>
                                <td>{{$user->clientsNumber}}</td>
                                <td>{{$user->rate}}</td>
                                <td>
                                    <form action='{{url("/empolyee/$user->id")}}' method="POST" >
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
            </div>        
        </div>
     
        {{$users->links()}}
@endsection
