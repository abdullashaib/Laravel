<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentRecord;
use App\Course;
use App\Parents;

class Student extends Model
{
    
    /**
    * Fillable fields for Student
    * 
    * @var array     
    */ 
    protected $fillable = ['firstname', 'lastname', 'gender', 'datebirth', 'healthcardnumber', 'version_code', 'parents_id'];
    
    /**
    * Student has many studentrecords 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\HasMany    
    */ 
    public function studentrecords() {
   
      return $this->hasMany(StudentRecord::class);
   
   }
   
   /**
   * Student belongs to courses 
   * 
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo    
   */
   public function courses() {
   
      return $this->belongsTo(StudentRecord::class);
   
   }
   
   /**
   * Student belongs to parent 
   * 
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo    
   */
   public function parent() {
   
      return $this->belongsTo(Parents::class);
   }
   
    /**
    * Get members full name
    * 
    * @return string
    */
    public function getFullnameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }
}
