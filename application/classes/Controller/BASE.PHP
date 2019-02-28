<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template
{
    public $template = 'base';
    public function before()
    {
    	parent::before();
    	$style = array('media/stylesheet/style.css', 'https://fonts.googleapis.com/css?family=Roboto', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
    	$script = array();
        $this->template->content = NULL;
        $this->template->header = NULL;
        $this->template->style = $style;
        $this->template->script = $script;
        $this->template->title = 'blog';
    }
} 