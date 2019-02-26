<?php defined('SYSPATH') or die('No direct script access.');
class Model_Comment extends ORM 
{
	protected $_belongs_to = array(
      'users'  => array(
               'model'       => 'users',
               'foreign_key' => 'user_id'
        )
    );
}
