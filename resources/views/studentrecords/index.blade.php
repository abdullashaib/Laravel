@extends('layouts.layout')


@section('content')

<div class="form_wrapper">

  <h2>Course List</h2>
  @if(count($sRecords))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Title</th>
          <th>Description</th>
          <th>Course Name</th>
          <th>Student Name</th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($sRecords as $record)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/studentrecords/{{ $record->id }}/edit">{{ $record->record_title }}</a></td>
          <td>{{ $record->record_body }}</td>
          <td>{{ $record->course->course_name }}</td>
           <td>{{ $record->student->firstname . " " . $record->student->lastname }}</td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection