<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateFees extends Model
{
    /**
     * |--------------------------------
     * | Admin ACCESS
     * |--------------------------------
     */
     protected $table ='affiliate_fees';
     
     protected $fillable = [
        'fee_date',
        'current_month',
        'fee_amount'
      ];
    
}
