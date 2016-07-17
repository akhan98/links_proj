<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Home extends Model
{
	public function add_link($title, $link)
	{
		$result = DB::insert('links', array('title', 'link'))->values(array($title, $link))->execute();
		
		return $result;
	}
	
	public function get_links()
	{
		$result = DB::select()->from('links')->execute();
		
		return $result;
	}
	
	public function delete_link($id = 0)
	{
		$result = DB::delete('links')->where('id', '=', $id)->execute();
		
		return $result;
	}
}