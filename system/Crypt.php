<?php
namespace Shohan;
class Crypt{
	/**
	 * 
	 * Salt
	 * @return [type] [description]
	 */
	private static function salt(){
		return '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
	}
	/**
	 * Hash
	 * @param  [type] $string [description]
	 * @return [type]         [description]
	 */
	public static function hash($string = null){
		return crypt($string ? $string : "07ca0beab7ff339bb612d153923acf13",self::salt());
	}
	/**
	 * Match
	 * @param  [type] $request [description]
	 * @return [type]          [description]
	 */
	public static function match($request){
       if($request->_token == self::hash()){
         return true;
       }else{
       	 return false;
       }
	}
	public static function result(){
		return response()->json([]);
	}
	public static function response($request){
		if(!self::match($request)){
		   return response('Unauthorize request');	
		}else{
			return self::result(); 
		}
       
	}
}