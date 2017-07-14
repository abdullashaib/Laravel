@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $teacher->firstname . " " . $teacher->lastname }} </h3>
 
{!! Form::open(['method' => 'PATCH', 'action' => ['TeacherController@update', $teacher->id]]) !!}
 
  <div class="form-group row">
    <label for="firstname" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $teacher->firstname }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="lastname" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $teacher->lastname }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="phone_number" class="col-sm-2 col-form-label">Phone Number:</label>
    <div class="col-sm-8">
      <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{ $teacher->phone_number }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" value="{{ $teacher->email }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="course_id" class="col-sm-2 col-form-label">Course Name:</label>
    <div class="col-sm-8">
      <select class="form-control" id="course_id" name="course_id">
 
      </select>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary">Add Teacher</button>
    </div>
  </div>
</form>

 @include('layouts.error')
</div>
@endsection 