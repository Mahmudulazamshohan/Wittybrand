<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login','Api\ApiLoginController@login');
Route::post('/register','Api\ApiRegisterController@register');
//User own data
Route::post('/user', 'Api\ApiDashboardController@getUsers');
//Refference use info
Route::post('/get-affiliate-users', 'Api\ApiMyTeamControllerroller@getAffiliateUsers');
//Profile of users
Route::post('/profile', 'Api\ApiProfileController@profile');
Route::post('/store-profile', 'Api\ApiProfileController@storeProfile');
//Ads revenue share
Route::post('/pay-user-video-income','Api\ApiEarnController@payUserVideoIncome');
Route::post('/pay-user-bannerad-income','Api\ApiEarnController@payUserBannerAdIncome');
Route::post('/pay-user-quiz-income','Api\ApiEarnController@payUserQuizIncome');
//Notification Part
Route::post('/notification','Api\ApiNotificationController@pushNotification');
Route::post('/view-notification','Api\ApiNotificationController@viewNotification');








//Route::post('/user', 'Api\ApiDashboardController@getUsers');



