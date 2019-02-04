<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinAmount extends Model
{
    protected $table ='join_amounts';
     
     protected $fillable = [
        'amount',
      ];
      /**
       * Last Amount value
       * @return string [amount]
       */
      public static function last(){
      	return static::orderBy('id','desc')->first() ? 
      	                        static::orderBy('id','desc')->first()->amount : null;
      }
}
