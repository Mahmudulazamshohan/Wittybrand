<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoEarn extends Model
{
    protected $table ='video_earns';

      protected $fillable = [
        'user_id', 
        'date',
        'amount'
      ];
}
