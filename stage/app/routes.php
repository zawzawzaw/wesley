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
Route::resource('myaccount', 'MyaccountController');
Route::resource('favourite', 'FavouriteController');
Route::resource('mysearch', 'MysearchController');
Route::resource('listadmin', 'ListAdminController');

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

/* Search Result Error */
// Route::get('mysearch', array(
//   'uses' => 'MysearchController@index',
//   'as' => 'mysearch.index'
// ));

/* Detail Search Result */
Route::get('search/{id}', array(
  'uses' => 'SearchController@show',
  'as' => 'search.show'
));

/* Advanced Search Result */
Route::get('advancedsearch', array(
  'uses' => 'AdvancedsearchController@index',
  'as' => 'advancedsearch.index'
));

/* Search Result */
Route::get('advancedsearch/result', array(
  'uses' => 'AdvancedsearchController@store',
  'as' => 'advancedsearch.store'
));

/* First Search Result */
Route::post('advancedsearch/result', array(
  'uses' => 'AdvancedsearchController@store',
  'as' => 'advancedsearch.store'
));

/* Generic */
Route::get('generic', array(
  'uses' => 'GenericController@index',
  'as' => 'generic.index'
));

/* Generic */
Route::post('generic/uploadfiles', array(
  'uses' => 'GenericController@uploadfiles',
  'as' => 'generic.uploadfiles'
));

/* Generic */
Route::post('generic/checkemailexists', array(
  'uses' => 'GenericController@checkemailexists',
  'as' => 'generic.checkemailexists'
));

/* Generic */
Route::post('generic/checkuserexistsbyemail', array(
  'uses' => 'GenericController@checkuserexistsbyemail',
  'as' => 'generic.checkuserexistsbyemail'
));

/* My List */
Route::get('mylist', array(
  'uses' => 'MyListController@index',
  'as' => 'mylist.index'
));

// admin
Route::get('admin', array(
  'uses' => 'AdminController@index',
  'as' => 'admin'
));

Route::resource('admin/list', 'ListController', array('only' => array('show')));