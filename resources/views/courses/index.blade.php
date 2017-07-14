@extends('layouts.layout')


@section('content')

<div class="form_wrapper">

  <h2>Course List</h2>
  @if(count($courses))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Course Name</th>
          <th>Description</th>
          <th>Operation</th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($courses as $course)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/courses/{{ $course->id }}/edit">{{ $course->course_name }}</a></td>
          <td>{{ $course->description }}</td>
          <td><a href="courses/{{ $course->id }}/edit"> Edit</a> &nbsp;&nbsp;<a href="courses/{{ $course->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $course->course_name}}">Delete</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection