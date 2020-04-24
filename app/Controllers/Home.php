<?php namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		$data = [
			'create_user' => $this->session->create_user
		];
		return view('home', $data);
	}
	public function home()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
