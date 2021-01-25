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

Route::get('/','FrontendController@index')->name('home'); /* Lecture 6 */
Route::get(trans('routes.object'),'FrontendController@object')->name('object'); /* Lecture 5 */
Route::get(trans('routes.roomsearch'),'FrontendController@roomsearch')->name('roomSearch'); /* Lecture 5 */
Route::get(trans('routes.room'),'FrontendController@room')->name('room'); /* Lecture 6 */
Route::get(trans('routes.article'),'FrontendController@article')->name('article'); /* Lecture 6 */
Route::get(trans('routes.person'),'FrontendController@person')->name('person'); /* Lecture 6 */



Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){  /* Lecture 6 */  
    
  //Route::get('/','BackendController@index')->name('adminHome'); /* Lecture 6 */  
  Route::get(trans('routes.myobjects'),'BackendController@myobjects')->name('myObjects'); /* Lecture 6 */  
  Route::get(trans('routes.saveobject'),'BackendController@saveObject')->name('saveObject'); /* Lecture 6 */  
  Route::match(['GET','POST'],trans('routes.profile'),'BackendController@profile')->name('profile'); /* Lecture 39 */  
  Route::get(trans('routes.saveroom'),'BackendController@saveRoom')->name('saveRoom'); /* Lecture 6 */  
  Route::get('/cities','BackendController@cities')->name('cities.index'); /* Lecture 6 */
  Route::get('/deletePhoto/{id}', 'BackendController@deletePhoto')->name('deletePhoto');

  
  //Route::get('/', 'BackendController@index');
  //Route::get('/shop2', 'BackendController@create');
  Route::get('/','BackendController@index')->name('adminHome');
  //Route::get('/','BackendController2@index')->name('adminHome');

  //Route::get('/add','BackendController@create')->name('create');
  //Route::get('create/{tableName}','BackendController@create')->name('create');
  Route::get('elements/create/{table}', 'BackendController@create')->name('elements.create');
  Route::post('/store/{table}','BackendController@store')->name('store');
  Route::get('/shop/show/{id}','BackendController@show')->name('shop.show');
  Route::get('/shop/edit/{id}','BackendController@edit')->name('shop.edit');
  Route::get('/shop/update/{id}/{table}','BackendController@update')->name('shop.update');
  ////////////////////////////////////////////////////////////////////////////////////////////
  Route::get('/shop/delete/{id}','BackendController@delete')->name('shop.delete');
  Route::get('/shop','BackendController@index')->name('shop.index');
  //Route::resource('/shop', 'BackendController');    
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
