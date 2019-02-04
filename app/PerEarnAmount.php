<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerEarnAmount extends Model
{
     protected $table ='per_earn_amounts';

      protected $fillable = [
        'video_per_view', 
        'bannerad_per_view',
        'quiz_view'
      ];
}
