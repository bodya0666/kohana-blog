<?php defined('SYSPATH') OR die('No direct script access.'); 

class Model_Validation
{
	private function explode_date($date)
	{
		$date = explode('-', $date);
		$dates = array();
		$dates['year'] = $date[0];
		$dates['month'] = $date[1];
		$dates['day'] = $date[2];
		return $dates;
	}
	private function check_date($date, $current)
	{
		return ($date >= $current);
	}
	public function year($date)
	{
		$dates = $this->explode_date($date);
		return $this->check_date($dates['year'], date('Y'));
	}
	public function month($date)
	{
		$dates = $this->explode_date($date);
		if ($dates['year'] == date('Y')) 
		{
			return ($this->check_date($dates['month'], date('m')) AND $this->check_date(12, $dates['month']));
		}
		else
		{
			return ($this->check_date(12, $dates['month']));
		}
	}
	public function day($date)
	{
		$dates = $this->explode_date($date);
		if ($dates['year'] == date('Y') AND $dates['month'] == date('m') AND $this->check_date($dates['day'] - 1, date('d')) != true) 
		{
			$dates['month'] = false;
		}
		switch ($dates['month']) 
		{
			case 1:
				return ($dates['day'] < 32);
				break;
			case 2:
				if ($dates['year'] % 4 == 0) 
				{
					return ($dates['day'] < 30);
				}
				else
				{
					return ($dates['day'] < 29);
				}
				break;
			case 3:
				return ($dates['day'] < 32);
				break;
			case 4:
				return ($dates['day'] < 31);
				break;
			case 5:
				return ($dates['day'] < 32);
				break;
			case 6:
				return ($dates['day'] < 31);
				break;
			case 7:
				return ($dates['day'] < 32);
				break;
			case 8:
				return ($dates['day'] < 32);
				break;
			case 9:
				return ($dates['day'] < 31);
				break;
			case 10:
				return ($dates['day'] < 32);
				break;
			case 11:
				return ($dates['day'] < 31);
				break;
			case 12:
				return ($dates['day'] < 32);
				break;
			default:
				return false;
		}
	}
}
 
?>