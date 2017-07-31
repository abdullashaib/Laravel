<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    /**
    * Fillable fields for Teacher
    * 
    * @var array     
    */
    protected $fillable = ['firstname', 'lastname', 'phone_number', 'email', 'course_id'];
    
    /**
    * Get teacher full name
    * 
    * @return string
    */
    public function getFullnameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }
   
}
