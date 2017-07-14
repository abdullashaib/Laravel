@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  

<h3>Adding New Parent</h3>

<form action="/parents" method="post">
 {{ csrf_field() }}
  
  <div class="form-group row">
    <label for="firstname" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="lastname" class="col-sm-2 col-form-label">Last Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-8">
      <select class="form-control" id="gender" name="gender">
        <option>Female</option>
        <option>Male</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="phone_number" class="col-sm-2 col-form-label">Phone Number:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="city" class="col-sm-2 col-form-label">City:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="province" class="col-sm-2 col-form-label">Province:</label>
    <div class="col-sm-8">
      <select class="form-control" id="province" name="province">
        <option selected="selected">Ontario</option>
        <option>Quebec</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="postal_code" class="col-sm-2 col-form-label">Postal Code:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="anual_payment" class="col-sm-2 col-form-label">Monthly Payment:</label>
    <div class="col-sm-8">
      <select class="form-control" id="monthly_payment" name="monthly_payment" required>
        <option value="50">$50</option>
        <option value="100">$100</option>
        <option value="150">$150</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

 @include('layouts.error')
 
</div>
@endsection 