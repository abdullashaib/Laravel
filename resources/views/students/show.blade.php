@extends('layouts.layout')


@section('content')

<div class="form_wrapper">
  <h2>Student Details</h2>
  <table class="table table-bordered">
      <tr>
        <th> Name </th>
        <th> Gender </th>
        <th> Date of Birth</th>
        <th> Health Card</th>
        <th> Action Buttons</th>
      </tr>
      <tr> 
        <td><a href="/students/{{ $student->id }}">{{ $student->firstname . " " . $student->lastname }} </a></td>
        <td>{{ $student->gender }} </td>
        <td>{{ $student->datebirth }} </td>
        <td>{{ $student->healthcardnumber . " " . $student->version_code }} </td>
        <td class="center"> 
          <button type="button" class="btn btn-primary primary" data-toggle="modal" data-target="#addRecord">Add Record</button>
        </td>
      </tr>
  </table>
  @if(count($student->studentrecords))
  <h2>Student Reords</h2>
  <table class="table table-bordered">
      <tr>
        <th> # </th>
        <th> Title </th>
        <th> Course Name </th>
        <th> Description </th>
        <th> Date </th>
        <th> Operations </th>
      </tr>
     <?php $i = 1; 
        //echo $coursename->course_name;
     ?>
     @foreach($student->studentrecords as $record)
      <tr> 
        <td> {{ $i }} </td>
        <td>{{ $record->record_title }} </td>
        <td>{{ $record->course_name }} </td>
        <td>{{ $record->record_body }} </td>
        <td>{{ $record->created_at }} </td>
        <td class="center">   
          <a href="#" class="btn primary">Edit</a>  &nbsp;&nbsp;
          <a href="#" class="btn primary">Delete</a>
        </td>
      </tr>
      <?php $i++?>
    @endforeach
  </table>
  @endif
  <!-- Modal -->
<div id="addRecord" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Record</h4>
      </div>
      <div class="modal-body">
        
        <form action="/studentrecords" method="post">
          {{ csrf_field() }}
          <input type="hidden" id="student_id" name="student_id" value="{{ $student->id }}">
          <div class="form-group row">
            <label for="record_title" class="col-sm-3 col-form-label">Record Title:</label> 
            <div class="col-sm-8">
              <input type="text" class="form-control" id="record_title" name="record_title" value="{{ old('record_title') }}" required>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="course_id" class="col-sm-3 col-form-label">Course Name:</label>
            <div class="col-sm-8">
              <select class="form-control" id="course_id" name="course_id">
               
                @foreach($courses as $course)
                  <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                @endforeach
         
              </select>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="record_body" class="col-sm-3 col-form-label">Record Body:</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="5" id="record_body" name="record_body"> </textarea>
            </div>
          </div>
         
          <div class="form-group row">
            <label for="gender" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-8">
              <button type="submit" class="btn btn-primary">Add Student</button>
            </div>
          </div>
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
@endsection