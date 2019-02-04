<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Notification;
use App\Http\Resources\NotificationResource;

class ApiNotificationController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:api');
    }
    public function pushNotification(){
      $notification =  Notification::where('user_id',Auth::id())
                                     ->where('view_status',1)
                                     ->get();
      $not_seen_notification =  Notification::where('user_id',Auth::id())
                                     ->where('view_status',0)
                                     ->get();

      return new NotificationResource([
        'seen_notification'=>$notification,
        'not_seen_notification'=>$not_seen_notification
      ]);
    }
    public function viewNotification(Request $r){
      $notification = Notification::where('id',$r->notification_id)->update([
      	'view_status'=>1
      ]);
      return [
         'success'=>
            [ 'message'=>$notification ? 'Successfully Saved' : '']
      ];
    }
}
