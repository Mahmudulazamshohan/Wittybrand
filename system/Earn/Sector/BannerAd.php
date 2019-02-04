<?php
namespace Shohan\Earn\Sector;
use Shohan\Earn\Interfaces\EarningInterfaces;
use App\User;
use App\BannerAd as BA;
use App\PerEarnAmount ;
class BannerAd implements EarningInterfaces{
	protected $userID;
	protected $bannerEarn;
	/**
	 * 
	 * Pay call
	 * @param  [type] $userID [description]
	 * @return [type]         [description]
	 */
	public function pay($userID){
		$this->userID =  $userID;
		$this->bannerEarn = BA::where('user_id',$this->userID)
		                         ->where('date',date('Y-m-d'))
		                         ->first();
		  
       return $this->createFirstBannerEarn();
	}





    /** 
     * Check old data
     * @return boolean [description]
     */
	private function isBannerAd(){
      return $this->bannerEarn ? true : false;
	}


	/**
	 * update database or create
	 * @return [type] [description]
	 */
	private function createFirstBannerEarn(){
		if($this->isBannerAd()){
			 BA::where('user_id',$this->userID)
                  ->where('date',date('Y-m-d'))
                  ->update([
                  	'amount'=>$this->bannerEarn->amount + $this->payableAmount()
                    ]);
           return true;
			
		}else{
          BA::create([
				'user_id'=>$this->userID,
				'date'=>date('Y-m-d'),
				'amount'=>$this->payableAmount()
			]);
			return true;
		}
	}

	
	/**
	 * Amount Fixed by admin
	 * @return [type] [description]
	 */
	private function payableAmount(){
		$p =  PerEarnAmount::orderBy('id','desc')->first();
		return $p ? $p->video_per_view  : 0;
	}
	

}