@extends('layouts.layout')


@section('content')

<div class="form_wrapper">

  <h2>Course List</h2>
  @if(count($students))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Name</th>
          <th>Gender</th>
          <th>Date of Birth</th>
          <th>Health Card</th>
          <th>Operation</th>
        </tr>                  
      <?php $i = 1 ?> 
      @foreach($students as $student)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/students/{{ $student->id }}">{{ $student->firstname . " " . $student->lastname }}</a></td>
          <td>{{ $student->gender }}</td>
          <td>{{ $student->datebirth }}</td>
          <td>{{ $student->healthcardnumber . " " . $student->version_code }}</td>
          <td>
            <a href="students/create">Add</a>&nbsp;&nbsp;&nbsp;
            <a href="students/{{ $student->id }}/edit">Edit</a>&nbsp;&nbsp;&nbsp;
            <a href="students/{{ $student->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $student->firstname . " " . $student->lastname }}">Delete</a>
          </td> 
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection