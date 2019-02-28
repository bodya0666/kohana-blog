<?php defined('SYSPATH') OR die('No direct script access.');

class Model_User extends Model_Auth_User
{
	public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
				array('min_length', array(':value', 2)),
				array('max_length', array(':value', 14)),
				array(array($this, 'unique'), array('username', ':value')),
			),
			'password' => array(
				array('not_empty'),
				array('min_length', array(':value', 9)),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
				array('min_length', array(':value', 5)),
				array('max_length', array(':value', 127)),
				array(array($this, 'unique'), array('email', ':value')),
			),
			//TRUE => 
		);
	}
}
