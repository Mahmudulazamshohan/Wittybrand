<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateUser extends Model
{
	  protected $table ='affiliate_users';

      protected $fillable = [
        'user_id', 'affiliate_id'
      ];
      public function users(){
      	return $this->hasOne('App\User','id','user_id');
      }
      public function profile(){
      	return $this->hasOne('App\Profile','user_id','user_id');
      }
      public function totalUser(){
      	return $this->where('affiliate_id',$this->user_id)->count();
      }


}
