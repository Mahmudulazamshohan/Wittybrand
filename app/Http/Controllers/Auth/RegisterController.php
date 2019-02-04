<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Shohan\Earn\Sector\ReferenceUser;
use Shohan\Earn\Sector\JoiningIncomes;
use App\Mail\ActiveAccount;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/person/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if(!User::where('id',$data['id'])->first()){
          
        }
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'agree'=>'required',
            'phone'=>'required',
            'id'=>'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

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
        $this->mailableToClient($user);


       

        return $user;
    }
    protected function mailableToClient($user){
         Mail::to($user->email)->send(new ActiveAccount($user));
    }
}
