<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Auth;

/*Route::get('/', function () {
    return view('welcome');
});*/



Auth::routes();
//admin
Route::group(['prefix'=>'admin'],function(){
    Route::post('/add','AdminController@add');
    Route::get('/', 'AdminController@index')->name('adminRoute');

});
//site
Route::group(['prefix'=>'{category}'],function(){
    Route::get('/{detail}','IndexController@detail');
    Route::get('/','IndexController@category');
});

Route::get('/', 'IndexController@index')->name('main');
Route::any('/register','IndexController@index');
