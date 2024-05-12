<?php

use Illuminate\Support\Facades\Route;
use Modules\B1\App\Http\Controllers\B1Controller;

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

Route::group([], function () {
    Route::resource('b1', B1Controller::class)->names('b1');
});
