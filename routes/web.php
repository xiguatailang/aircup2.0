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

//Route::get('/', function () {
//    return view('welcome');
//});

//all web routes come to here
Route::get('/', 'AirCupWebController@showIndex');


Route::middleware('aircupLogin')->get('/admin/{path}', 'AirCupAdminController@adapater');

Route::get('/{path}', 'AirCupWebController@adapater');



//404 remember
