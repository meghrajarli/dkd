<?php

use Illuminate\Support\Facades\Route;
use Modules\Consumer\App\Http\Controllers\ConsumerController;

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

Route::group(['prefix' => 'consumer'], function () {
 //   Route::get('test', function(){
	// 	return "inside consumer";
	// });
   Route::get('test', 'TestController@test');
});



