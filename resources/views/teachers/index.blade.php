@extends('layouts.layout')


@section('content')

<div class="form_wrapper">

  <h2>Teacher List</h2>
  @if(count($teachers))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th> Full Name</th>
          <th> Phone Number</th>
          <th> Email</th>
           <th> Operation</th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($teachers as $teacher)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/teachers/{{ $teacher->id }}/edit">{{ $teacher->fullname }}</a></td>
          <td> {{ $teacher->phone_number}}</td>
          <td>{{ $teacher->email }}</td>
         <td><a href="teachers/create">Add</a>&nbsp;&nbsp;&nbsp;<a href="teachers/{{ $teacher->id }}/edit">Edit</a>&nbsp;&nbsp;&nbsp;<a href="teachers/{{ $teacher->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $teacher->firstname . " " . $teacher->lastname }}">Delete</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @endif
</div>
@endsection