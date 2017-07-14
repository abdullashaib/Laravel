@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  
 <h3> Adding New Student</h3>
 
<form action="/studentrecords" method="post">
 
 {{ csrf_field() }}
 
  <div class="form-group row">
    <label for="record_title" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="record_title	" name="record_title	" value="{{ old('record_title	') }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="course_id" class="col-sm-2 col-form-label">Course Name:</label>
    <div class="col-sm-8">
      <select class="form-control" id="course_id" name="course_id">
        <option value="*">Select one...</option>
        @foreach($courseList as $list)
          <option value="{{ $list->id }}">{{ $list->course_name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="record_body" class="col-sm-2 col-form-label">Description:</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="4" id="record_body" name="record_body">{{ old('record_body') }} </textarea>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="course_id" class="col-sm-2 col-form-label">Course Name:</label>
    <div class="col-sm-8">
      <select class="form-control" id="course_id" name="course_id">
        <option value="*">Select one...</option>
        @foreach($courseList as $list)
          <option value="{{ $list->id }}">{{ $list->course_name }}</option>
        @endforeach
      </select>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary">Add Record</button>
    </div>
  </div>
  
</form>

 @include('layouts.error')
</div>
@endsection 