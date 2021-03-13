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
Route::get('/linkstorage', function() {
  Artisan::call('storage:link');
});

Route::get('/','FrontendController@index')->name('home');
Route::get(trans('routes.object'),'FrontendController@object')->name('object');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){ 
    
  Route::get(trans('routes.myobjects'),'BackendController@myobjects')->name('myObjects');
  Route::match(['GET','POST'],trans('routes.saveobject').'/{id?}','BackendController@saveObject')->name('saveObject'); 
  Route::match(['GET','POST'],trans('routes.profile'),'BackendController@profile')->name('profile'); 
  Route::match(['GET','POST'],trans('routes.saveperson').'/{id?}', 'BackendController@savePerson')->name('savePerson'); 
  Route::get(trans('routes.deleteperson').'/{id}', 'BackendController@deletePerson')->name('deletePerson');
  Route::get('/deletePhoto/{id}', 'BackendController@deletePhoto')->name('deletePhoto');
  Route::get(trans('routes.showperson').'/{id}', 'BackendController@showPerson')->name('showPerson');
  Route::get(trans('routes.showteam').'/{id}', 'BackendController@showTeam')->name('showTeam');

  Route::get('/','BackendController@index')->name('adminHome');
  Route::get('elements/create/{table}', 'BackendController@create')->name('elements.create');
  Route::post('/store/{table}','BackendController@store')->name('store');
  Route::get('/shop/show/{id}','BackendController@show')->name('shop.show');
  Route::get('/shop/edit/{id}','BackendController@edit')->name('shop.edit');
  Route::get('/shop/update/{id}/{table}','BackendController@update')->name('shop.update');
  Route::get('/shop/delete/{id}','BackendController@delete')->name('shop.delete');
  Route::get('/shop','BackendController@index')->name('shop.index');
  Route::get(trans('routes.deleteobject').'/{id}', 'BackendController@deleteObject')->name('deleteObject'); 
  
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
