<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerAd extends Model
{
    protected $table ='banner_ads';

    protected $fillable = [
        'user_id', 
        'date',
        'amount'
      ];
}
