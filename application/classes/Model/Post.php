<?php defined('SYSPATH') or die('No direct script access.');
class Model_Post extends ORM 
{
    protected $_belongs_to = array(
      'date'  => array(
               'model'       => 'date',
               'foreign_key' => 'date_id',
          )
    );
}
