<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentRecord;
use App\Course;
use App\Parents;

class Student extends Model
{
    
    protected $fillable = ['firstname', 'lastname', 'gender', 'datebirth', 'healthcardnumber', 'version_code', 'parents_id'];
    
    
    public function studentrecords() {
   
      return $this->hasMany(StudentRecord::class);
   
   }
   
   
   public function courses() {
   
      return $this->belongsTo(StudentRecord::class);
   
   }
   
   public function parent() {
   
      return $this->belongsTo(Parents::class);
   }
}
