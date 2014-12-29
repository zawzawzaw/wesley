<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $softDelete = true;

	public static $rules = array(
	    'plan'=>'required',
	    'first_name'=>'required|alpha',
	    'last_name'=>'required|alpha',
	    'email'=>'required|email|unique:users',
	    'password'=>'required|min:8',
	    'country'=>'required|alpha',
	    'job_title'=>'required|alpha_dash'
    );

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}