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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Salary</th>
                      <th>Clients Number</th>
                      <th>commistion Rate</th>
                   
                  </tr>
              </thead>
              <tbody>
              @foreach($users as $user) 
                  <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td> {{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->salary}}</td>
                      <td>{{$user->clientsNumber}}</td>
                      <td>{{$user->rate}}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
@endsection