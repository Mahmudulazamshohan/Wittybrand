<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Shohan\Earn\EarnSingleton;
use Shohan\Earn\Factory\EarnFactory;
use Shohan\Earn\Sector\VideoEarn;
use App\Mail\ActiveAccount;
/*
 |------------------------------------------
 */
use Shohan\Earn\Sector\ReferenceUser;
use App\AffiliateFees;
use Shohan\Earn\Sector\JoiningIncomes;
use App\User;
Route::get('/', function () {
  return view('main.index');
})->name('main.index');
use Illuminate\Support\Facades\DB;
Route::get('/tests',function(){
  //Mail::to('mahmudulazamshohan7@gmail.com')->send(new ActiveAccount(User::where('verification_code','ibQpfq/rwPVPY')->first()));
  //return view('email.mail-theme');
});
Route::get('confirm-mail','Auth\VerifyController@receiveRequestFromMail')->name('confirm-mail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('person')->group(function(){
   Route::get('dashboard','PersonController@dashboard')->name('person.dashboard');
   Route::get('profile','PersonController@profile')->name('person.profile');
   Route::get('reference-user','PersonController@referenceUser')->name('person.reference-user');
   Route::post('store-profile','PersonController@storeProfile')->name('person.store-profile');
   Route::get('image-views/{filename}','PersonController@imageViews')->name('person.image-views');
   Route::get('help','PersonController@help')->name('person.help');
   Route::get('challenge','PersonController@challenge')->name('person.challenge');

   Route::get('change-password','PersonController@changePassword')->name('person.change-password');
   Route::post('store-change-password','PersonController@storeChangePassword')->name('person.store-change-password');

   Route::get('apps','PersonController@apps')->name('person.apps');

   Route::get('notification/{id}/{token}','NotificationController@notification')->name('person.notification');

   Route::get('feedback','PersonController@feedBack')->name('person.feedback');
   Route::post('store-feedback','PersonController@storeFeedBack')->name('person.store-feedback');





});
