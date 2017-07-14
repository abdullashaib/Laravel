@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  
 <h3> Make Payment</h3>
 
<form action="/payments" method="POST">
 
 {{ csrf_field() }}
  
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Month:</label>
    <div class="col-sm-8">
      <select class="form-control" id="month" name="month" required>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="lastname" class="col-sm-2 col-form-label">Amount:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="amount" name="amount" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="phone_number" class="col-sm-2 col-form-label">Payment Date:</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" id="pay_date" name="pay_date" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Parent Name:</label>
    <div class="col-sm-8">
      <select class="form-control" id="parents_id" name="parents_id">
        <option value="*">Select one...</option>
        @foreach($parents as $parent)
          <option value="{{ $parent->id }}">{{ $parent->firstname . " " . $parent->lastname}}</option>
        @endforeach
 
      </select>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary">Make Payment</button>
    </div>
  </div>
  
</form>

 @include('layouts.error')
</div>
@endsection 