<?php
namespace Shohan\Earn\Sector;
use Shohan\Earn\Interfaces\EarningInterfaces;
use App\AffiliateUser;
use App\User;
use App\AffiliateTotalEarn;
use App\AffiliateDailyEarn;
use App\AffiliateFees;
class ReferenceUser extends AffiliateUser{
	protected $userId;
	protected $refferceId;
	protected $affiliateFees;
	protected $thisMonth;
    
	/**
	 * set if and ref id
	 * @param  [type] $id          [description]
	 * @param  [type] $referenceId [description]
	 * @return [type]              [description]
	 */
	public function id($id = null,$referenceId = null){
		$this->thisMonth = date('Y-m-d');
        $this->affiliateFees = new AffiliateFees;
		if(!is_null($id) && !is_null($referenceId)){
           $this->userId = $id;
           $this->referenceId =  $referenceId;
		}
		return $this;

	}
     /**
      * Single pass
      * @param  boolean $isPassed [description]
      * @return boolean            [description]
      */
    public function  isCreate($isPassed = false){
    	if(is_bool($isPassed) && $isPassed == true && $this->checkReferenceUser()){
    		$this->totalEarnInclude();
    		$this->todayEarnInclude();
            return $this->create([
               'user_id'=>$this->userId(),
               'affiliate_id'=> $this->referenceId()
            ]) ? true : false;
    	}
    	return false;
    }
    /**
     * Earn for today
     * @return [type] [description]
     */
    private function todayEarnInclude(){
    	if($values = $this->dailyDateCheck()){
    		AffiliateDailyEarn::where('today_date',$this->thisMonth)->update([
    			'daily_earns'=> $values->daily_earns + $this->feesAmount()
    		]);
    	}else{
    		AffiliateDailyEarn::create([ 
    			'user_id'=>$this->referenceId(),
		        'daily_earns'=>$this->feesAmount(),
		        'today_date'=>date('Y-m-d')
		      ]);
    	}
    	return true;
    }
    /**
     * Total Earn include to the system
     * @return [type] [description]
     */
    private function totalEarnInclude(){
       if($values = $this->totalEarnCheck()){
    		AffiliateTotalEarn::where('user_id',$this->referenceId())->update([
    			'total_earns'=> $values->total_earns + $this->feesAmount()
    		]);
    	}else{
    		AffiliateTotalEarn::create([ 
    			'user_id'=>$this->referenceId(),
		        'total_earns'=>$this->feesAmount()
		      ]);
    	}
    }
    /**
     * Check Affiliate daily earn Model
     * @return [type] [description]
     */
    private function dailyDateCheck(){
    	return AffiliateDailyEarn::where('user_id',$this->referenceId())
    	       ->where('today_date',date('Y-m-d'))
    	       ->first() ;
    }
    /**
     * Total earn
     * @return [type] [description]
     */
    private function totalEarnCheck(){
    	return AffiliateTotalEarn::where('user_id',$this->referenceId())
    	      ->first();
    }
    /**
     * Pre set up fee
     * @return [type] [description]
     */
    private function feesAmount(){
    	if($values = $this->affiliateFees->where('current_month',$this->thisMonth)->orderBy('id','desc')->first()){
    		return $values->fee_amount;
    	}else{
    		return 12;
    	}

    }
    /**
     * Auth user id as interger unique id
     * @return [type] [description]
     */
    private function userId(){
        if(!is_null($this->userId)){
           return $this->userId;
        }else{

        	 throw new \Exception("Please enter user id");	 
        }
    }
    /**
     * 
     * Reference ID
     * @return [type] [description]
     */
    private function referenceId(){
        if(!is_null($this->referenceId)){
           return $this->referenceId;
        }else{

        	 throw new \Exception("Please enter reffernce id");	 
        }
    }
    /**
     * 
     * @return [type] [description]
     */
    private function checkReferenceUser(){
        return User::where('id',$this->referenceId())->first() ? true : false;
    }

}