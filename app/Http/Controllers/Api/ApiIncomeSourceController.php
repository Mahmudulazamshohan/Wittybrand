<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiIncomeSourceController extends Controller
{
    public function __construct(){
		$this->middleware('auth:api');
	}
    public function videoEarn(){
    	return response()->json([
          'name'=>'Shohan'
    	]);
    }
}
