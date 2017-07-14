@extends('layouts.layout')


@section('content')

<div class="form_wrapper">
    <h2>Parents List</h2>
    <table class="table table-bordered">
      <tr>
        <th> Full Name</th>
        <th> Address</th>
        <th> Phone Number</th>
      </tr>
      <tr>
        <td>{{ $parent->firstname . " " . $parent->lastname}}</td>
        <td> {{ $parent->address . ", " . $parent->city . " " . $parent->province}}</td>
        <td>{{ $parent->phone_number }}</td>
      </tr>
    </table>
    <div class="payment">
      <h2>Payment History</h2>
      @if(count($parent->payments))
        <table class="table table-bordered">
          <tr>
            <th> # </td>
            <th> Month </th>
            <th> Amount Paid</th>
            <th> Payment Date</th>
          </tr>
           <?php $i = 1 ?>
          @foreach($parent->payments as $payment)
            <tr>
              <td>{{ $i }} </td>
              <td>{{ $payment->month }} </td>
              <td>${{ $payment->amount }} </td>
              <td>{{ $payment->pay_date }} </td>
            </tr>
            <?php $i++ ?>
          @endforeach
        </table>
      @else
        <h4>No payment has been made for this parent</h4>
      @endif
    </div>
    
    <div class="student">
      <h2>Student List</h2>
      @if(count($parent->students))
        <table class="table table-bordered">
            <tr>
              <th> # </td>
              <th> Name </th>
              <th> Gender </th>
              <th> Date of Birth</th>
              <th> Health Card</th>
            </tr>
            <?php $i = 1 ?>
          @foreach($parent->students as $student)
              <tr>
                <td>{{ $i }} </td>
                <td><a href="/students/{{ $student->id }}">{{ $student->firstname . " " . $student->lastname }} </a></td>
                <td>{{ $student->gender }} </td>
                <td>{{ $student->datebirth }} </td>
                <td>{{ $student->healthcardnumber . " " . $student->version_code }} </td>
              </tr>
              <?php $i++ ?>
            @endforeach
          </table>
        @else
          <h4>No student has been registered</h4>
        @endif
      
    </div>
</div>
@endsection