<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    protected $fillable = ['firstname', 'lastname', 'phone_number', 'email', 'course_id'];
   
}
