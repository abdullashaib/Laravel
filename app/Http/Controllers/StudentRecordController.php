<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRecordRequest;
use App\StudentRecord;
use App\Course;

class StudentRecordController extends Controller
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
	 * Display a listing of student records.
	 *
	 * @return Response Array
	 */
    public function index() {
      
      $sRecords = StudentRecord::all();
      
      return view('studentrecords.index', compact('sRecords'));
      
    }
   
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */    
    public function store( StudentRecordRequest $request) {
       
      StudentRecord::create([
      
        'record_title' => request('record_title'),
        'course_id' => request('course_id'),
        'record_body' => request('record_body'),
        'student_id' => request('student_id'),
        'user_id' => auth()->id()
      ]);
      
      return redirect()->home();
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\StudentRecord $studentrecord
	  * @return Response
	  */
    public function show( StudentRecord $studentrecord) {
      
      return view('studentrecords.show', compact('studentrecord'));
      
    }
    
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\StudentRecord $id
	  * @return Response
	  */
    public function edit( $id) {
     
      $studentrec = StudentRecord::find($id);
      
      $courseList = Course::all();
      
      return view('studentrecords.edit', compact('studentrec', 'courseList'));
      
    }
    
}
