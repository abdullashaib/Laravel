<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    /**
    * Fillable fields for Course
    * 
    * @var array     
    */
    protected $fillable = ['course_name', 'description'];
    
    /**
    * Student belongs to courses 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo    
    */
    public function student() {
    
       return $this->belongsTo(Course::class);
    
    }
    
    
}
