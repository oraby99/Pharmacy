@extends('layout')
@section('content')
<section class="bg-image">

  <div class="signup-form text-center">
      <form   action="{{url('register')}}" method="POST">
        @csrf
          <h2>Register</h2>
          <p class="hint-text-register " style="font-size:18px; font-weight:bold; color:white;">Create your account. It's free and only takes a minute.</p>
          <div class="form-group">
                  <input type="text" class="form-control w-25 m-auto" name="name" formControlName="firstName" placeholder="First Name" required="required">
          </div>
          <div class="form-group">
              <input type="text" class="form-control w-25 m-auto" name="phone" placeholder="Phone Number"  formControlName="phone" >
          </div>
         
          <div class="form-group">
              <input type="number" class="form-control w-25 m-auto" name="salary" placeholder="salary"  formControlName="salary" required="required">
          </div>
       
          <div class="form-group">
              <input type="number" class="form-control w-25 m-auto" name="clientsNumber"   formControlName="clientNumbers" placeholder="Clients Number" required="required">
          </div>
          <div class="form-group">
              <input type="text" class="form-control w-25 m-auto" name="rate" formControlName="CommistionRate" placeholder="Commition Rate" required="required">
          </div>
          <div class="form-group">
              <input type="email" class="form-control w-25 m-auto" name="email" placeholder="Email" formControlName="email" required="required">
          </div>
          <div class="form-group">
              <input type="password" class="form-control w-25 m-auto" name="password" formControlName="password" placeholder="Password" required="required">
          </div>
          <div class="form-group">
              <input type="password" class="form-control w-25 m-auto" name="password_confirmation"  placeholder="Confirm Password" required="required">
          </div>        
        
          <div class="form-group">
              <button type="submit" class="btn btn-success w-25 m-auto btn-lg btn-block" >Register Now</button>
          </div>
      </form>
  </div>
  
  </section>
@endsection