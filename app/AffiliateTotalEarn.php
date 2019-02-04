<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateTotalEarn extends Model
{
	 protected $table ='affiliate_total_earns';
     protected $fillable = [
        'user_id',
        'total_earns'
      ];
}
