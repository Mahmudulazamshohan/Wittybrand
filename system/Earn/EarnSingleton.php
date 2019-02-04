<?php
namespace Shohan\Earn;
use Shohan\Earn\Factory\EarnFactory;
class EarnSingleton{
	public static $instance ;
	/**
	 * Get instance
	 * @return [type] [description]
	 */
	public static function getInstance(){
		if(!self::$instance)
			self::$instance = new EarnSingleton();
		return self::$instance;
	}
	/**
	 * Get Factory Object
	 * @return [type] [description]
	 */
	public function getFactory(){
		return new EarnFactory;
	}

}