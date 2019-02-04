<?php
namespace Shohan\Earn\Sector;
use Shohan\Earn\Interfaces\EarningInterfaces;
use App\User;
use App\VideoEarn as VE;
use App\PerEarnAmount ;
class VideoEarn implements EarningInterfaces{
	protected $userID;
	protected $videoEarn;
	/**
	 * 
	 * Pay call
	 * @param  [type] $userID [description]
	 * @return [type]         [description]
	 */
	public function pay($userID){
		$this->userID =  $userID;
		$this->videoEarn = VE::where('user_id',$this->userID)
		                         ->where('date',date('Y-m-d'))
		                         ->first();
		  
       return $this->createFirstVideoEarn();
	}





    /** 
     * Check old data
     * @return boolean [description]
     */
	private function isVideoEarn(){
      return $this->videoEarn ? true : false;
	}


	/**
	 * update database or create
	 * @return [type] [description]
	 */
	private function createFirstVideoEarn(){
		if($this->isVideoEarn()){
			 VE::where('user_id',$this->userID)
                  ->where('date',date('Y-m-d'))
                  ->update([
                  	'amount'=>$this->videoEarn->amount + $this->payableAmount()
                    ]);
           return true;
			
		}else{
          VE::create([
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