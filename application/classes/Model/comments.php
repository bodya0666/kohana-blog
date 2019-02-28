<?php defined('SYSPATH') or die('No direct script access.');
class Model_Comments 
{
	public function to_arr($comments)
	{
		$i = 0;
		$new_array = array();
		while ($comments[$i]) 
		{	
			$new_array[$i] = array('id' => $comments[$i]->id, 'text' => $comments[$i]->text, 'date' => $comments[$i]->date,'user' => $comments[$i]->users->username,  'parent_id' => $comments[$i]->parent_id);
			$i++;
		}
		return $new_array;
	}
	public function create_tree($arr)
	{
		$parent_arr = array();
		foreach ($arr as $key => $value) 
		{
			$parent_arr[$value['parent_id']][$value['id']] = $value;
		}
		$tree_elem = $parent_arr[0];
		$this->generate_elem($tree_elem, $parent_arr);
		return $tree_elem;
	}
	public function generate_elem(&$tree_elem, $parent_arr)
	{
		foreach ($tree_elem as $key => $value) 
		{
			if (!isset($item['children'])) 
			{
				$tree_elem[$key]['children'] = array();
			}
			if (array_key_exists($key, $parent_arr)) 
			{
				$tree_elem[$key]['children'] = $parent_arr[$key];
				$this->generate_elem($tree_elem[$key]['children'], $parent_arr);
			}
		}
	}
}