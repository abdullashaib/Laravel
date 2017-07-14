@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  
 <h3> Adding New Student</h3>
 
<form action="/students" method="post">
 
 {{ csrf_field() }}
 
  <div class="form-group row">
    <label for="firstname" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="lastname" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-8">
      <select class="form-control" id="gender" name="gender">
        <option value="1">Select one...</option>
        <option>Female</option>
        <option>Male</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="phone_number" class="col-sm-2 col-form-label">Date of Birth:</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" id="datebirth" name="datebirth" value="{{ old('datebirth') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Health Card:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="healthcardnumber" name="healthcardnumber" value="{{ old('healthcardnumber') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Version Code:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="version_code" name="version_code" value="{{ old('version_code') }}" required>
    </div>
  </div> 
  
  <div class="form-group row">
    <label for="parents_id" class="col-sm-2 col-form-label">Parent Name:</label>
    <div class="col-sm-8">
      <select class="form-control" id="parents_id" name="parents_id">
         <option value="*">Select one..</option>
        @foreach($parents as $parent)
          <option value="{{ $parent->id }}">{{ $parent->firstname . " " . $parent->lastname}}</option>
        @endforeach
 
      </select>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary">Add Student</button>
    </div>
  </div>
  
</form>

 @include('layouts.error')
</div>
@endsection 