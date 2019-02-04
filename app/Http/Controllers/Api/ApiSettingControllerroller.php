<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class ApiSettingControllerroller extends Controller
{
    public function __construct(){
        $this->middleware('auth:api');
    }
}
