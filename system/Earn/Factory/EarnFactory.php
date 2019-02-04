<?php
namespace Shohan\Earn\Factory;
use Illuminate\Support\Facades\Route;
use Shohan\Earn\Sector\VideoEarn;
use Shohan\Earn\Sector\AdMobEarn;
use Shohan\Earn\Sector\AppBrainEarn;
use Shohan\Earn\Sector\ReferenceEarn;
use Shohan\Earn\Sector\BannerAd;


class EarnFactory{
	/**
	 * Create factory setup for new object
	 * @param  [type] $type [description]
	 * @return [type]       [description]
	 */
	public function create($type){

		   return $this->switchClass(function() use ($type){
                  return is_string($type) ? $type :  strval($type);
		   });
		
	}
	/**
	 * switch different class
	 * @param  [type] $functionName [description]
	 * @return [type]               [description]
	 */
	protected function switchClass($functionName){
         if(is_callable($functionName)){
         	 switch (strtolower(call_user_func($functionName))) {
         	 	case 'videoearn':
         	 		 return  new VideoEarn;
         	 		break;
         	 	case 'bannerad':
         	 		 return  new BannerAd;
         	 		break;
         	 	case 'appbrainearn':
         	 		 return  new AppBrainEarn;
         	 		break;
         	 	case 'referenceearn':
         	 		 return  new ReferenceEarn;
         	 		break;
         	 	
         	 	default:
         	 		throw new \Exception("Not Match with class name,please input correct value");
         	 		
         	 		break;
         	 };
         }
	         
         
	}
}