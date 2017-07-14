@extends('layouts.layout')


@section('content')

<div class="form_wrapper">

  <h2>Parents List</h2>
  @if(count($parents))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th> Full Name</th>
          <th> Address</th>
          <th> Phone Number</th>
          <th> Fee</th>
          <th> </th>
        </tr>
      <?php $i = 1; $total = 0; ?> 
      @foreach($parents as $parent)
         <?php $total+= $parent->monthly_payment; ?> 
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/parents/{{ $parent->id }}/edit">{{ $parent->firstname . " " . $parent->lastname}}</a></td>
          <td> {{ $parent->address . ", " . $parent->city . " " . $parent->province}}</td>
          <td>{{ $parent->phone_number }}</td>
          <td>${{ $parent->monthly_payment }}</td>
          <td>
            <a href="parents/create">Add</a>&nbsp;&nbsp;&nbsp;
            <a href="parents/{{ $parent->id }}/edit">Edit</a>&nbsp;&nbsp;&nbsp;
            <a href="parents/{{ $parent->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $parent->firstname . " " . $parent->lastname }}">Delete</a>
          </td>
        </tr>
         <?php $i++ ?>  
      @endforeach
        <tr>
          <td colspan="4"><center><strong>TOTAL</strong></center></td>
          <td><strong>${{ $total }}</strong></td>
        </tr>
    </table>
  @endif
</div>
@endsection