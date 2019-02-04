<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ApiLoginController extends Controller
{
    public function __construct(){
       // $this->middleware('auth:api');
       
    }
     public $HTTP_STATUS  = 200;
     public function login(Request $r){
         if(Auth::attempt(['email'=>$r->email,'password'=>$r->password])){
         	$user = Auth::user();
         	$success_token['token'] = $user->createToken('MyApp')->accessToken;
         	return response()->json(['success'=>$success_token],$this->HTTP_STATUS);
            
         }else{
         	return response()->json(['error' => 'Unauthorized','message'=>'Please enter valid email and password'],401);
         }
     }
}
