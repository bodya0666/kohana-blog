<?php defined('SYSPATH') or die('No direct script access.');

class Model_Date extends ORM
{

	protected $_has_many = array(
		'users' => array(
			'model' => 'users',
			'through' => 'post',
		)
	);
}