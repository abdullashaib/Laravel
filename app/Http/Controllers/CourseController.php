<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use Illuminate\Session;
use App\Course;
use App\Teacher;

class CourseController extends Controller
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
	  * Display a listing of courses.
	  *
	  * @return Response Array
    */
    public function index() {
      
      $courses = Course::all();
      
      return view('courses.index', compact('courses'));
      
    }
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      $teachers = Teacher::all();
      
      return view('courses.create', compact('teachers'));
      
    }
    
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( CourseRequest $request) {
      
      Course::create([
        'course_name' => request('course_name'), 
        'description' => request('description')
      ]);
      
      flash('Course added successful')->success();
      
      return redirect('courses');
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Course $course
	  * @return Response
	  */
    public function show( Course $course) {
     
      return view('courses.show', compact('course'));
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Course $id
	  * @return Response
	  */
    public function edit($id) {
     
      $course = Course::findOrFail($id);
      
      $teachers = Teacher::all();
      
      return view('courses.edit', compact('course', 'teachers'));
      
    }
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Teacher $id
	  * @return Response
	  */
    public function update($id, Request $request) {
    
      $course = Course::findOrFail($id);
      
      $course->update($request->all());
      
      return redirect()->home();
    
    }
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Course $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $course = Course::find($id);
      
      $course->delete();
      
      flash('Course deleted ')->success();
      
      return redirect('courses');
      
    }
    
}
