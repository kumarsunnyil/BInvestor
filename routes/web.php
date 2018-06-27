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
/*
Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[
    'uses'=>'BIDefaultController@getDefaultHome',
    'as'=>'home'
]);

Route::get('/overview',[
    'uses'=>'BIDefaultController@getOverview',
    'as'=>'overview'
]);

Route::get('/clist',[
    'uses'=>'BIDefaultController@getClist',
    'as'=>'clist'
]);

Route::get('company/add-to-listing', [
    'uses'=>'BIDefaultController@getAddToList',
    'as'=>'company.addToList'
]);


Route::post('company/add-to-listing', [
    'uses'=>'BIDefaultController@postAddToList',
    'as'=>'company/add-to-listing'
]);

Route::get('company/market-overview', [
    'uses'=>'BIDefaultController@getMarketOverView',
    'as'=>'company/market-overview'
]);

