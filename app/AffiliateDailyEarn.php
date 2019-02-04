<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateDailyEarn extends Model
{
	protected $table ='affiliate_daily_earns';
     protected $fillable = [
        'user_id',
        'daily_earns',
        'today_date'
      ];
}
