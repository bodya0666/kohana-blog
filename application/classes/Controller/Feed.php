<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Feed extends Controller_Base
{
	public function before()
	{
		parent::before();
		if (!Auth::instance()->logged_in()) 
		{
			HTTP::redirect('login');				
		}
		$name = ORM::factory('users')
				->where('id', '=', $_SESSION['auth_user'])
				->find();
		$this->template->header = View::factory('header')
			->bind('name', $name);
	}
	public function action_index()
	{
		
		$content = View::factory('feed');
		$post = ORM::factory('post')
			->join('dates')
			->on('dates.id', '=', 'date_id')
			->order_by('dates.date', 'DESC')
			->find_all();
		$this->template->content = $content
			->bind('post', $post);
	}
	public function action_add()
	{
		if ($post = $this->request->post()) 
		{
			$post = Validation::factory($_POST);
			$post
				->rule('name', 'not_empty')
				->rule('description', 'not_empty')
				->rule('name', 'min_length', array(':value', 8))
				->rule('description', 'min_length', array(':value', 8))
				->rule('name', 'max_length', array(':value', 60))
				->rule('description', 'max_length', array(':value', 5000));
			if ($post->check())
			{
				$date = ORM::factory('date');
				$check_date = $date
					->where('date', '=', date('Y-m-d'))
					->find();
				if (!$check_date->date) 
				{
					$date
						->set('date', date('Y-m-d'))
						->save();
				}
				$date_id = ORM::factory('date')
					->where('date', '=', date('Y-m-d'))
					->find();
				ORM::factory('post')
					->set('name', $post['name'])
					->set('description', $post['description'])
					->set('user_id', $_SESSION['auth_user'])
					->set('date_id', $date_id)
					->save();
					HTTP::redirect('/');
			}
			$error = $post->errors('validation');

		}
		$content = View::factory('add')
			->bind('post', $post)
			->bind('error', $error);
		$this->template->content = $content;
	}
	public function action_post()
	{
		$id = $this->request->param('id');
 		$post = ORM::factory('post')
 			->where('id', '=', $id)
 			->find();
 		$comments = ORM::factory('comment')
 			->join('users')
			->on('users.id', '=', 'user_id')
			->order_by('comment.date', 'DESC')
			->where('post_id', '=', $id)
			->find_all();
 		if ($post->name) 
 		{
        	if (isset($_POST['submit']))
            {
            	$comment = Validation::factory($_POST);
            	$comment
            		->rule('comment', 'not_empty');
            	if ($comment->check()) 
				{
					$add_comment = ORM::factory('comment')
						->set('text', $comment['comment'])
						->set('post_id', $id)
						->set('user_id', $_SESSION['auth_user'])
						->save();
						HTTP::redirect("post/$id");
				}
            	$error = $comment->errors('validation');
            }
 		}
 		else
 		{
 			HTTP::redirect('feed');
 		}

 		$content = View::factory('post')
 			->bind('error', $error)
 			->bind('comments', $comments)
 			->bind('post', $post);
		$this->template->content = $content;
	}
}
	

