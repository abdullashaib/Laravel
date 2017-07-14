@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $course->course_name }}</h3>
 
{!! Form::open(['method' => 'PATCH', 'action' => ['CourseController@update', $course->id]]) !!}
 
  <div class="form-group row">
    <label for="course_name" class="col-sm-2 col-form-label">Course Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="course_name" name="course_name" value="{{ $course->course_name }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">Description:</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="4" id="description" name="description"> {{ $course->description }}</textarea>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary">Add Course</button>
    </div>
  </div>
  
</form>

 @include('layouts.error')
</div>
@endsection 