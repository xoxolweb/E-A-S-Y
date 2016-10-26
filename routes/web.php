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



Auth::routes();
//admin
Route::group(['prefix'=>'admin'],function(){
    Route::post('store-object','AdminController@store_obj')->name('adminStoreObj');
    Route::post('store-spec','AdminController@store_spec')->name('adminStoreSpec');
    Route::get('edit','AdminController@edit')->name('adminEdit');
    Route::get('add-specialist/','AdminController@add_spec')->name('adminAddSpec');
    Route::get('add-object/','AdminController@add_new')->name('adminAddNew');
    Route::get('/', 'AdminController@index')->name('adminRoute');

    Route::get('logout',function(){
        Auth::logout();
        return redirect()->route('main');
    })->name('logout');
});
//site
/*Route::get('/{category}/{alias}','IndexController@detail');
Route::get('{category}','IndexController@category');*/

Route::group(['prefix'=>'rent'],function(){
    Route::get('/','RentController@index');
});
Route::group(['prefix'=>'buy'],function(){
    Route::get('/','BuyController@index');
});


Route::post('/filter','IndexController@filter')->name('filter');

Route::get('/', 'IndexController@index')->name('main');
Route::any('/register','IndexController@index');
