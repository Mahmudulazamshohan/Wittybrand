<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Shohan\Earn\Factory\EarnFactory;
use Shohan\Earn\Sector\PayableUpline;
use Auth;
class ApiEarnController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:api');
    }

    public function payUserVideoIncome(Request $r){
      $earnFactory =  new EarnFactory();
      $videoEarn = $earnFactory->create('videoearn');
      $u = new PayableUpline(Auth::id(),'video');
      

     return [
     	'data'=>[
           'paid'=>$videoEarn->pay(Auth::id()),
           'upline_paid'=> $u->add() ? true : false
     	],
     	'version'=>'1.0.0',
        'valid_as_of'=>date('D, d M Y H:i:s')
     ];
    }
    public function payUserBannerAdIncome(Request $r){
      $earnFactory =  new EarnFactory();
      $bannerAd = $earnFactory->create('bannerad');
      $u = new PayableUpline(Auth::id(),'banner');
     


      return [
     	'data'=>[
           'paid'=>$bannerAd->pay(Auth::id()),
           'upline_paid'=> $u->add() ? true : false
     	],
     	'version'=>'1.0.0',
        'valid_as_of'=>date('D, d M Y H:i:s')
     ];
    }
    public function payUserQuizIncome(Request $r){
      return [
     	'data'=>[
           'paid'=>true
     	],
     	'version'=>'1.0.0',
        'valid_as_of'=>date('D, d M Y H:i:s')
     ];
    }


}
