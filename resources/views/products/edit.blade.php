@extends('layout')
@section('content')
@if($errors->any())
@foreach( $errors->all() as $error)
<p> {{$error}} </p>
@endforeach
@endif 
 <form class="w-50 m-auto pt-5" action='{{url("/products/$product->id")}}' method="post" enctype="multipart/form-data ">
 @csrf
    @method("PUT")


    <div class="modal-header">						
        <h4 class="modal-title">EDIT MEDICINE</h4>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label> Medicine Name</label>
            <input type="text" name="name" value="{{ $product->name}}" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label>Category</label>
            <input type="text" class="form-control" value="{{ $product->cat}}" name="cat" required >
        </div>		
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" value="{{ $product->price}}" name="price" required >
        </div>	
        <div class="form-group">
            <label>Number OF pieces</label>
            <input type="number" class="form-control" value="{{ $product->count}}" name="count" required >
        </div>					
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="EDIT" name="add">
    </div>
</form>
@endsection