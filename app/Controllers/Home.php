<?php namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		# test database
		$db = \Config\Database::connect();
		$query = $db->query('select * from users limit 1');
		$row = $query->getRowArray();
		return view('home', $row);
	}
	public function home()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
