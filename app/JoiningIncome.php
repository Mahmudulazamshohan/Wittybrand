<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoiningIncome extends Model
{
    protected $table ='joining_incomes';
     
    protected $fillable = [
    	'user_id',
        'amount'
      ];
}
