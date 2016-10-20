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
    Route::get('/edit','AdminController@edit')->name('adminEdit');
    Route::get('/', 'AdminController@index')->name('adminRoute');

    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('main');
    })->name('logout');
});
//site
Route::group(['prefix'=>'{category}'],function(){
    Route::get('/{detail}','IndexController@detail');
    Route::get('/','IndexController@category');
});

Route::get('/', 'IndexController@index')->name('main');
Route::any('/register','IndexController@index');
