<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\AffiliateUserResource;
use App\AffiliateUser;
class ApiDashboardController extends Controller
{
	public function __construct(){
		$this->middleware('auth:api');
	}
    public function  getUsers(){
       $user =  Auth::user();
       return new UserResource($user);
    }
    public function setUsers(Request $r){
       // Validator::make($r->all(),[
       // 	'name'=>'required|max:120|min:12',
       // 	'password'=>'required'
       // ]);
      
    }
    
    
}
