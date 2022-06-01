@extends('layout')
@section('content')
@if($errors->any())
@foreach( $errors->all() as $error)
<p> {{$error}} </p>
@endforeach
@endif 
 <form class="w-50 m-auto pt-5" action='{{url("/clients/$client->id")}}' method="post" enctype="multipart/form-data ">
    @csrf
    @method("PUT")

    <div class="modal-header">						
        <h4 class="modal-title">EDIT CLIENT</h4>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label> Product Name</label>
            <input type="text" name="name" value="{{ $client->name}}" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label>National Id</label>
            <input type="text" class="form-control" value="{{ $client->nationalid}}" name="nationalid" required >
        </div>		
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" value="{{ $client->address}}" name="address" required >
        </div>	
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" value="{{ $client->phone}}" name="phone" required >
        </div>					
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="EDIT" name="add">
    </div>
</form>

@endsection