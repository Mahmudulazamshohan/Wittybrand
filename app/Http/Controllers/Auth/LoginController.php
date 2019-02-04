<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected $redirectTo = '/person/dashboard';
 
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    
    // public function login(Request $request)
    // {
    //    $this->validate($request,
    //     [
    //          'email' => 'required|string',
    //         'password' => 'required|string',
    //     ]);
    //     $valiation = Validator::make($request->all(),
    //     [
    //          'email' => 'required|string',
    //         'password' => 'required|string',
    //     ]);
    //     $errors = $valiation->errors();
      
    //     if (!$errors) { 
          
        
    //      if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            
    //         return redirect()->route('person.dashboard');
            
    //      }else{
    //         return redirect()->back();
    //      }
    //  }else{
    //     session()->flash('errors','abc');
    //     return redirect()->back();
    //  }

    // }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/');
    }

}
