<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
   
   /**
   * Fillable fields for Parents
   * 
   * @var array     
   */  
   protected $fillable = ['firstname', 'lastname', 'gender', 'phone_number', 'email', 'address', 'city', 'province', 'postal_code', 'monthly_payment'];
   
   /**
   * Parent has many Payments 
   * 
   * @return \Illuminate\Database\Eloquent\Relations\HasMany    
   */ 
   public function payments() {
   
      return $this->hasMany(Payment::class);
   
   }
   
   /**
   * Parent has many Students 
   * 
   * @return \Illuminate\Database\Eloquent\Relations\HasMany    
   */ 
   public function students() {
   
      return $this->hasMany(Student::class);
   
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
