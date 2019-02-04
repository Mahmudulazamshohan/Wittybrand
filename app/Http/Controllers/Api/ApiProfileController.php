<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Profile;
use Illuminate\Support\Facades\Validator;
class ApiProfileController extends Controller
{
   public function __construct(){
		$this->middleware('auth:api');
	}
	public function profile(){
		$user  = Auth::user();
		$profile = Profile::where('user_id',Auth::id())->get();
		return [
			'success'=>$profile
		];
	}
	public function storeProfile(Request $r){
      $validation = Validator::make($r->all(),[
        'name'=>'required|max:255',
        'password'=>'required|max:2'
      ]);
      if(count($error = $validation->errors()) > 0){
         return $error->toJson();
      }else{
         return [
          'data'=>'Profile Updated Successfully'
         ];
      }

      
	}
}
