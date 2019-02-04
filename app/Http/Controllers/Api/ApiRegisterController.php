<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Mail\ActiveAccount;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Shohan\Earn\Sector\ReferenceUser;
use Shohan\Earn\Sector\JoiningIncomes;
use Auth;
use App\User;
use App\Http\Resources\RegisterResource;
class ApiRegisterController extends Controller
{
     public function register(Request $r){
         return new RegisterResource($this->validationUser($r));
     }
     /**
      * Validation user
      * @param  Request $r [description]
      * @return [type]     [description]
      */
     protected function validationUser(Request $r){
       $validation = Validator::make($r->all(),
      	[
      		  'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'agree'=>'required',
            'phone'=>'required|unique:users',
            'id'=>'required'
      	]);
       $u = User::find($r->id);
       if(!is_null($u)){
         $error  = $validation->errors();
       return count($error) > 0 ? ['errors'=>$error] : 
                                    ['success'=>$this->create($r->all()),
                                   'version' => '1.0.0',
                                   'valid_as_of' => date('D, d M Y H:i:s') ]
                                    ;

       }else{
        return ['errors' => ['message' =>'Reference User Not found']];
       }
       //return  ['success'=>$this->create($r->all())];

           }
     protected function create(array $data){
       $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verified'=> 0,
            'country'=>$data['country'],
            'phone'=>$data['phone'],
            'verification_code'=>crypt($data['email'],str_shuffle('wittybrand'))
        ]);
        if(!is_null($data['id']) && $user){
            $referenceUser = new ReferenceUser;
            $referenceUser->id($user->id,$data['id'])
                          ->isCreate(true); 
            JoiningIncomes::userID($user->id)
                          ->pay();          
        }
        $this->mailableForActiveUser($user);
       $token = [];
       $token['email'] = $data['email'];
       $token['password'] = $data['password'];

      if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
          $user = Auth::user();
          $success_token['token'] = $user->createToken('MyApp')->accessToken;
          $token['token'] = $user->createToken('MyApp')->accessToken;
            
        }
     
        return $token;
     }
     protected function mailableForActiveUser($user){
       Mail::to($user->email)->send(new ActiveAccount($user));
     }
}
