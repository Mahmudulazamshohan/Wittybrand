<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdRefEarning extends Model
{
	protected $table ='ad_ref_earnings';

    protected $fillable = [
        'user_id', 
        'affiliate_user',
        'type_of_earn',
        'date',
        'amount'
      ];
   
}
