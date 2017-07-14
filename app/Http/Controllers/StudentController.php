<?php

namespace App\Http\Controllers;

use App\Parents;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRegRequest;
use App\Student;
use App\Course;


class StudentController extends Controller
{
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct() {
    
      $this->middleware('auth');
      
    }
    
    /**
	  * Display a listing of students.
	  *
	  * @return Response Array
	  */
    public function index() {
      
      $students = Student::all();
      
      return view('students.index', compact('students'));
      
    }
    
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      $parents = Parents::all();
      
      return view('students.create', compact('parents'));
      
    }
    
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( StudentRegRequest $request) {
      
      Student::create(request(['firstname', 'lastname', 'gender', 'datebirth', 'healthcardnumber', 'version_code', 'parents_id', 'parent']));
      
      flash('Student added ')->success();
      
      return redirect('students');
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Student $student
	  * @return Response
	  */
    public function show( Student $student) {
     
      $courses = Course::all();
      
      return view('students.show', compact('student', 'courses'));
      
    }
    
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\StudentRecord $id
	  * @return Response
	  */
    public function edit( $id) {
     
      $student = Student::find($id);
      
      $parents = Parents::all();
      
      return view('students.edit', compact('student', 'parents'));
      
    }
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Student $id
	  * @return Response
	  */
    public function update($id, Request $request) {
    
      $course = Student::findOrFail($id);
      
      $course->update($request->all());
      
      flash('Student updated ')->success();
      
      return redirect('students');
    
    }
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Student $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $course = Student::find($id);
      
      $course->delete();
      
      flash('Student deleted ')->success();
      
      return redirect('students');
      
    }
    
    
    
}
