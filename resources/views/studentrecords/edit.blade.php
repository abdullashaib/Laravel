@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $studentrec->firstname . " " . $studentrec->lastname }} </h3>
 
{!! Form::open(['method' => 'PATCH', 'action' => ['StudentRecordController@update', $studentrec->id]]) !!}
                                                                                         
  <div class="form-group row">
    <label for="firstname" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $student->firstname }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="lastname" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $student->lastname }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-8">
      <select class="form-control" id="gender" name="gender">
        <option value="1">Select one...</option>
        <option selected="selected">{{ $student->gender }}</option>
        <option>Female</option>
        <option>Male</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="phone_number" class="col-sm-2 col-form-label">Date of Birth:</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" id="datebirth" name="datebirth" value="{{ $student->datebirth }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Health Card:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="healthcardnumber" name="healthcardnumber" value="{{ $student->healthcardnumber }}" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Version Code:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="version_code" name="version_code" value="{{ $student->version_code }}" required>
    </div>
  </div> 
  
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Parent Name:</label>
    <div class="col-sm-8">
      <select class="form-control" id="parent_id" name="parent_id">
       
        @foreach($parents as $parent)
          <option value="{{ $parent->id }}" {{ ($student->parents_id == $parent->id) ? "selected" : "" }}> {{ $parent->firstname . " " . $parent->lastname }} </option> 
        @endforeach
 
      </select>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary">Update Student</button>
    </div>
  </div>
</form>

 @include('layouts.error')
</div>
@endsection 