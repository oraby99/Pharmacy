@extends('layout')
@section('content')
<div class="container pt-5 mt-5">
  <div class="row text-center">
 <div class="col-xl-6 col-sm-6 mb-5">
    <div class="bg-white rounded shadow-sm py-4 px-4"><img src="images/products.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
  
        <a href="{{url('/products')}}" style="text-decoration: none; font-weight: bold ; font-size: 25px;" class="mb-2">Medicines</a>
    </div>
</div >
       <div class="col-xl-6 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-4 px-4"><img src="images/employess.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
      
            <a href="{{url('/empolyee')}}" style="text-decoration: none; font-weight: bold ; font-size: 25px;" class="mb-2">Pharmacists</a>
        </div>
    </div>
  
     <div class="col-xl-6 col-sm-6 mb-5">
      <div class="bg-white rounded shadow-sm py-4 px-4"><img src="images/clients.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
    
          <a href="{{url('/clients')}}" style="text-decoration: none; font-weight: bold ; font-size: 25px;" class="mb-2">Clients</a>
      </div>
  </div>
 
   <div class="col-xl-46 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-4 px-4"><img src="images/Sales.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
        
              <a href="{{url('/sales')}}" style="text-decoration: none; font-weight: bold ; font-size: 25px;" class="mb-2">Sales</a>
          </div>
      </div>
 

  </div>
</div>
@endsection