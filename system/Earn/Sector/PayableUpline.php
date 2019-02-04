<?php
namespace Shohan\Earn\Sector;
use App\AdRefEarning;
use App\AffiliateUser;
class PayableUpline{
   private $affiliate_user;
   private $type;
   private $userID;
   private $isAvailable;
   public function __construct($userID,$type){
     	$this->affiliate_user =  $userID; 
     	$this->type =  $type;
     	$this->userID = $this->affiliateUser();
     	$this->isAvailable = AdRefEarning::where('user_id',$this->affiliateUser())
     	                          ->where('affiliate_user',$userID)
     	                          ->where('type_of_earn',$type)
     	                          ->first();
   
   }
  /**
   * Add all
   */
   public function add(){
       return [
         'create' => $this->createFirst()
       ];
   }
   /**
    * 
    * Affiliate User
    * @return [type] [description]
    */
   private function affiliateUser(){
      $affiliateUsers = AffiliateUser::where('user_id',$this->affiliate_user)
                                     ->first();
     return $affiliateUsers
        ? $affiliateUsers->affiliate_id : null;

   }
   /**
    * 
    * Create First AdRef
    * @return [type] [description]
    */
   private function createFirst(){
     if(is_null($this->isAvailable)){
     	return AdRefEarning::create([
     		'user_id'=>$this->userID,
     		'affiliate_user'=>$this->affiliate_user,
     		'type_of_earn'=>$this->type,
     		'date'=>date('Y-m-d'),
     		'amount'=> $this->payableAmount()
     	]);
     }else{
     	return AdRefEarning::where('user_id',$this->affiliateUser())
     	                          ->where('affiliate_user',$this->affiliate_user)
     	                          ->where('type_of_earn',$this->type)
     	                          ->update([
     	                          	'amount'=> $this->isAvailable->amount +  $this->payableAmount()
     	                          ]);
     }
   }
   
   protected function payableAmount(){
   	return 5;
   }


}
