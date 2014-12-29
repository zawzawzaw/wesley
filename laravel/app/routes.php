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
Route::resource('list', 'ListController', array('only' => array('index', 'store')));
Route::post('generic/uploadfiles', array(
  'uses' => 'GenericController@uploadfiles',
  'as' => 'generic.uploadfiles'
));
