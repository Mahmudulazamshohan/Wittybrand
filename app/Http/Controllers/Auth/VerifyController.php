<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class VerifyController extends Controller
{
    public function receiveRequestFromMail(Request $r){
    	if(isset($r->confirmation_code) && User::confirmationCheck($r->confirmation_code)){
         if(User::verificationCode($r->confirmation_code)){
            return view('email.verified');
         }else{
            return view('email.failed'); 
         }

    	}else {
           return view('email.failed'); 
    	}
    }
   
}
