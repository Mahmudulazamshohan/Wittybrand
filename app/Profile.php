<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Profile extends Model
{
     protected $table ='profiles';

      protected $fillable = [
        'user_id', 
        'profile_image_location',
        'fb_profile',
        'twitter_profile',
        'instagram_profile',
        'fb_is_visible',
        'twitter_is_visible',
        'instagram_is_visible'
      ];
      public static function findUser(){
           return self::where('user_id',Auth::id())->first();
      }
      public function us(){
        
      }
}
