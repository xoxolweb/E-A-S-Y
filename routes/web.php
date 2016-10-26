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
use Illuminate\Support\Facades\Route;


Auth::routes();
//admin
Route::group(['prefix'=>'admin'],function(){
    Route::post('store-object','AdminController@store_obj')->name('adminStoreObj');
    Route::post('store-spec','AdminController@store_spec')->name('adminStoreSpec');
    Route::get('categories','AdminController@show_categories')->name('adminCats');
    Route::get('objects','AdminController@show_objects')->name('adminObjects');
    Route::get('specs','AdminController@show_specialists')->name('adminSpecialists');
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
    Route::get('houses','RentController@show_houses');
    Route::get('flats','RentController@show_flats');
    Route::get('offices','RentController@show_offices');
    Route::get('lands','RentController@show_lands');
    Route::get('/','RentController@index');
});
Route::group(['prefix'=>'buy'],function(){
    Route::get('houses','BuyController@show_houses');
    Route::get('flats','BuyController@show_flats');
    Route::get('offices','BuyController@show_offices');
    Route::get('lands','BuyController@show_lands');
    Route::get('/','BuyController@index');
});
Route::get('{category}/{type}/{alias}','IndexController@detail');

Route::post('/filter','IndexController@filter')->name('filter');

Route::get('/', 'IndexController@index')->name('main');
Route::any('/register','IndexController@index');
