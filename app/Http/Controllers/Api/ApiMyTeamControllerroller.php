<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\AffiliateUser;
use Auth;
use App\Http\Resources\ProfileResource;
class ApiMyTeamControllerroller extends Controller
{
    public function __construct(){
        $this->middleware('auth:api');
    }
    public function getAffiliateUsers(){
      //return ['id'=> Auth::id()];
      $affiliateUser = AffiliateUser::where('affiliate_id',Auth::id())
                                                                     ->get();
      $data = [];
      // $data['data'][] = [
      //   'name'=>null,
      //   'user_id'=>null,
      //   'profile_img_url' => null,
      //   'fb_profile' => null,
      //   'twitter_profile' => null,
      //   'instagram_profile' => null,
      //   'fb_is_visible' => null,
      //   'twitter_is_visible' => null,
      //   'instagram_is_visible' => null,
      //   'total_user' => null,

      // ];
      if($affiliateUser){


      foreach ($affiliateUser as $v) {
        $data['users'][] =[
           'name'=>$v->users->name,
           'user_id'=>$v->user_id,
           'profile_img_url'=>$v->profile ? route('person.image-views',explode('/', $v->profile->profile_image_location)[1]) : asset('assets/images/user-avatar.png'),
           'fb_profile'=>$v->profile ? $v->profile->fb_profile : null
           ,
           'twitter_profile'=>$v->profile ? $v->profile->twitter_profile : null
           ,
           'instagram_profile'=>$v->profile ? $v->profile->instagram_profile : null,
           'fb_is_visible'=>$v->profile ? $v->profile->fb_is_visible == 1 ? true : false : null,
           'twitter_is_visible'=>$v->profile ? $v->profile->twitter_is_visible == 1 ? true : false : null,
           'instagram_is_visible'=>$v->profile ? $v->profile->instagram_is_visible == 1 ? true : false : null,
           'total_user'=> $v->totalUser()

         ];

       } 
       } 
                                     
     //return ['data' =>$data];
     return new ProfileResource($data);
      //return response()->json($data,200);
    // return new AffiliateUserResource($affiliateUser);
    }
}
