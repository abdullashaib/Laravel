<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Student;

class StudentRecord extends Model
{
    /**
    * Fillable fields for StudentRecord
    * 
    * @var array     
    */
    protected $fillable = ['record_title', 'course_id', 'record_body', 'student_id', 'user_id'];
    
    /**
    * StudentRecord belongs to course 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo    
    */
    public function course() {
    
        return $this->belongsTo(Course::class);
    
    }
    
    /**
    * StudentRecord belongs to student 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo    
    */
    public function student() {
    
        return $this->belongsTo(Student::class);
    
    }
    
}
