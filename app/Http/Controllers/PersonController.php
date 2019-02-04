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
use App\VideoEarn;
use App\BannerAd;
use App\AdRefEarning;

class PersonController extends Controller
{
      protected $profile ; 
      public function __construct(){
         $data = [];
         $this->middleware('auth');
     }
     public function imageViews($fileName,Request $r){
        return Image::make(storage_path('app/profiles/'.$fileName))
                         ->resize($r->w ? $r->w : 100,
                                  $r->h ? $r->h : 100)
                         ->response();
     }
    public function dashboard(){
        $data['title'] = 'Dashboard';
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()]; 
        //Compile earn section                                                 
        $videoEarn = VideoEarn::where('user_id',Auth::id()) 
                               ->sum('amount');
        $videoEarnDaily = VideoEarn::where('user_id',Auth::id())
                                ->where('date',date('Y-m-d'))
                                ->sum('amount');
        $bannerAdDaily = BannerAd::where('user_id',Auth::id())
                               ->where('date',date('Y-m-d'))     
                               ->sum('amount');
        $bannerAd = BannerAd::where('user_id',Auth::id())
                               ->sum('amount');
        $adRefEarn = AdRefEarning::where('user_id',Auth::id())
                               ->sum('amount');
        $adRefEarnDaily = AdRefEarning::where('user_id',Auth::id())
                               ->where('date',date('Y-m-d'))
                               ->sum('amount');  
               
        $data['earn_structure']  = [
                                    'video_earn' => $videoEarn,
                                    'banner_ad' =>$bannerAd,
                                    'ad_refferal_income'=>$adRefEarn,
                                    'video_daily_earn' =>$videoEarnDaily,
                                    'banner_ad_daily_earn'=>$bannerAdDaily,
                                    'ad_refferal_daily'=>$adRefEarnDaily,
                                    'total_daily'=>$videoEarnDaily + $bannerAdDaily + $adRefEarnDaily,
                                    'total_income'=>$videoEarn + $bannerAd + $adRefEarn
                                  ];

        //echo "<pre>";
        //var_dump($data['earn_structure']);  
      	return view('person.dashboard',$data);
      }
     public function referenceUser(){
      	$data['title'] ="Reference User";
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()];  
      	$data['reference'] = AffiliateUser::where('affiliate_id',Auth::id())
      	                                                             ->paginate(6);
        
        $data['count'] = count($data['reference']);
                   
        return view('person.reference-user',$data);
      }
     public function profile(){
      	$data['title'] = "Profile";
        $data['user'] = User::find(Auth::id());
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()]; 
      	return view('person.profile',$data);
      }
     public function storeProfile(Request $r){
        $this->validate($r,[
          'name'=>'required|max:255|string',
          'images'=>'mimes:jpg,jpeg,png,gif',
          'fb_profile'=>'max:255',
          'twitter_profile'=>'max:255',
          'instagram_profile'=>'max:255'
        ]);
        $file = $r->file('images');
        if(!is_null($file)){
            $image_location = Storage::put('profiles',$file);
        }
        $profiles =Profile::where('user_id',Auth::id())->first();
        if(!$profiles){

          User::where('id',Auth::id())->update([
            'name'=>$r->name
          ]);
          Profile::create([
          'user_id'=>Auth::id(),
          'profile_image_location'=>$image_location,
          'fb_profile'=>$r->fb_profile,
          'twitter_profile'=>$r->twitter_profile,
          'instagram_profile'=>$r->instagram_profile,
          'fb_is_visible'=>$r->fb_visiable,
          'instagram_is_visible'=>$r->instagram_visiable,
          'twitter_is_visible'=>$r->twitter_visiable
        ]); 
        }else{

           User::where('id',Auth::id())->update([
            'name'=>$r->name
          ]);
          if($r->file('images')!=null && $profiles->profile_image_location!=null){
             Storage::delete($profiles->profile_image_location);
          }else{
            $image_location = $profiles->profile_image_location;
          }
         
          Profile::where('user_id',Auth::id())
          ->update([
          'user_id'=>Auth::id(),
          'profile_image_location'=>$image_location,
          'fb_profile'=>$r->fb_profile,
          'twitter_profile'=>$r->twitter_profile,
          'instagram_profile'=>$r->instagram_profile,
          'fb_is_visible'=>$r->fb_visiable,
          'instagram_is_visible'=>$r->instagram_visiable,
          'twitter_is_visible'=>$r->twitter_visiable
        ]);
        }
        session()->flash('type','success');
        session()->flash('message','Successfully updated profile');

        return redirect()->back();

      }

      public function help(){
        $data['title'] ="Help";
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()];  
        return view('person.help',$data);
      }
      public function challenge(){
        $data['title'] ="Challenge";
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()];  
        //return view('person.challenge',$data);
        return view('person.coming-soon',$data);
       
      }
      public function changePassword(){
        $data['title'] ="Change Password";
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()]; 
        return view('person.change-password',$data);
       
      }
      public function storeChangePassword(Request $r){
        $this->validate($r,[
          'current_password'=>'required',
          'password'=>'required|min:6|confirmed'
         
        ]);
        
        if($user = User::where('id',Auth::id())->first()){
          if(password_verify($r->password,$user->password)){
            session()->flash('type','danger');
            session()->flash('message','Please enter new password,Not old password again');
            return redirect()->back();
          }
          if(!password_verify($r->current_password,$user->password)){
               session()->flash('type','danger');
               session()->flash('message','Please enter correct password');
              return redirect()->back();
          }else{
            User::where('id',Auth::id())->update([
              'password'=>Hash::make($r->password)
            ]);
             session()->flash('type','success');
             session()->flash('message','Password Change Successfully');
             return redirect()->back();
          }
        }

        
      }
      public function apps(){  
        return redirect()->to('https://play.google.com/store/apps/details?id=com.lenovo.anyshare.gps');
      }
     
      public function feedBack(){
        $data['title'] ="FeedBack";
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()]; 
        return view('person.feed-back',$data);
      }
      public function storeFeedBack(Request $r){
        $this->validate($r,[
          'subject'=>'required',
          'codes'=>'required|max:3000|min:10'
        ]);
        $f = Feedback::create([
                'user_id'=>Auth::id(),
                'subject'=>$r->subject,
                'codes'=>$r->codes
              ]);
        if(!is_null($f)){
         session()->flash('type','success');
         session()->flash('message','Successfully send to wittybrand admin');
        }else{
          session()->flash('type','danger');
          session()->flash('message','Failed to send data,please try again');
        }
        return redirect()->back();
      }
      public function goal(){
        $data['title'] ="Challenge";
        $data['profile'] = Profile::findUser();
        $data['notify'] = [Notification::where('user_id',Auth::id())
                                                          ->orderBy('id','desc')
                                                          ->get(),Notification::where('user_id',Auth::id())
                                                          ->where('view_status',0)
                                                          ->count()];  
        //return view('person.challenge',$data);
        return view('person.coming-soon',$data);
      }


}
