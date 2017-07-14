<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use Illuminate\Http\Request;
use App\Teacher;
use App\Course;

class TeacherController extends Controller
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
	  * Display a listing of teachers.
	  *
	  * @return Response Array
	  */
    public function index() {
      
      $teachers = Teacher::all();
      
      return view('teachers.index', compact('teachers'));
      
    }
    
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      $courses = Course::all();
      
      return view('teachers.create', compact('courses'));
      
    }
    
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( TeacherRequest $request) {
      
      Teacher::create(request(['firstname', 'lastname', 'phone_number', 'email', 'course_id']));
      
      flash('Teacher added')->success();
      
      return redirect('teachers');
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Teacher $id
	  * @return Response
	  */
    public function edit($id) {
     
      $teacher = Teacher::findOrFail($id);
    
      $courses = Course::all();
       
      return view('teachers.edit', compact('teacher', 'courses'));
      
    }
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Teacher $id
	  * @return Response
	  */
    public function update($id, Request $request) {
    
      $teacher = Teacher::findOrFail($id);
      
      $teacher->update($request->all());
      
      return redirect()->home();
    
    }
    
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Student $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $teacher = Teacher::find($id);
      
      $teacher->delete();
      
      flash('Teacher deleted ')->success();
      
      return redirect('teachers');
      
    }
    
    
}
