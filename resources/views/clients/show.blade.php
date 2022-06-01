@extends('layout')
@section('content')
<div class="container-xl ">

    <div class="table-responsive pt-5">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class= " text-center">SHOW <b>CLIENTS</b></h2>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th> Id</th>
                        <th> client Name </th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>National Id</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
                        <td> {{$client->phone}}</td>
                        <td>{{$client->nationalid}}</td>
                        <td>{{$client->address}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>        
</div>
@endsection