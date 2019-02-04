<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\AffiliateUser;
use Auth;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\View;
use App\Notification;
use Illuminate\Support\Facades\Hash;
use App\Feedback;
use Carbon\Carbon;

class NotificationController extends Controller
{

   public function __construct(){
   	$this->middleware('auth');
   }
   public function notification($id,$token){
        $data['title'] ="Change Password";
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()]; 
        if(md5($id) == $token){
            
            if($notification = Notification::where('id',$id)
                                                      ->where('view_status',0)
                                                      ->first()){
                    Notification::where('id',$notification->id)->update([
                       'view_status'=>1
                    ]);
            
            }
            $data['notification'] = Notification::where('id',$id)
                                                          ->first();       
          return view('person.notification',$data);
        }else{
          return view('person.error-page',$data);
        }
      }}
