<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	  protected $table ='notifications';
	  
      protected $fillable = [
        'user_id', 'notification_string','view_status','created_at'
      ];
     protected $hidden = [
        'updated_at'
    ];


}
