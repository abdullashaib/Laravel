<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use StudentRecord;

class Course extends Model
{
    
    protected $fillable = ['course_name', 'description'];
    
    
    public function student() {
    
       return $this->belongsTo(Course::class);
    
    }
    /*
    public function studentrecord()
    {
        return $this->hasMany(StudentRecord::class);
    }
   */ 
    
}
