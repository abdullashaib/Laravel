<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Student;

class StudentRecord extends Model
{
    
    protected $fillable = ['record_title', 'course_id', 'record_body', 'student_id', 'user_id'];
    
    
    public function course() {
    
        return $this->belongsTo(Course::class);
    
    }
    
    
    public function student() {
    
        return $this->belongsTo(Student::class);
    
    }
    
}
