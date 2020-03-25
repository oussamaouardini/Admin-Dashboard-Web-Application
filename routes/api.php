<?php

use Illuminate\Http\Request;

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
Route::get('chart', 'WebAnalyticsChartsController@chart')->name('api.chart');
Route::get('notification', 'NotificationController@notification')->name('api.notification');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
