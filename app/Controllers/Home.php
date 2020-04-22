<?php namespace App\Controllers;

use \App\Models\UserModel as User;

class Home extends BaseController
{
	public function index()
	{
		$user = new User();
		$current = $user->find(1);
		return view('home', $current);
	}
	public function home()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
