<?php
namespace Shohan\Earn\Sector;

use App\User;
use App\JoiningIncome;
use App\JoinAmount;
class JoiningIncomes{
    protected static $userID;

    /**
     * Get Amount 
     * @return [type] [description]
     */
	protected static function getAmount(){
          if(!is_null($last = JoinAmount::last()))
             return $last;
          else
          	 throw new \Exception("JoinAmount Model must be contain value");
	}
	/**
	 * User ID 
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public static function userID($userId){
		static::$userID = $userId;
		return new static;
	}
    /**
     * 
     * Create JoinIncome
     * @return [type] [description]
     */
	protected static function create(){
		$data = [
          'user_id'=>static::$userID,
          'amount'=>static::getAmount()
		 ];
      return JoiningIncome::create($data);
	}
	/**
	 * Complete Pay All
	 * @return [type] [description]
	 */
	public static function pay(){
		if(static::create()) 
			return true; 
		else 
			return false;
	}
}