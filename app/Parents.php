<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    
   protected $fillable = ['firstname', 'lastname', 'gender', 'phone_number', 'email', 'address', 'city', 'province', 'postal_code', 'monthly_payment'];
   
   
   public function payments() {
   
      return $this->hasMany(Payment::class);
   
   }
   
   public function students() {
   
      return $this->hasMany(Student::class);
      //return $this->hasMany('App\Parents', 'parent_id');
   
   }
   
}
