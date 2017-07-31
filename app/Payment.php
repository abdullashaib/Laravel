<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
    * Fillable fields for Payment
    * 
    * @var array     
    */
    protected $fillable = ['month', 'amount', 'pay_date', 'parents_id'];
      
}
