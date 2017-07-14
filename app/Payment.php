<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    
    protected $fillable = ['month', 'amount', 'pay_date', 'parents_id'];
      
}
