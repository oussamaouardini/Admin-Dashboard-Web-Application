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

Route::get('/', function () {
    return view('webAnalytics');
});

Auth::routes();


Route::get('/home', 'WebController@index')->name('home');
Route::get('/webAnalytics', 'WebController@index')->name('web');
Route::get('/salesAnalytics', 'SaleController@index')->name('sales');
Route::get('/appAnalytics', 'AppController@index')->name('app');
Route::get('/help', 'HelpController@index')->name('help');
Route::get('/finance', 'FinanceController@index')->name('finance');
Route::get('/products', 'ProductController@index')->name('product');
