<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::resource('sign-up', 'SignupController', array('only' => array('index', 'store')));
Route::resource('login', 'LoginController', array('only' => array('index', 'store', 'destroy')));
Route::resource('list', 'ListController', array('only' => array('index', 'store')));
// Route::resource('search', 'SearchController');
Route::resource('message', 'MessageController');

/* Search Index */
Route::get('search', array(
  'uses' => 'SearchController@index',
  'as' => 'search.index'
));

/* Search Result */
Route::get('search/result', array(
  'uses' => 'SearchController@store',
  'as' => 'search.store'
));

/* First Search Result */
Route::post('search/result', array(
  'uses' => 'SearchController@store',
  'as' => 'search.store'
));

/* Detail Search Product Result */
Route::get('search/company/{id}', array(
  'uses' => 'SearchController@company',
  'as' => 'search.company'
));

/* Detail Search Result */
Route::get('search/{id}', array(
  'uses' => 'SearchController@show',
  'as' => 'search.show'
));

Route::post('generic/uploadfiles', array(
  'uses' => 'GenericController@uploadfiles',
  'as' => 'generic.uploadfiles'
));

// admin
Route::get('admin', array(
  'uses' => 'AdminController@index',
  'as' => 'admin'
));

Route::resource('admin/list', 'ListController', array('only' => array('show')));