<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Base
{
	public function action_registration()
	{
		if (Auth::instance()->logged_in()) 
		{
			HTTP::redirect('/');
		}
		if ($post = $this->request->post()) 
		{
			try
			{
				ORM::factory('user')
					->create_user($_POST, array('username', 'email', 'password'))
					->add('roles','1');
				Auth::instance()->login($_POST['email'], $_POST['password'], TRUE);
			}
			catch(ORM_Validation_Exception $e)
			{
				$errors = $e->errors('auth');
			}
		}
		$content = View::factory('registration')
			->bind('errors', $errors)
			->bind('post', $post);
		$this->template->content = $content;
		$this->template->title = 'Регистрация';
	}
	public function action_login()
	{
		if (Auth::instance()->logged_in()) 
		{
			HTTP::redirect('/');
		}
		if ($post = $this->request->post())
		{
			$post = Validation::factory($_POST);
			$post->rule('login', 'not_empty')
				 ->rule('password', 'not_empty');
			if ($post->check()) 
			{
				$data = Arr::extract($_POST, array('login', 'password', 'remember'));
				Auth::instance()->login($data['login'], $data['password'], (bool) $data['remember']);
				if (Auth::instance()->logged_in()) 
				{
					HTTP::redirect('/');
				}
				else
				{
					$errors = array(Kohana::message('validation', 'no_user'));
				}
			}
			else
			{
				$errors = $post->errors('validation');
			}	
		}
		$content = View::factory('login')
			->bind('errors', $errors)
			->bind('post', $post);
		$this->template->content = $content;
		$this->template->title = 'Авторизация';
	}
	public function action_logout()
	{
		Auth::instance()->logout();
		HTTP::redirect('login');
	}
}