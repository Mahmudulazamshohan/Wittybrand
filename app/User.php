<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password','verified','country','phone','verification_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function verificationCode($token){
        return static::where('verification_code',$token)->first() ? 
                        static::where('verification_code',$token)->update([
                            'verified'=>1
                        ]) : null;
    }
    public static function confirmationCheck($token){
       return static::where('verification_code',$token)->first() ? 1 : 0;
    }
}
